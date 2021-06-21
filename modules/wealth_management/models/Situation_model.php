<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Situation_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_info($id) {
        if($id) {
            $query = $this->db->get_where('patrimoines_situation', array('patrimoineid' => $id));
			return $query->row();
        }
    }

    public function add($data)
    {
        $data['updated_date'] = date('Y-m-d H:i:s');
        $data['created_date'] = date('Y-m-d H:i:s');
            
        $insert_id = $this->db->insert(db_prefix() . 'patrimoines_situation', $data); 

        if ($insert_id) {
            $this->log_activity($data['patrimoineid'], 'New_Patrimoine_Situation_Added');
            log_activity('Patrimoine Situation Added [ID:' . $insert_id . ']');
            return $insert_id;
        } 

        return false;
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_situation')->row()->patrimoineid;

        if($exist_post_patrimoine_id) {
            print_r("inside ");
            die();
            if( $exist_post_patrimoine_id == $patrimoine_id) {
                // remova some element from array before save
                unset($data['patrimoineid']);
    
                $data['updated_date'] = date('Y-m-d H:i:s');
                
                $patrimoines_info_id = $this->db->update(db_prefix() . 'patrimoines_situation', $data); 
                if ($patrimoines_info_id) {
                    return $patrimoines_info_id;
                }
            }
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
