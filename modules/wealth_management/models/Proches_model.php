<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Proches_model extends App_Model
{
    private $attributes = [];
    private $errors = [];

    // `patr_proches_username`, 
    // `patr_proches_birthday`, 
    // `patr_proches_lien_parente`, 
    // `patr_proches_charge`, 
    // `patr_proches_particularites`, 
    // `patr_proches_tele`, 
    // `patr_proches_email`, 
    // `patr_proches_address`, 
    // `patr_proches_contact`

    public function __construct()
    {
        $this->attributes = [
            'patr_proches_username',   
            'patr_proches_lien_parente', 
            'patr_proches_particularites', 
            'patr_proches_tele', 
            'patr_proches_address', 
            'patr_proches_contact',
            'patr_proches_email'
        ];
        parent::__construct();
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data)
    {   

        foreach($this->attributes as $attribute) {
            if(empty($data[$attribute])) {
                $data[$attribute] = "";
            } else {
                $data[$attribute] = $this->test_input($data[$attribute]);
            }
        }
        
        // required inputs.
        if(empty($data['patr_proches_username'])) {
            $this->errors['username'] = 'username can not be empty'; 
        }

        if (isset($data['patr_proches_birthday'])) {
            $data['patr_proches_birthday'] = to_sql_date($data['patr_proches_birthday']);
        }

        //email
        if (isset($data['patr_proches_email']) && !empty($data['patr_proches_email'])) {
            $email = filter_var($data['patr_proches_email'], FILTER_VALIDATE_EMAIL);
            if ($email === false) {
                $this->errors['email'] = 'email error';
            } else {
                $data['patr_proches_email'] = $data['patr_proches_email'];
            }
        }

        //radio
        if($data['patr_proches_lien_parente'] != 1 || $data['patr_proches_lien_parente'] != 0) {
            $this->errors['lien_parente'] = 'teher is problem with prente';
        }

        if(isset($data['patr_proches_contact']) && $data['patr_proches_contact'] == 'yes') {
            $data['patr_proches_contact'] = 1;
        } else {
            $data['patr_proches_contact'] = 0;
        }

        if(count($this->errors) > 0) {
            return $this->errors;
        }
        
        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        
        $this->db->insert(db_prefix() . 'patrimoines_proches', $data);
        $patrimoines_info_id = $this->db->insert_id();

        if ($patrimoines_info_id) {
            log_activity('new patrimoine proche has been added [ID: ' . $patrimoines_info_id . ']');
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
        $proche = $this->db->get(db_prefix() . 'patrimoines_proches')->row();

        return hooks()->apply_filters('get_proche', $proche);
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_proches')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);
            if(isset($data['patr_proches_contact']) && $data['patr_proches_contact'] == 'yes') {
                $data['patr_proches_contact'] = 1;
            } else {
                $data['patr_proches_contact'] = 0;
            }
            $data['updated_date'] = date('Y-m-d H:i:s');
            $data['patr_proches_username']   = trim($data['patr_proches_username']);
            $data['patr_proches_charge']   = trim($data['patr_proches_charge']);
            $data['patr_proches_particularites']   = trim($data['patr_proches_particularites']);

            if (isset($data['patr_proches_birthday'])) {
                $data['patr_proches_birthday'] = to_sql_date($data['patr_proches_birthday']);
            }
        }
        
        $this->db->where('id', $data['id']);
        $_id = $this->db->update(db_prefix() . 'patrimoines_proches', $data); 

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
    public function delete_proche($id)
    {
        // $patrimoine_name = get_patrimoine_name_by_id($patrimoine_id);

        // $this->db->where('id', $patrimoine_id);
        // $this->db->delete(db_prefix() . 'patrimoines');

        // if($this->db->affected_rows() > 0) {

        // }

        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoines_proches');
        
        return true;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
