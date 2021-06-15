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

}
