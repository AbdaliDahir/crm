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

    public function update($data, $id)
    {
        $this->db->select('status');
        $this->db->where('id', $id);
        $old_status = $this->db->get(db_prefix() . 'patrimoines')->row()->status;

        $send_created_email = false;
        if (isset($data['send_created_email'])) {
            unset($data['send_created_email']);
            $send_created_email = true;
        }

        $send_patrimoine_marked_as_finished_email_to_contacts = false;
        if (isset($data['patrimoine_marked_as_finished_email_to_contacts'])) {
            unset($data['patrimoine_marked_as_finished_email_to_contacts']);
            $send_patrimoine_marked_as_finished_email_to_contacts = true;
        }

        $original_patrimoine = $this->get($id);

        if (isset($data['notify_patrimoine_members_status_change'])) {
            $notify_patrimoine_members_status_change = true;
            unset($data['notify_patrimoine_members_status_change']);
        }
        $affectedRows = 0;
        if (!isset($data['settings'])) {
            $this->db->where('patrimoine_id', $id);
            $this->db->update(db_prefix() . 'patrimoine_settings', [
                'value' => 0,
            ]);
            if ($this->db->affected_rows() > 0) {
                $affectedRows++;
            }
        } else {
            $_settings = [];
            $_values   = [];

            foreach ($data['settings'] as $name => $val) {
                array_push($_settings, $name);
                $_values[$name] = $val;
            }

            unset($data['settings']);
            $original_settings = $this->get_patrimoine_settings($id);

            foreach ($original_settings as $setting) {
                if ($setting['name'] != 'available_features') {
                    if (in_array($setting['name'], $_settings)) {
                        $value_setting = 1;
                    } else {
                        $value_setting = 0;
                    }
                } else {
                    $tabs         = get_patrimoine_tabs_admin();
                    $tab_settings = [];
                    foreach ($_values[$setting['name']] as $tab) {
                        $tab_settings[$tab] = 1;
                    }
                    foreach ($tabs as $tab) {
                        if (!isset($tab['collapse'])) {
                            if (!in_array($tab['slug'], $_values[$setting['name']])) {
                                $tab_settings[$tab['slug']] = 0;
                            }
                        } else {
                            foreach ($tab['children'] as $tab_dropdown) {
                                if (!in_array($tab_dropdown['slug'], $_values[$setting['name']])) {
                                    $tab_settings[$tab_dropdown['slug']] = 0;
                                }
                            }
                        }
                    }
                    $value_setting = serialize($tab_settings);
                }

                $this->db->where('patrimoine_id', $id);
                $this->db->where('name', $setting['name']);
                $this->db->update(db_prefix() . 'patrimoine_settings', [
                    'value' => $value_setting,
                ]);

                if ($this->db->affected_rows() > 0) {
                    $affectedRows++;
                }
            }
        }

        $data['patrimoine_cost']    = !empty($data['patrimoine_cost']) ? $data['patrimoine_cost'] : null;
        $data['estimated_hours'] = !empty($data['estimated_hours']) ? $data['estimated_hours'] : null;

        if ($old_status == 4 && $data['status'] != 4) {
            $data['date_finished'] = null;
        } elseif (isset($data['date_finished'])) {
            $data['date_finished'] = to_sql_date($data['date_finished'], true);
        }

        if (isset($data['progress_from_tasks'])) {
            $data['progress_from_tasks'] = 1;
        } else {
            $data['progress_from_tasks'] = 0;
        }

        if (isset($data['custom_fields'])) {
            $custom_fields = $data['custom_fields'];
            if (handle_custom_fields_post($id, $custom_fields)) {
                $affectedRows++;
            }
            unset($data['custom_fields']);
        }

        if (!empty($data['deadline'])) {
            $data['deadline'] = to_sql_date($data['deadline']);
        } else {
            $data['deadline'] = null;
        }

        $data['start_date'] = to_sql_date($data['start_date']);
        if ($data['billing_type'] == 1) {
            $data['patrimoine_rate_per_hour'] = 0;
        } elseif ($data['billing_type'] == 2) {
            $data['patrimoine_cost'] = 0;
        } else {
            $data['patrimoine_rate_per_hour'] = 0;
            $data['patrimoine_cost']          = 0;
        }
        if (isset($data['patrimoine_members'])) {
            $patrimoine_members = $data['patrimoine_members'];
            unset($data['patrimoine_members']);
        }
        $_pm = [];
        if (isset($patrimoine_members)) {
            $_pm['patrimoine_members'] = $patrimoine_members;
        }
        if ($this->add_edit_members($_pm, $id)) {
            $affectedRows++;
        }
        if (isset($data['mark_all_tasks_as_completed'])) {
            $mark_all_tasks_as_completed = true;
            unset($data['mark_all_tasks_as_completed']);
        }

        if (isset($data['tags'])) {
            if (handle_tags_save($data['tags'], $id, 'patrimoine')) {
                $affectedRows++;
            }
            unset($data['tags']);
        }

        if (isset($data['cancel_recurring_tasks'])) {
            unset($data['cancel_recurring_tasks']);
            $this->cancel_recurring_tasks($id);
        }

        if (isset($data['contact_notification'])) {
            if ($data['contact_notification'] == 2) {
                $data['notify_contacts'] = serialize($data['notify_contacts']);
            } else {
                $data['notify_contacts'] = serialize([]);
            }
        }

        $data = hooks()->apply_filters('before_update_patrimoine', $data, $id);

        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'patrimoines', $data);

        if ($this->db->affected_rows() > 0) {
            if (isset($mark_all_tasks_as_completed)) {
                $this->_mark_all_patrimoine_tasks_as_completed($id);
            }
            $affectedRows++;
        }

        if ($send_created_email == true) {
            if ($this->send_patrimoine_customer_email($id, 'patrimoine_created_to_customer')) {
                $affectedRows++;
            }
        }

        if ($send_patrimoine_marked_as_finished_email_to_contacts == true) {
            if ($this->send_patrimoine_customer_email($id, 'patrimoine_marked_as_finished_to_customer')) {
                $affectedRows++;
            }
        }
        if ($affectedRows > 0) {
            $this->log_activity($id, 'patrimoine_activity_updated');
            log_activity('Patrimoine Updated [ID: ' . $id . ']');

            if ($original_patrimoine->status != $data['status']) {
                hooks()->do_action('patrimoine_status_changed', [
                    'status'     => $data['status'],
                    'patrimoine_id' => $id,
                ]);
                // Give space this log to be on top
                sleep(1);
                if ($data['status'] == 4) {
                    $this->log_activity($id, 'patrimoine_marked_as_finished');
                    $this->db->where('id', $id);
                    $this->db->update(db_prefix() . 'patrimoines', ['date_finished' => date('Y-m-d H:i:s')]);
                } else {
                    $this->log_activity($id, 'patrimoine_status_updated', '<b><lang>patrimoine_status_' . $data['status'] . '</lang></b>');
                }

                if (isset($notify_patrimoine_members_status_change)) {
                    $this->_notify_patrimoine_members_status_change($id, $original_patrimoine->status, $data['status']);
                }
            }
            hooks()->do_action('after_update_patrimoine', $id);

            return true;
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
