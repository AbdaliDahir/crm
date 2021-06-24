<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Donation_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();

    }


    public function save_donation($data, $patrimoine_id)
    {
        // Check if the note exists for this patrimoine;
        $this->db->where('patrimoineid', $patrimoine_id);
        $donation = $this->db->get(db_prefix() . 'patrimoines_donation')->row();
        if ($donation) {

            $data['updated_date'] = date('Y-m-d H:i:s');
            unset($data['created_date']);
            $this->db->where('id', $donation->id);
            $this->db->update(db_prefix() . 'patrimoines_donation', [
                'patr_donation_description' => $data['patr_donation_description'],
            ]);
            if ($this->db->affected_rows() > 0) {
                return true;
            }

            return false;
        }

        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert(db_prefix() . 'patrimoines_donation', [
            'patr_donation_description'    => $data['patr_donation_description'],
            'patrimoineid' => $patrimoine_id,
        ]);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            return true;
        }

        return false;

    }

    public function log_activity($patrimoine_id, $description_key)
    {
        $data['description_key']     = $description_key;
        $data['additional_data']     = "";
        $data['visible_to_customer'] = 1;
        $data['patrimoine_id']          = $patrimoine_id;
        $data['dateadded']           = date('Y-m-d H:i:s');

        $data = hooks()->apply_filters('before_log_patrimoine_activity', $data);

        $this->db->insert(db_prefix() . 'patrimoine_activity', $data);
    }

    public function get_donation_text($id) {
        $this->db->where('patrimoineid', $id);
        $donation = $this->db->get(db_prefix() . 'patrimoines_donation')->row();
        if ($donation) {
            return $donation->patr_donation_description;
        }
        return '';
    }

}
