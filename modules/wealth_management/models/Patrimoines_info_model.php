<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Patrimoines_info_model extends App_Model
{
    private $attributes;

    public function __construct()
    {
        parent::__construct();

        $this->attributes = ['patr_me_firstname', 'patr_me_lastname', 'patr_me_birthday','patr_me_profession','patr_me_depart','patr_me_nss', 'patr_me_address', 'patr_me_tele_perso', 'patr_me_tele_m', 'patr_me_tele_mme', 'patr_me_email_one', 'patr_me_email_two', 'patr_partner_firstname', 'patr_partner_lastname', 'patr_partner_birthday', 'patr_partner_profession', 'patr_partner_depart', 'patr_partner_nss', 'patr_partner_precedent_marriage_date', 'patr_partner_regime', 'patr_partner_marriage_date', 'patr_partner_marriage_duration', 'patr_partner_situtation', 'patr_partner_finance', 'patr_partner_donation', 'patrimoineid'];
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data)
    {   
        if (isset($data['patr_me_birthday']) && !empty($data['patr_me_birthday'])) {
            $data['patr_me_birthday'] = to_sql_date($data['patr_me_birthday']);
        }
        
        if(!isset($data['patr_partner_donation']) || $data['patr_partner_donation'] != 0 || $data['patr_partner_donation'] != 1) {
            $data['patr_partner_donation'] = 0;
        }

        unset($data['info_id']);
        
        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');

        $this->db->insert(db_prefix() . 'patrimoines_info', $data);
        $patrimoines_info_id = $this->db->insert_id();

        if ($patrimoines_info_id) {

            // if (isset($custom_fields)) {
            //     handle_custom_fields_post($patrimoines_info_id, $custom_fields);
            // }

            // hooks()->do_action('ticket_created', $patrimoines_info_id);
            // log_activity('patrimoines info has been changed [ID: ' . $patrimoines_info_id . ']');

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
        $data['id'] = $data['info_id'];
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        unset($data['info_id']);

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
        
        $this->db->where('id', $data['id']);
        $patrimoines_info_id = $this->db->update(db_prefix() . 'patrimoines_info', $data); 

        if ($patrimoines_info_id) {

            return $patrimoines_info_id;
        }

        return false;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
