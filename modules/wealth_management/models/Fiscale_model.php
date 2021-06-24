<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fiscale_model extends App_Model
{
    private $values;

    public function __construct()
    {
        parent::__construct();

        $this->values = [
            'patr_fiscale_description'
        ];
    }


    public function save_fiscale($data, $patrimoine_id)
    {
        // Check if the note exists for this patrimoine;
        $this->db->where('patrimoineid', $patrimoine_id);
        $fiscale = $this->db->get(db_prefix() . 'patrimoines_fiscale')->row();
        if ($fiscale) {

            $data['updated_date'] = date('Y-m-d H:i:s');
            unset($data['created_date']);
            $this->db->where('id', $fiscale->id);
            $this->db->update(db_prefix() . 'patrimoines_fiscale', [
                'patr_fiscale_description' => $data['patr_fiscale_description'],
            ]);
            if ($this->db->affected_rows() > 0) {
                return true;
            }

            return false;
        }

        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert(db_prefix() . 'patrimoines_fiscale', [
            'patr_fiscale_description'    => $data['patr_fiscale_description'],
            'patrimoineid' => $patrimoine_id,
        ]);
        
        $insert_id = $this->db->insert_id();

        if ($insert_id) {
            $this->log_activity($data['patrimoineid'], 'New_Patrimoine_Fiscale_Added');
            log_activity('Patrimoine Fiscale Added [ID:' . $insert_id . ']');
            return $insert_id;
        } 

        return false;

    }

    // /**
    //  * Get task by id
    //  * @param  mixed $id task id
    //  * @return object
    //  */
    // public function get($id, $where = [])
    // { 
    //     $this->db->where('id', $id);
    //     $this->db->where($where);
    //     $availability = $this->db->get(db_prefix() . 'patrimoines_fiscale')->row();

    //     return hooks()->apply_filters('get_availability', $availability);
    // }

    public function get_fiscale_text($id) {
        $this->db->where('patrimoineid', $id);
        $fiscale = $this->db->get(db_prefix() . 'patrimoines_fiscale')->row();
        if ($fiscale) {
            return $fiscale->patr_fiscale_description;
        }
        return '';
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
