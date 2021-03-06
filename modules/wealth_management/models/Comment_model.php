<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Comment_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data) {  
        // patr_comment_text
        //patr_comment_type
        // $data['patr_comment_text'] = '';
        // $data['patr_comment_type'];
        $comment = $this->get_comment($data['patrimoineid'], $data['patr_comment_type']);

        if($comment) {
            return false;
        } else {
            // add created date and last updated date.
            $data['created_date'] = date('Y-m-d H:i:s');
            $data['updated_date'] = date('Y-m-d H:i:s');
            
            $this->db->insert(db_prefix() . 'patrimoines_comments', $data);
            $insert_id = $this->db->insert_id();

        if ($insert_id) {
            $this->log_activity($data['patrimoineid'], 'New_Patrimoine_Comment_Added');
            log_activity('Patrimoine Comment Added [ID:' . $insert_id . ']');
            return $insert_id;
        } 
        }

        return false;
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_comments')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);
            $data['updated_date'] = date('Y-m-d H:i:s');
        }
        
        $this->db->where('id', $data['id']);
        $_id = $this->db->update(db_prefix() . 'patrimoines_comments', $data); 

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
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoines_comments');
        
        return true;
    }


    /**
     * Get comment by id
     * @param  mixed $id task id
     * @return object
     */
    public function get($id, $where = [])
    { 
        $this->db->where('id', $id);
        $this->db->where($where);
        return $this->db->get(db_prefix() . 'patrimoines_comments')->row();
    }

    public function get_comment($id, $type) {

        $this->db->where('patrimoineid', $id);
        $this->db->where('patr_comment_type', $type);

        return $this->db->get(db_prefix() . 'patrimoines_comments')->row();
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
