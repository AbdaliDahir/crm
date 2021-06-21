<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bien_question_model extends App_Model
{
    private $values;

    public function __construct()
    {
        parent::__construct();

        $this->values = ['patr_bien_qst_capital','patr_bien_qst_participations','patr_bien_qst_immobilier','patr_bien_qst_pact'];
    }

    /**
     * Add new ticket to database
     * @param mixed $data  ticket $_POST data
     * @param mixed $admin If admin adding the ticket passed staff id
     */
    public function add($data)
    {  
      foreach ($this->values as $value) {
          $data[$value]   = trim($data[$value]);
      }
      // add created date and last updated date.
      $data['created_date'] = date('Y-m-d H:i:s');
      $data['updated_date'] = date('Y-m-d H:i:s');
      
      $this->db->insert(db_prefix() . 'patrimoines_bien_questions', $data);
      $insert_id = $this->db->insert_id();

      if ($insert_id) {
        $this->log_activity($data['patrimoineid'], 'New_Patrimoine_Bien_Qst_Changed');
        log_activity('Patrimoine Bien Question [ID:' . $insert_id . ']');
        return $insert_id;
      }  

      return false;
    }

    /**
     * Get bienQst by id
     * @param  mixed $id bienQst id
     * @return object
     */
    public function get($id, $where = [])
    { 
      $this->db->where('id', $id);
      $this->db->where($where);
      return $this->db->get(db_prefix() . 'patrimoines_bien_questions')->row();
    }

    /**
     * Get bienQst by id
     * @param  mixed $id bienQst id
     * @return object
     */
    public function get_by_patrimoine($id)
    { 
      $this->db->where('patrimoineid', $id);
      return $this->db->get(db_prefix() . 'patrimoines_bien_questions')->row();
    }

    public function update($data)
    {
      $postId = $data['id'];
      $patrimoine_id = $data['patrimoineid'];

      $this->db->select('patrimoineid');
      $this->db->where('id', $postId);
      $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_bien_questions')->row()->patrimoineid;

      if( $exist_post_patrimoine_id == $patrimoine_id) {
          // remova some element from array before save
          unset($data['patrimoineid']);

          foreach ($this->values as $value) {
              $data[$value]   = trim($data[$value]);
          }
          $data['updated_date'] = date('Y-m-d H:i:s');
      }
      
      $this->db->where('id', $data['id']);
      $_id = $this->db->update(db_prefix() . 'patrimoines_bien_questions', $data); 

      if ($_id) {
        return $_id;
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
