<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Passif_model extends App_Model
{
    private $attributes;
    private $float_attributes;
    private $errors = [];

    public function __construct()
    {
        parent::__construct();

        $this->attributes = [
            'patr_passifs_designation',
            'patr_passifs_capital',
            'patr_passifs_duree',
            'patr_passifs_taux',
            'patr_passifs_deces',
            'patr_passifs_particularites',
        ];

        $this->float_attributes = ['patr_passifs_capital','patr_passifs_taux'];
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data)
    {  

        foreach($this->attributes as $attribute) {
            if(isset($data[$attribute]) && empty($data[$attribute])) {
                $data[$attribute] = "";
            } else {
                $data[$attribute] = $this->test_input($data[$attribute]);
            }
        }

        // required inputs.
        if(empty($data['patr_passifs_designation'])) {
            $this->errors['designation'] = 'designation can not be empty'; 
        } 

        // check for float.
        foreach($this->float_attributes as $float_attribute) {
            if (isset($data[$float_attribute]) && !empty($data[$float_attribute])) {
                $capital = filter_var($data[$float_attribute], FILTER_VALIDATE_FLOAT);
                if ($capital === false) {
                    $this->errors[$float_attribute] = 'error in float number';
                } else {
                    $data[$float_attribute] = $data[$float_attribute];
                }
            }
        }

        if(count($this->errors) > 0) {
            return $this->errors;
        }

        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        
        $this->db->insert(db_prefix() . 'patrimoines_passifs', $data);
        $patrimoines_info_id = $this->db->insert_id();

        if ($patrimoines_info_id) {
            return $patrimoines_info_id;
        }  

        return false;
    }

    /**
     * Get task by id
     * @param  mixed $id task id
     * @return object
     */
    public function get($id, $where = [])
    { 
        $this->db->where('id', $id);
        $this->db->where($where);
        $passif = $this->db->get(db_prefix() . 'patrimoines_passifs')->row();

        return hooks()->apply_filters('get_passifs', $passif);
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_passifs')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);

            foreach ($this->values as $value) {
                $data[$value]   = trim($data[$value]);
            }

            $data['updated_date'] = date('Y-m-d H:i:s');
        }
        
        $this->db->where('id', $data['id']);
        $_id = $this->db->update(db_prefix() . 'patrimoines_passifs', $data); 

        if ($_id) { 
            return $_id;
        }

        return false;
    }

    /**
     * Delete task and all connections
     * @param  mixed $id taskid
     * @return boolean
     */
    public function delete_passif($id)
    {
        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoines_passifs');
        
        return true;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
