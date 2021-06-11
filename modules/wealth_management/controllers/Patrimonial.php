<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Patrimonial extends AdminController
{
    public function __construct()
    {
        parent::__construct(); 
        // $this->load->model('tickets_model');
        print_r('here');
    }

    public function add($userid = false)
    {
        print_r("we are here");

        // if ($this->input->post()) {
        //     $data            = $this->input->post();
        //     $data['message'] = html_purify($this->input->post('message', false));
        //     $id              = $this->tickets_model->add($data, get_staff_user_id());
        //     if ($id) {
        //         set_alert('success', _l('new_ticket_added_successfully', $id));
        //         redirect(admin_url('tickets/ticket/' . $id));
        //     }
        // }
        // if ($userid !== false) {
        //     $data['userid'] = $userid;
        //     $data['client'] = $this->clients_model->get($userid);
        // }
        // // Load necessary models
        // $this->load->model('knowledge_base_model');
        // $this->load->model('departments_model');

        // $data['departments']        = $this->departments_model->get();
        // $data['predefined_replies'] = $this->tickets_model->get_predefined_reply();
        // $data['priorities']         = $this->tickets_model->get_priority();
        // $data['services']           = $this->tickets_model->get_service();
        // $whereStaff                 = [];
        // if (get_option('access_tickets_to_none_staff_members') == 0) {
        //     $whereStaff['is_not_staff'] = 0;
        // }
        // $data['staff']     = $this->staff_model->get('', $whereStaff);
        // $data['articles']  = $this->knowledge_base_model->get();
        // $data['bodyclass'] = 'ticket';
        // $data['title']     = _l('new_ticket');

        // if ($this->input->get('project_id') && $this->input->get('project_id') > 0) {
        //     // request from project area to create new ticket
        //     $data['project_id'] = $this->input->get('project_id');
        //     $data['userid']     = get_client_id_by_project_id($data['project_id']);
        //     if (total_rows(db_prefix().'contacts', ['active' => 1, 'userid' => $data['userid']]) == 1) {
        //         $contact = $this->clients_model->get_contacts($data['userid']);
        //         if (isset($contact[0])) {
        //             $data['contact'] = $contact[0];
        //         }
        //     }
        // } elseif ($this->input->get('contact_id') && $this->input->get('contact_id') > 0 && $this->input->get('userid')) {
        //     $contact_id = $this->input->get('contact_id');
        //     if (total_rows(db_prefix().'contacts', ['active' => 1, 'id' => $contact_id]) == 1) {
        //         $contact = $this->clients_model->get_contact($contact_id);
        //         if ($contact) {
        //             $data['contact'] = (array) $contact;
        //         }
        //     }
        // }
        // add_admin_tickets_js_assets();
        // $this->load->view('admin/tickets/add', $data);
    }
}
