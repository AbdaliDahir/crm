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
            
        $patrimoines_info_id = $this->db->insert(db_prefix() . 'patrimoines_situation', $data); 
        if ($patrimoines_info_id) {
            return $patrimoines_info_id;
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

}
