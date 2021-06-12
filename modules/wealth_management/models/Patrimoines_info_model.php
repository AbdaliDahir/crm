<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Patrimoines_info_model extends App_Model
{
    private $patrimoine_settings;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data)
    {   
        $data['patr_me_firstname']   = trim($data['patr_me_firstname']);
        $data['patr_me_lastname']   = trim($data['patr_me_lastname']);
        $data['patr_me_address']   = trim($data['patr_me_address']);

        if (isset($data['patr_me_birthday'])) {
            $data['patr_me_birthday'] = to_sql_date($data['patr_me_birthday']);
        }

        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $data['patr_partner_donation'] = $data['settings']['patr_partner_donation'];

        unset($data['settings']);


        $this->db->insert(db_prefix() . 'patrimoines_info', $data);
        $patrimoines_info_id = $this->db->insert_id();

        if ($patrimoines_info_id) {

            // if (isset($custom_fields)) {
            //     handle_custom_fields_post($patrimoines_info_id, $custom_fields);
            // }

            // hooks()->do_action('ticket_created', $patrimoines_info_id);
            // log_activity('Patremoines info has been changed [ID: ' . $patrimoines_info_id . ']');

            return $patrimoines_info_id;
        }

        return false;
    }

    public function get_info($id) {
        if($id) {
            $query = $this->db->get_where('patrimoines_info', array('patrimoineid' => $id));
			return $query->row();
        }
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_info')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);
            unset($data['settings']);

            $data['updated_date'] = date('Y-m-d H:i:s');
            $data['patr_me_firstname']   = trim($data['patr_me_firstname']);
            $data['patr_me_lastname']   = trim($data['patr_me_lastname']);
            $data['patr_me_address']   = trim($data['patr_me_address']);
    
            if (isset($data['patr_me_birthday'])) {
                $data['patr_me_birthday'] = to_sql_date($data['patr_me_birthday']);
            }
        }
        
        $patrimoines_info_id = $this->db->update(db_prefix() . 'patrimoines_info', $data); 

        if ($patrimoines_info_id) {

            return $patrimoines_info_id;
        }

        return false;
    }

    public function delete($patrimoine_id)
    {
        $patrimoine_name = get_patrimoine_name_by_id($patrimoine_id);

        $this->db->where('id', $patrimoine_id);
        $this->db->delete(db_prefix() . 'patrimoines');
        if ($this->db->affected_rows() > 0) {
            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_members');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_notes');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'milestones');

            // Delete the custom field values
            $this->db->where('relid', $patrimoine_id);
            $this->db->where('fieldto', 'patrimoines');
            $this->db->delete(db_prefix() . 'customfieldsvalues');

            $this->db->where('rel_id', $patrimoine_id);
            $this->db->where('rel_type', 'patrimoine');
            $this->db->delete(db_prefix() . 'taggables');


            $this->db->where('patrimoine_id', $patrimoine_id);
            $discussions = $this->db->get(db_prefix() . 'patrimoinediscussions')->result_array();
            foreach ($discussions as $discussion) {
                $discussion_comments = $this->get_discussion_comments($discussion['id'], 'regular');
                foreach ($discussion_comments as $comment) {
                    $this->delete_discussion_comment_attachment($comment['file_name'], $discussion['id']);
                }
                $this->db->where('discussion_id', $discussion['id']);
                $this->db->delete(db_prefix() . 'patrimoinediscussioncomments');
            }
            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoinediscussions');

            $files = $this->get_files($patrimoine_id);
            foreach ($files as $file) {
                $this->remove_file($file['id']);
            }

            $tasks = $this->get_tasks($patrimoine_id);
            foreach ($tasks as $task) {
                $this->tasks_model->delete_task($task['id'], false);
            }

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_settings');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_activity');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'expenses', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'contracts', [
                'patrimoine_id' => null,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'invoices', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'creditnotes', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'estimates', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'tickets', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'pinned_patrimoines');

            log_activity('Patrimoine Deleted [ID: ' . $patrimoine_id . ', Name: ' . $patrimoine_name . ']');

            return true;
        }

        return false;
    }

}
