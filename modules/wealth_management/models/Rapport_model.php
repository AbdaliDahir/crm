<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rapport_model extends App_Model
{
    private $values;

    public function __construct()
    {
        parent::__construct();

        $this->values = ['patr_rapport_designation', 'patr_rapport_valeur', 'patr_rapport_detenteur', 'patr_rapport_revenus_fiscal', 'patr_rapport_charges', 'patr_rapport_capital','patr_rapport_duree','patr_rapport_taux','patr_rapport_deces'];
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
        
        $this->db->insert(db_prefix() . 'patrimoines_immo_rapport', $data);
        $patrimoines_info_id = $this->db->insert_id();

        if ($patrimoines_info_id) {

            // if (isset($custom_fields)) {
            //     handle_custom_fields_post($patrimoines_info_id, $custom_fields);
            // }

            // hooks()->do_action('ticket_created', $patrimoines_info_id);
            // log_activity('Patremoines info has been changed [ID: ' . $patrimoines_info_id . ']');

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
        $usage = $this->db->get(db_prefix() . 'patrimoines_immo_rapport')->row();

        return hooks()->apply_filters('get_usage', $usage);
    }

    public function update($data)
    {
        $postId = $data['id'];
        $patrimoine_id = $data['patrimoineid'];

        $this->db->select('patrimoineid');
        $this->db->where('id', $postId);
        $exist_post_patrimoine_id = $this->db->get(db_prefix() . 'patrimoines_immo_rapport')->row()->patrimoineid;

        if( $exist_post_patrimoine_id == $patrimoine_id) {
            // remova some element from array before save
            unset($data['patrimoineid']);

            foreach ($this->values as $value) {
                $data[$value]   = trim($data[$value]);
            }

            $data['updated_date'] = date('Y-m-d H:i:s');
        }
        
        $this->db->where('id', $data['id']);
        $_id = $this->db->update(db_prefix() . 'patrimoines_immo_rapport', $data); 

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
        $this->db->delete(db_prefix() . 'patrimoines_immo_rapport');
        
        return true;
    }

}
