<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usage_model extends App_Model
{
    private $attributes;
    private $float_attributes;
    private $errors = [];

    public function __construct()
    {
        parent::__construct();

        $this->attributes = ['patr_usage_designation','patr_usage_valeur','patr_usage_detenteur','patr_usage_capital','patr_usage_duree','patr_usage_date_achat','patr_usage_charges','patr_usage_taux','patr_usage_deces'];
        $this->float_attributes = ['patr_usage_valeur','patr_usage_capital','patr_usage_taux'];
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
        if(empty($data['patr_usage_designation'])) {
            $this->errors['designation'] = 'designation can not be empty'; 
        } 
        if(empty($data['patr_usage_valeur'])) {
            $this->errors['valeur'] = 'valeur can not be empty'; 
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
        
        if (isset($data['patr_usage_date_achat'])) {
            $data['patr_usage_date_achat'] = to_sql_date($data['patr_usage_date_achat']);
        }

        // add created date and last updated date.
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['updated_date'] = date('Y-m-d H:i:s');
        
        $this->db->insert(db_prefix() . 'patrimoines_usage', $data);
        $insert_id = $this->db->insert_id();

        if ($insert_id) {
            $this->log_activity($data['patrimoineid'], 'New_Patrimoine_Usage_Added');
            log_activity('Patrimoine usage Added [ID:' . $insert_id . ']');
            return $insert_id;
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
        $usage = $this->db->get(db_prefix() . 'patrimoines_usage')->row();

        return hooks()->apply_filters('get_usage', $usage);
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_usage')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);

            foreach ($this->attributes as $value) {
                $data[$value]   = trim($data[$value]);
            }
    
            if (isset($data['patr_usage_date_achat'])) {
                $data['patr_usage_date_achat'] = to_sql_date($data['patr_usage_date_achat']);
            }

            $data['updated_date'] = date('Y-m-d H:i:s');
        }
        
        $this->db->where('id', $data['id']);
        $_id = $this->db->update(db_prefix() . 'patrimoines_usage', $data); 

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
    public function delete_usage($id)
    {
        // $patrimoine_name = get_patrimoine_name_by_id($patrimoine_id);

        // $this->db->where('id', $patrimoine_id);
        // $this->db->delete(db_prefix() . 'patrimoines');

        // if($this->db->affected_rows() > 0) {

        // }

        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoines_usage');
        
        return true;
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
