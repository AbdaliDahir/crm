<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wealth_management extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        if (!is_admin()) {
            access_denied('Wealth Management');
        }

        $this->load->model('patrimoines_model');
        $this->load->model('patrimoines_info_model');
        $this->load->model('proches_model');
        $this->load->model('currencies_model');
        $this->load->helper('date');
    }


    public function index()
    {
        close_setup_menu();
        $data['statuses'] = $this->patrimoines_model->get_patrimoine_statuses();
        $data['title'] = 'test';
        $this->load->view('manage', $data);
    }

    public function table($clientid = '')
    {
        $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables/patrimoines'), [
            'clientid' => $clientid,
        ]);
    }

    public function proches()
    { 
        $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables/proches'));
    }

    public function clientApp($id = '')
    {
        if (!staff_can('edit', 'wealth_management') && !staff_can('create', 'wealth_management')) {
            access_denied('wealth_management');
        }

        if ($this->input->post()) {
            $data                = $this->input->post();
            $data['description'] = html_purify($this->input->post('description', false));
            if ($id == '') {
                if (!staff_can('create', 'wealth_management')) {
                    access_denied('wealth_management');
                }
                $id = $this->patrimoines_model->add($data);
                if ($id) {
                    set_alert('success', _l('added_successfully', _l('patrimoine')));
                    redirect(admin_url('wealth_management/view/' . $id));
                }
            } else {
                if (!staff_can('edit', 'wealth_management')) {
                    access_denied('wealth_management');
                }
                $success = $this->patrimoines_model->update($data, $id);
                if ($success) {
                    set_alert('success', _l('updated_successfully', _l('patrimoine')));
                }
                redirect(admin_url('wealth_management/view/' . $id));
            }
        }
        if ($id == '') {
            $title                            = _l('add_new', _l('patrimoine_lowercase'));
            $data['auto_select_billing_type'] = $this->patrimoines_model->get_most_used_billing_type();

            if ($this->input->get('via_estimate_id')) {
                $this->load->model('estimates_model');
                $data['estimate'] = $this->estimates_model->get($this->input->get('via_estimate_id'));
            }
        } else {
            $data['patrimoine']                               = $this->patrimoines_model->get($id);
            $data['patrimoine']->settings->available_features = unserialize($data['patrimoine']->settings->available_features);

            $data['patrimoine_members'] = $this->patrimoines_model->get_patrimoine_members($id);
            $title                   = _l('edit', _l('patrimoine_lowercase'));
        }

        if ($this->input->get('customer_id')) {
            $data['customer_id'] = $this->input->get('customer_id');
        }

        $data['last_patrimoine_settings'] = $this->patrimoines_model->get_last_patrimoine_settings();

        if (count($data['last_patrimoine_settings'])) {
            $key                                          = array_search('available_features', array_column($data['last_patrimoine_settings'], 'name'));
            $data['last_patrimoine_settings'][$key]['value'] = unserialize($data['last_patrimoine_settings'][$key]['value']);
        }

        $data['settings'] = $this->patrimoines_model->get_settings();
        $data['statuses'] = $this->patrimoines_model->get_patrimoine_statuses();
        $data['staff']    = $this->staff_model->get('', ['active' => 1]);

        $data['title'] = $title;
        $this->load->view('wealth_management/patrimoine', $data);
    }


    public function view($id)
    {

        if (staff_can('view', 'patrimoines') || $this->patrimoines_model->is_member($id)) {
            close_setup_menu();
            $patrimoine = $this->patrimoines_model->get($id);

            if (!$patrimoine) {
                blank_page(_l('patrimoine_not_found'));
            }

            $patrimoine->settings->available_features = unserialize($patrimoine->settings->available_features);
            $data['statuses']                      = $this->patrimoines_model->get_patrimoine_statuses();

            $group = !$this->input->get('group') ? 'patrimoine_overview' : $this->input->get('group');

            // Unable to load the requested file: wealth_management/patrimoine_tasks#.php - FIX
            if (strpos($group, '#') !== false) {
                $group = str_replace('#', '', $group);
            }

            $data['tabs'] = get_patrimoine_tabs_admin();
            $data['tab']  = $this->app_tabs->filter_tab($data['tabs'], $group);



            if (!$data['tab']) {
                show_404();
            }

            $this->load->model('payment_modes_model');
            $data['payment_modes'] = $this->payment_modes_model->get('', [], true);

            $data['patrimoine']  = $patrimoine;
            $data['currency'] = $this->patrimoines_model->get_currency($id);

            $data['patrimoine_total_logged_time'] = $this->patrimoines_model->total_logged_time($id);

            $data['staff']     = $this->staff_model->get('', ['active' => 1]);
            $percent           = $this->patrimoines_model->calc_progress($id);
            $data['bodyclass'] = '';



            $this->app_scripts->add(
                'patrimoines-js',
                base_url($this->app_scripts->core_file('assets/js', 'patrimoines.js')) . '?v=' . $this->app_scripts->core_version(),
                'admin',
                ['app-js', 'jquery-comments-js', 'frappe-gantt-js', 'circle-progress-js']
            );

            if ($group == 'patrimoine_overview') {
                $data['members'] = $this->patrimoines_model->get_patrimoine_members($id);
                foreach ($data['members'] as $key => $member) {
                    $data['members'][$key]['total_logged_time'] = 0;
                    $member_timesheets                          = $this->tasks_model->get_unique_member_logged_task_ids($member['staff_id'], ' AND task_id IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id="' . $this->db->escape_str($id) . '")');

                    foreach ($member_timesheets as $member_task) {
                        $data['members'][$key]['total_logged_time'] += $this->tasks_model->calc_task_total_time($member_task->task_id, ' AND staff_id=' . $member['staff_id']);
                    }
                }

                $data['patrimoine_total_days']        = round((human_to_unix($data['patrimoine']->deadline . ' 00:00') - human_to_unix($data['patrimoine']->start_date . ' 00:00')) / 3600 / 24);
                $data['patrimoine_days_left']         = $data['patrimoine_total_days'];
                $data['patrimoine_time_left_percent'] = 100;
                if ($data['patrimoine']->deadline) {
                    if (human_to_unix($data['patrimoine']->start_date . ' 00:00') < time() && human_to_unix($data['patrimoine']->deadline . ' 00:00') > time()) {
                        $data['patrimoine_days_left']         = round((human_to_unix($data['patrimoine']->deadline . ' 00:00') - time()) / 3600 / 24);
                        $data['patrimoine_time_left_percent'] = $data['patrimoine_days_left'] / $data['patrimoine_total_days'] * 100;
                        $data['patrimoine_time_left_percent'] = round($data['patrimoine_time_left_percent'], 2);
                    }
                    if (human_to_unix($data['patrimoine']->deadline . ' 00:00') < time()) {
                        $data['patrimoine_days_left']         = 0;
                        $data['patrimoine_time_left_percent'] = 0;
                    }
                }

                $__total_where_tasks = 'rel_type = "patrimoine" AND rel_id=' . $this->db->escape_str($id);
                if (!staff_can('view', 'tasks')) {
                    $__total_where_tasks .= ' AND ' . db_prefix() . 'tasks.id IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned WHERE staffid = ' . get_staff_user_id() . ')';

                    if (get_option('show_all_tasks_for_patrimoine_member') == 1) {
                        $__total_where_tasks .= ' AND (rel_type="patrimoine" AND rel_id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . '))';
                    }
                }

                $__total_where_tasks = hooks()->apply_filters('admin_total_patrimoine_tasks_where', $__total_where_tasks, $id);

                $where = ($__total_where_tasks == '' ? '' : $__total_where_tasks . ' AND ') . 'status != ' . Tasks_model::STATUS_COMPLETE;

                $data['tasks_not_completed'] = total_rows(db_prefix() . 'tasks', $where);
                $total_tasks                 = total_rows(db_prefix() . 'tasks', $__total_where_tasks);
                $data['total_tasks']         = $total_tasks;

                $where = ($__total_where_tasks == '' ? '' : $__total_where_tasks . ' AND ') . 'status = ' . Tasks_model::STATUS_COMPLETE . ' AND rel_type="patrimoine" AND rel_id="' . $id . '"';

                $data['tasks_completed'] = total_rows(db_prefix() . 'tasks', $where);

                $data['tasks_not_completed_progress'] = ($total_tasks > 0 ? number_format(($data['tasks_completed'] * 100) / $total_tasks, 2) : 0);
                $data['tasks_not_completed_progress'] = round($data['tasks_not_completed_progress'], 2);

                @$percent_circle        = $percent / 100;
                $data['percent_circle'] = $percent_circle;


                $data['patrimoine_overview_chart'] = $this->patrimoines_model->get_patrimoine_overview_weekly_chart_data($id, ($this->input->get('overview_chart') ? $this->input->get('overview_chart') : 'this_week'));
            } elseif ($group == 'patrimoine_invoices') {
                $this->load->model('invoices_model');

                $data['invoiceid']   = '';
                $data['status']      = '';
                $data['custom_view'] = '';

                $data['invoices_years']       = $this->invoices_model->get_invoices_years();
                $data['invoices_sale_agents'] = $this->invoices_model->get_sale_agents();
                $data['invoices_statuses']    = $this->invoices_model->get_statuses();
            } elseif ($group == 'patrimoine_gantt') {
                $gantt_type         = (!$this->input->get('gantt_type') ? 'milestones' : $this->input->get('gantt_type'));
                $taskStatus         = (!$this->input->get('gantt_task_status') ? null : $this->input->get('gantt_task_status'));
                $data['gantt_data'] = $this->patrimoines_model->get_gantt_data($id, $gantt_type, $taskStatus);
            } elseif ($group == 'patrimoine_milestones') {
                $data['bodyclass'] .= 'patrimoine-milestones ';
                $data['milestones_exclude_completed_tasks'] = $this->input->get('exclude_completed') && $this->input->get('exclude_completed') == 'yes' || !$this->input->get('exclude_completed');

                $data['total_milestones'] = total_rows(db_prefix() . 'milestones', ['patrimoine_id' => $id]);
                $data['milestones_found'] = $data['total_milestones'] > 0 || (!$data['total_milestones'] && total_rows(db_prefix() . 'tasks', ['rel_id' => $id, 'rel_type' => 'patrimoine', 'milestone' => 0]) > 0);
            } elseif ($group == 'patrimoine_files') {
                $data['files'] = $this->patrimoines_model->get_files($id);
            } elseif ($group == 'patrimoine_expenses') {
                $this->load->model('taxes_model');
                $this->load->model('expenses_model');
                $data['taxes']              = $this->taxes_model->get();
                $data['expense_categories'] = $this->expenses_model->get_category();
                $data['currencies']         = $this->currencies_model->get();
            } elseif ($group == 'patrimoine_activity') {
                $data['activity'] = $this->patrimoines_model->get_activity($id);
            } elseif ($group == 'patrimoine_notes') {
                $data['staff_notes'] = $this->patrimoines_model->get_staff_notes($id);
            } elseif ($group == 'patrimoine_contracts') {
                $this->load->model('contracts_model');
                $data['contract_types'] = $this->contracts_model->get_contract_types();
                $data['years']          = $this->contracts_model->get_contracts_years();
            } elseif ($group == 'patrimoine_estimates') {
                $this->load->model('estimates_model');
                $data['estimates_years']       = $this->estimates_model->get_estimates_years();
                $data['estimates_sale_agents'] = $this->estimates_model->get_sale_agents();
                $data['estimate_statuses']     = $this->estimates_model->get_statuses();
                $data['estimateid']            = '';
                $data['switch_pipeline']       = '';
            } elseif ($group == 'patrimoine_tickets') {
                $data['chosen_ticket_status'] = '';
                $this->load->model('tickets_model');
                $data['ticket_assignees'] = $this->tickets_model->get_tickets_assignes_disctinct();

                $this->load->model('departments_model');
                $data['staff_deparments_ids']          = $this->departments_model->get_staff_departments(get_staff_user_id(), true);
                $data['default_tickets_list_statuses'] = hooks()->apply_filters('default_tickets_list_statuses', [1, 2, 4]);
            } elseif ($group == 'patrimoine_timesheets') {
                // Tasks are used in the timesheet dropdown
                // Completed tasks are excluded from this list because you can't add timesheet on completed task.
                $data['tasks']                = $this->patrimoines_model->get_tasks($id, 'status != ' . Tasks_model::STATUS_COMPLETE . ' AND billed=0');
                $data['timesheets_staff_ids'] = $this->patrimoines_model->get_distinct_tasks_timesheets_staff($id);
            } elseif ($group == 'patrimoine_about_info') {
                $data['info'] = $this->patrimoines_info_model->get_info($id);
            } elseif ($group == 'patrimoine_proches') {
                $data['proches'] = null;
                /* List all staff roles */ 
                if ($this->input->is_ajax_request()) {
                    $this->app->get_table_data('roles');
                }
                $data['title'] = _l('all_roles');
                $data['proches'] = $data; 
            }

            // Discussions
            if ($this->input->get('discussion_id')) {
                $data['discussion_user_profile_image_url'] = staff_profile_image_url(get_staff_user_id());
                $data['discussion']                        = $this->patrimoines_model->get_discussion($this->input->get('discussion_id'), $id);
                $data['current_user_is_admin']             = is_admin();
            }

            $data['percent'] = $percent;

            $this->app_scripts->add('circle-progress-js', 'assets/plugins/jquery-circle-progress/circle-progress.min.js');

            $other_patrimoines       = [];
            $other_patrimoines_where = 'id != ' . $id;

            $statuses = $this->patrimoines_model->get_patrimoine_statuses();

            $other_patrimoines_where .= ' AND (';
            foreach ($statuses as $status) {
                if (isset($status['filter_default']) && $status['filter_default']) {
                    $other_patrimoines_where .= 'status = ' . $status['id'] . ' OR ';
                }
            }

            $other_patrimoines_where = rtrim($other_patrimoines_where, ' OR ');

            $other_patrimoines_where .= ')';

            if (!staff_can('view', 'patrimoines')) {
                $other_patrimoines_where .= ' AND ' . db_prefix() . 'patrimoines.id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . ')';
            }

            $data['other_patrimoines'] = $this->patrimoines_model->get('', $other_patrimoines_where);
            $data['title']          = $data['patrimoine']->name;
            $data['bodyclass'] .= 'patrimoine invoices-total-manual estimates-total-manual';
            $data['patrimoine_status'] = get_patrimoine_status_by_id($patrimoine->status);

            $this->load->view('wealth_management/view', $data);
        } else {
            access_denied('Patrimoine View');
        }
    }

    public function milestone($id = '')
    {
        if ($this->input->post()) {
            $message = '';
            $success = false;
            if (!$this->input->post('id')) {
                if (!staff_can('create_milestones', 'patrimoines')) {
                    access_denied();
                }

                $id = $this->patrimoines_model->add_milestone($this->input->post());
                if ($id) {
                    set_alert('success', _l('added_successfully', _l('patrimoine_milestone')));
                }
            } else {
                if (!staff_can('edit_milestones', 'patrimoines')) {
                    access_denied();
                }

                $data = $this->input->post();
                $id   = $data['id'];
                unset($data['id']);
                $success = $this->patrimoines_model->update_milestone($data, $id);
                if ($success) {
                    set_alert('success', _l('updated_successfully', _l('patrimoine_milestone')));
                }
            }
        }

        redirect(admin_url('wealth_management/view/' . $this->input->post('patrimoine_id') . '?group=patrimoine_milestones'));
    }

    /**
     * Get patrimoine deadline
     * @param  mixed $patrimoine_id
     * @return mixed
     */
    function get_patrimoine_deadline($patrimoine_id)
    {
        $CI = &get_instance();
        $CI->db->select('deadline');
        $CI->db->where('id', $patrimoine_id);
        $patrimoine = $CI->db->get(db_prefix() . 'patrimoines')->row();
        if ($patrimoine) {
            return $patrimoine->deadline;
        }

        return false;
    }

    public function get_rel_patrimoine_data($id, $task_id = '')
    {
        if ($this->input->is_ajax_request()) {
            $selected_milestone = '';
            if ($task_id != '' && $task_id != 'undefined') {
                $task               = $this->tasks_model->get($task_id);
                $selected_milestone = $task->milestone;
            }

            $allow_to_view_tasks = 0;
            $this->db->where('patrimoine_id', $id);
            $this->db->where('name', 'view_tasks');
            $patrimoine_settings = $this->db->get(db_prefix() . 'patrimoine_settings')->row();
            if ($patrimoine_settings) {
                $allow_to_view_tasks = $patrimoine_settings->value;
            }

            $deadline = get_patrimoine_deadline($id);

            echo json_encode([
                'deadline'            => $deadline,
                'deadline_formatted'  => $deadline ? _d($deadline) : null,
                'allow_to_view_tasks' => $allow_to_view_tasks,
                'billing_type'        => get_patrimoine_billing_type($id),
                'milestones'          => render_select('milestone', $this->patrimoines_model->get_milestones($id), [
                    'id',
                    'name',
                ], 'task_milestone', $selected_milestone),
            ]);
        }
    }

    public function staff_patrimoines()
    {
        $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'staff_patrimoines'));
    }

    public function expenses($id)
    {
        $this->load->model('expenses_model');
        $this->load->model('payment_modes_model');
        $data['payment_modes'] = $this->payment_modes_model->get('', [], true);
        $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables\patrimoine_expenses'), [
            'patrimoine_id' => $id,
            'data'       => $data,
        ]);
    }

    public function add_expense()
    {
        if ($this->input->post()) {
            $this->load->model('expenses_model');
            $id = $this->expenses_model->add($this->input->post());
            if ($id) {
                set_alert('success', _l('added_successfully', _l('expense')));
                echo json_encode([
                    'url'       => admin_url('wealth_management/view/' . $this->input->post('patrimoine_id') . '/?group=patrimoine_expenses'),
                    'expenseid' => $id,
                ]);
                die;
            }
            echo json_encode([
                'url' => admin_url('wealth_management/view/' . $this->input->post('patrimoine_id') . '/?group=patrimoine_expenses'),
            ]);
            die;
        }
    }

    public function patrimoine($id = '')
    {
        if (!staff_can('edit', 'patrimoines') && !staff_can('create', 'patrimoines')) {
            access_denied('Patrimoines');
        }

        if ($this->input->post()) {
            $data                = $this->input->post();
            $data['description'] = html_purify($this->input->post('description', false));
            if ($id == '') {
                if (!staff_can('create', 'patrimoines')) {
                    access_denied('Patrimoines');
                }
                $id = $this->patrimoines_model->add($data);
                if ($id) {
                    set_alert('success', _l('added_successfully', _l('patrimoine')));
                    redirect(admin_url('wealth_management/view/' . $id));
                }
            } else {
                if (!staff_can('edit', 'patrimoines')) {
                    access_denied('Patrimoines');
                }
                $success = $this->patrimoines_model->update($data, $id);
                if ($success) {
                    set_alert('success', _l('updated_successfully', _l('patrimoine')));
                }
                redirect(admin_url('wealth_management/view/' . $id));
            }
        }
        if ($id == '') {
            $title                            = _l('add_new', _l('patrimoine_lowercase'));
            $data['auto_select_billing_type'] = $this->patrimoines_model->get_most_used_billing_type();

            if ($this->input->get('via_estimate_id')) {
                $this->load->model('estimates_model');
                $data['estimate'] = $this->estimates_model->get($this->input->get('via_estimate_id'));
            }
        } else {
            $data['patrimoine']                               = $this->patrimoines_model->get($id);
            $data['patrimoine']->settings->available_features = unserialize($data['patrimoine']->settings->available_features);

            $data['patrimoine_members'] = $this->patrimoines_model->get_patrimoine_members($id);
            $title                   = _l('edit', _l('patrimoine_lowercase'));
        }

        if ($this->input->get('customer_id')) {
            $data['customer_id'] = $this->input->get('customer_id');
        }

        $data['last_patrimoine_settings'] = $this->patrimoines_model->get_last_patrimoine_settings();

        if (count($data['last_patrimoine_settings'])) {
            $key                                          = array_search('available_features', array_column($data['last_patrimoine_settings'], 'name'));
            $data['last_patrimoine_settings'][$key]['value'] = unserialize($data['last_patrimoine_settings'][$key]['value']);
        }

        $data['settings'] = $this->patrimoines_model->get_settings();
        $data['statuses'] = $this->patrimoines_model->get_patrimoine_statuses();
        $data['staff']    = $this->staff_model->get('', ['active' => 1]);

        $data['title'] = $title;
        $this->load->view('wealth_management/patrimoine', $data);
    }

    public function gantt()
    {
        $data['title'] = _l('patrimoine_gant');

        $selected_statuses = [];
        $selectedMember    = null;
        $data['statuses']  = $this->patrimoines_model->get_patrimoine_statuses();

        $appliedStatuses = $this->input->get('status');
        $appliedMember   = $this->input->get('member');

        $allStatusesIds = [];
        foreach ($data['statuses'] as $status) {
            if (
                !isset($status['filter_default'])
                || (isset($status['filter_default']) && $status['filter_default'])
                && !$appliedStatuses
            ) {
                $selected_statuses[] = $status['id'];
            } elseif ($appliedStatuses) {
                if (in_array($status['id'], $appliedStatuses)) {
                    $selected_statuses[] = $status['id'];
                }
            } else {
                // All statuses
                $allStatusesIds[] = $status['id'];
            }
        }

        if (count($selected_statuses) == 0) {
            $selected_statuses = $allStatusesIds;
        }


        $data['selected_statuses'] = $selected_statuses;

        if (staff_can('view', 'patrimoines')) {
            $selectedMember          = $appliedMember;
            $data['selectedMember']  = $selectedMember;
            $data['patrimoine_members'] = $this->patrimoines_model->get_distinct_patrimoines_members();
        }

        $data['gantt_data'] = $this->patrimoines_model->get_all_patrimoines_gantt_data([
            'status' => $selected_statuses,
            'member' => $selectedMember,
        ]);

        $this->load->view('wealth_management/gantt', $data);
    }

    public function mark_as()
    {
        $success = false;
        $message = '';
        if ($this->input->is_ajax_request()) {
            if (staff_can('create', 'patrimoines') || staff_can('edit', 'patrimoines')) {
                $status = get_patrimoine_status_by_id($this->input->post('status_id'));

                $message = _l('patrimoine_marked_as_failed', $status['name']);
                $success = $this->patrimoines_model->mark_as($this->input->post());

                if ($success) {
                    $message = _l('patrimoine_marked_as_success', $status['name']);
                }
            }
        }
        echo json_encode([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function file($id, $patrimoine_id)
    {
        $data['discussion_user_profile_image_url'] = staff_profile_image_url(get_staff_user_id());
        $data['current_user_is_admin']             = is_admin();

        $data['file'] = $this->patrimoines_model->get_file($id, $patrimoine_id);

        if (!$data['file']) {
            header('HTTP/1.0 404 Not Found');
            die;
        }

        $this->load->view('wealth_management/_file', $data);
    }

    public function update_file_data()
    {
        if ($this->input->post()) {
            $this->patrimoines_model->update_file_data($this->input->post());
        }
    }

    public function add_external_file()
    {
        if ($this->input->post()) {
            $data                        = [];
            $data['patrimoine_id']          = $this->input->post('patrimoine_id');
            $data['files']               = $this->input->post('files');
            $data['external']            = $this->input->post('external');
            $data['visible_to_customer'] = ($this->input->post('visible_to_customer') == 'true' ? 1 : 0);
            $data['staffid']             = get_staff_user_id();
            $this->patrimoines_model->add_external_file($data);
        }
    }

    public function download_all_files($id)
    {
        if ($this->patrimoines_model->is_member($id) || staff_can('view', 'patrimoines')) {
            $files = $this->patrimoines_model->get_files($id);
            if (count($files) == 0) {
                set_alert('warning', _l('no_files_found'));
                redirect(admin_url('wealth_management/view/' . $id . '?group=patrimoine_files'));
            }
            $path = get_upload_path_by_type('patrimoine') . $id;
            $this->load->library('zip');
            foreach ($files as $file) {
                $this->zip->read_file($path . '/' . $file['file_name']);
            }
            $this->zip->download(slug_it(get_patrimoine_name_by_id($id)) . '-files.zip');
            $this->zip->clear_data();
        }
    }

    public function export_patrimoine_data($id)
    {
        if (staff_can('create', 'patrimoines')) {
            app_pdf('patrimoine-data', LIBSPATH . 'pdf/Project_data_pdf', $id);
        }
    }

    public function update_task_milestone()
    {
        if ($this->input->post()) {
            $this->patrimoines_model->update_task_milestone($this->input->post());
        }
    }

    public function update_milestones_order()
    {
        if ($post_data = $this->input->post()) {
            $this->patrimoines_model->update_milestones_order($post_data);
        }
    }

    public function pin_action($patrimoine_id)
    {
        $this->patrimoines_model->pin_action($patrimoine_id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function add_edit_members($patrimoine_id)
    {
        if (staff_can('edit', 'patrimoines')) {
            $this->patrimoines_model->add_edit_members($this->input->post(), $patrimoine_id);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function discussions($patrimoine_id)
    {
        if ($this->patrimoines_model->is_member($patrimoine_id) || staff_can('view', 'patrimoines')) {
            if ($this->input->is_ajax_request()) {
                $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables\patrimoine_discussions'), [
                    'patrimoine_id' => $patrimoine_id,
                ]);
            }
        }
    }

    public function discussion($id = '')
    {
        if ($this->input->post()) {
            $message = '';
            $success = false;
            if (!$this->input->post('id')) {
                $id = $this->patrimoines_model->add_discussion($this->input->post());
                if ($id) {
                    $success = true;
                    $message = _l('added_successfully', _l('patrimoine_discussion'));
                }
                echo json_encode([
                    'success' => $success,
                    'message' => $message,
                ]);
            } else {
                $data = $this->input->post();
                $id   = $data['id'];
                unset($data['id']);
                $success = $this->patrimoines_model->edit_discussion($data, $id);
                if ($success) {
                    $message = _l('updated_successfully', _l('patrimoine_discussion'));
                }
                echo json_encode([
                    'success' => $success,
                    'message' => $message,
                ]);
            }
            die;
        }
    }

    public function get_discussion_comments($id, $type)
    {
        echo json_encode($this->patrimoines_model->get_discussion_comments($id, $type));
    }

    public function add_discussion_comment($discussion_id, $type)
    {
        echo json_encode($this->patrimoines_model->add_discussion_comment(
            $this->input->post(null, false),
            $discussion_id,
            $type
        ));
    }

    public function update_discussion_comment()
    {
        echo json_encode($this->patrimoines_model->update_discussion_comment($this->input->post(null, false)));
    }

    public function delete_discussion_comment($id)
    {
        echo json_encode($this->patrimoines_model->delete_discussion_comment($id));
    }

    public function delete_discussion($id)
    {
        $success = false;
        if (staff_can('delete', 'patrimoines')) {
            $success = $this->patrimoines_model->delete_discussion($id);
        }
        $alert_type = 'warning';
        $message    = _l('patrimoine_discussion_failed_to_delete');
        if ($success) {
            $alert_type = 'success';
            $message    = _l('patrimoine_discussion_deleted');
        }
        echo json_encode([
            'alert_type' => $alert_type,
            'message'    => $message,
        ]);
    }

    public function change_milestone_color()
    {
        if ($this->input->post()) {
            $this->patrimoines_model->update_milestone_color($this->input->post());
        }
    }

    public function upload_file($patrimoine_id)
    {
        handle_patrimoine_file_uploads($patrimoine_id);
    }

    public function change_file_visibility($id, $visible)
    {
        if ($this->input->is_ajax_request()) {
            $this->patrimoines_model->change_file_visibility($id, $visible);
        }
    }

    public function change_activity_visibility($id, $visible)
    {
        if (staff_can('create', 'patrimoines')) {
            if ($this->input->is_ajax_request()) {
                $this->patrimoines_model->change_activity_visibility($id, $visible);
            }
        }
    }

    public function remove_file($patrimoine_id, $id)
    {
        $this->patrimoines_model->remove_file($id);
        redirect(admin_url('wealth_management/view/' . $patrimoine_id . '?group=patrimoine_files'));
    }

    public function milestones_kanban()
    {
        $data['milestones_exclude_completed_tasks'] = $this->input->get('exclude_completed_tasks') && $this->input->get('exclude_completed_tasks') == 'yes';

        $data['patrimoine_id'] = $this->input->get('patrimoine_id');
        $data['milestones'] = [];

        $data['milestones'][] = [
            'name'              => _l('milestones_uncategorized'),
            'id'                => 0,
            'total_logged_time' => $this->patrimoines_model->calc_milestone_logged_time($data['patrimoine_id'], 0),
            'color'             => null,
        ];

        $_milestones = $this->patrimoines_model->get_milestones($data['patrimoine_id']);

        foreach ($_milestones as $m) {
            $data['milestones'][] = $m;
        }

        echo $this->load->view('wealth_management/milestones_kan_ban', $data, true);
    }

    public function milestones_kanban_load_more()
    {
        $milestones_exclude_completed_tasks = $this->input->get('exclude_completed_tasks') && $this->input->get('exclude_completed_tasks') == 'yes';

        $status     = $this->input->get('status');
        $page       = $this->input->get('page');
        $patrimoine_id = $this->input->get('patrimoine_id');
        $where      = [];
        if ($milestones_exclude_completed_tasks) {
            $where['status !='] = Tasks_model::STATUS_COMPLETE;
        }
        $tasks = $this->patrimoines_model->do_milestones_kanban_query($status, $patrimoine_id, $page, $where);
        foreach ($tasks as $task) {
            $this->load->view('wealth_management/_milestone_kanban_card', ['task' => $task, 'milestone' => $status]);
        }
    }

    public function milestones($patrimoine_id)
    {
        if ($this->patrimoines_model->is_member($patrimoine_id) || staff_can('view', 'patrimoines')) {
            if ($this->input->is_ajax_request()) {
                $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables\milestones'), [
                    'patrimoine_id' => $patrimoine_id,
                ]);
            }
        }
    }


    public function delete_milestone($patrimoine_id, $id)
    {
        if (staff_can('delete_milestones', 'patrimoines')) {
            if ($this->patrimoines_model->delete_milestone($id)) {
                set_alert('deleted', 'patrimoine_milestone');
            }
        }
        redirect(admin_url('wealth_management/view/' . $patrimoine_id . '?group=patrimoine_milestones'));
    }

    public function bulk_action_files()
    {
        hooks()->do_action('before_do_bulk_action_for_patrimoine_files');
        $total_deleted       = 0;
        $hasPermissionDelete = staff_can('delete', 'patrimoines');
        // bulk action for patrimoines currently only have delete button
        if ($this->input->post()) {
            $fVisibility = $this->input->post('visible_to_customer') == 'true' ? 1 : 0;
            $ids         = $this->input->post('ids');
            if (is_array($ids)) {
                foreach ($ids as $id) {
                    if ($hasPermissionDelete && $this->input->post('mass_delete') && $this->patrimoines_model->remove_file($id)) {
                        $total_deleted++;
                    } else {
                        $this->patrimoines_model->change_file_visibility($id, $fVisibility);
                    }
                }
            }
        }
        if ($this->input->post('mass_delete')) {
            set_alert('success', _l('total_files_deleted', $total_deleted));
        }
    }

    public function timesheets($patrimoine_id)
    {
        if ($this->patrimoines_model->is_member($patrimoine_id) || staff_can('view', 'patrimoines')) {
            if ($this->input->is_ajax_request()) {
                $this->app->get_table_data(module_views_path(MODULE_WEALTH_MANAGEMENT, 'tables\timesheets'), [
                    'patrimoine_id' => $patrimoine_id,
                ]);
            }
        }
    }

    public function timesheet()
    {
        if ($this->input->post()) {
            $message = '';
            $success = false;
            $success = $this->tasks_model->timesheet($this->input->post());
            if ($success === true) {
                $message = _l('added_successfully', _l('patrimoine_timesheet'));
            } elseif (is_array($success) && isset($success['end_time_smaller'])) {
                $message = _l('failed_to_add_patrimoine_timesheet_end_time_smaller');
            } else {
                $message = _l('patrimoine_timesheet_not_updated');
            }
            echo json_encode([
                'success' => $success,
                'message' => $message,
            ]);
            die;
        }
    }

    public function timesheet_task_assignees($task_id, $patrimoine_id, $staff_id = 'undefined')
    {
        $assignees             = $this->tasks_model->get_task_assignees($task_id);
        $data                  = '';
        $has_permission_edit   = staff_can('edit', 'patrimoines');
        $has_permission_create = staff_can('edit', 'patrimoines');
        // The second condition if staff member edit their own timesheet
        if ($staff_id == 'undefined' || $staff_id != 'undefined' && (!$has_permission_edit || !$has_permission_create)) {
            $staff_id     = get_staff_user_id();
            $current_user = true;
        }
        foreach ($assignees as $staff) {
            $selected = '';
            // maybe is admin and not patrimoine member
            if ($staff['assigneeid'] == $staff_id && $this->patrimoines_model->is_member($patrimoine_id, $staff_id)) {
                $selected = ' selected';
            }
            if ((!$has_permission_edit || !$has_permission_create) && isset($current_user)) {
                if ($staff['assigneeid'] != $staff_id) {
                    continue;
                }
            }
            $data .= '<option value="' . $staff['assigneeid'] . '"' . $selected . '>' . get_staff_full_name($staff['assigneeid']) . '</option>';
        }
        echo $data;
    }

    public function remove_team_member($patrimoine_id, $staff_id)
    {
        if (staff_can('edit', 'patrimoines')) {
            if ($this->patrimoines_model->remove_team_member($patrimoine_id, $staff_id)) {
                set_alert('success', _l('patrimoine_member_removed'));
            }
        }

        redirect(admin_url('wealth_management/view/' . $patrimoine_id));
    }

    public function save_note($patrimoine_id)
    {
        if ($this->input->post()) {
            $success = $this->patrimoines_model->save_note($this->input->post(null, false), $patrimoine_id);
            if ($success) {
                set_alert('success', _l('updated_successfully', _l('patrimoine_note')));
            }
            redirect(admin_url('wealth_management/view/' . $patrimoine_id . '?group=patrimoine_notes'));
        }
    }

    public function delete($patrimoine_id)
    {
        if (staff_can('delete', 'patrimoines')) {
            $patrimoine = $this->patrimoines_model->get($patrimoine_id);
            $success = $this->patrimoines_model->delete($patrimoine_id);
            if ($success) {
                set_alert('success', _l('deleted', _l('patrimoine')));
                if (strpos($_SERVER['HTTP_REFERER'], 'clients/') !== false) {
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    redirect(admin_url('patrimoines'));
                }
            } else {
                set_alert('warning', _l('problem_deleting', _l('patrimoine_lowercase')));
                redirect(admin_url('wealth_management/view/' . $patrimoine_id));
            }
        }
    }

    public function copy($patrimoine_id)
    {
        if (staff_can('create', 'patrimoines')) {
            $id = $this->patrimoines_model->copy($patrimoine_id, $this->input->post());
            if ($id) {
                set_alert('success', _l('patrimoine_copied_successfully'));
                redirect(admin_url('wealth_management/view/' . $id));
            } else {
                set_alert('danger', _l('failed_to_copy_patrimoine'));
                redirect(admin_url('wealth_management/view/' . $patrimoine_id));
            }
        }
    }

    public function mass_stop_timers($patrimoine_id, $billable = 'false')
    {
        if (staff_can('create', 'invoices')) {
            $where = [
                'billed'       => 0,
                'startdate <=' => date('Y-m-d'),
            ];
            if ($billable == 'true') {
                $where['billable'] = true;
            }
            $tasks                = $this->patrimoines_model->get_tasks($patrimoine_id, $where);
            $total_timers_stopped = 0;
            foreach ($tasks as $task) {
                $this->db->where('task_id', $task['id']);
                $this->db->where('end_time IS NULL');
                $this->db->update(db_prefix() . 'taskstimers', [
                    'end_time' => time(),
                ]);
                $total_timers_stopped += $this->db->affected_rows();
            }
            $message = _l('patrimoine_tasks_total_timers_stopped', $total_timers_stopped);
            $type    = 'success';
            if ($total_timers_stopped == 0) {
                $type = 'warning';
            }
            echo json_encode([
                'type'    => $type,
                'message' => $message,
            ]);
        }
    }

    public function get_pre_invoice_patrimoine_info($patrimoine_id)
    {
        if (staff_can('create', 'invoices')) {
            $data['billable_tasks'] = $this->patrimoines_model->get_tasks($patrimoine_id, [
                'billable'     => 1,
                'billed'       => 0,
                'startdate <=' => date('Y-m-d'),
            ]);

            $data['not_billable_tasks'] = $this->patrimoines_model->get_tasks($patrimoine_id, [
                'billable'    => 1,
                'billed'      => 0,
                'startdate >' => date('Y-m-d'),
            ]);

            $data['patrimoine_id']   = $patrimoine_id;
            $data['billing_type'] = get_patrimoine_billing_type($patrimoine_id);

            $this->load->model('expenses_model');
            $this->db->where('invoiceid IS NULL');
            $data['expenses'] = $this->expenses_model->get('', [
                'patrimoine_id' => $patrimoine_id,
                'billable'   => 1,
            ]);

            $this->load->view('wealth_management/patrimoine_pre_invoice_settings', $data);
        }
    }

    public function get_invoice_patrimoine_data()
    {
        if (staff_can('create', 'invoices')) {
            $type       = $this->input->post('type');
            $patrimoine_id = $this->input->post('patrimoine_id');
            // Check for all cases
            if ($type == '') {
                $type == 'single_line';
            }
            $this->load->model('payment_modes_model');
            $data['payment_modes'] = $this->payment_modes_model->get('', [
                'expenses_only !=' => 1,
            ]);
            $this->load->model('taxes_model');
            $data['taxes']         = $this->taxes_model->get();
            $data['currencies']    = $this->currencies_model->get();
            $data['base_currency'] = $this->currencies_model->get_base_currency();
            $this->load->model('invoice_items_model');

            $data['ajaxItems'] = false;
            if (total_rows(db_prefix() . 'items') <= ajax_on_total_items()) {
                $data['items'] = $this->invoice_items_model->get_grouped();
            } else {
                $data['items']     = [];
                $data['ajaxItems'] = true;
            }

            $data['items_groups'] = $this->invoice_items_model->get_groups();
            $data['staff']        = $this->staff_model->get('', ['active' => 1]);
            $patrimoine              = $this->patrimoines_model->get($patrimoine_id);
            $data['patrimoine']      = $patrimoine;
            $items                = [];

            $patrimoine    = $this->patrimoines_model->get($patrimoine_id);
            $item['id'] = 0;

            $default_tax     = unserialize(get_option('default_tax'));
            $item['taxname'] = $default_tax;

            $tasks = $this->input->post('tasks');
            if ($tasks) {
                $item['long_description'] = '';
                $item['qty']              = 0;
                $item['task_id']          = [];
                if ($type == 'single_line') {
                    $item['description'] = $patrimoine->name;
                    foreach ($tasks as $task_id) {
                        $task = $this->tasks_model->get($task_id);
                        $sec  = $this->tasks_model->calc_task_total_time($task_id);
                        $item['long_description'] .= $task->name . ' - ' . seconds_to_time_format(task_timer_round($sec)) . ' ' . _l('hours') . "\r\n";
                        $item['task_id'][] = $task_id;
                        if ($patrimoine->billing_type == 2) {
                            if ($sec < 60) {
                                $sec = 0;
                            }
                            $item['qty'] += sec2qty(task_timer_round($sec));
                        }
                    }
                    if ($patrimoine->billing_type == 1) {
                        $item['qty']  = 1;
                        $item['rate'] = $patrimoine->patrimoine_cost;
                    } elseif ($patrimoine->billing_type == 2) {
                        $item['rate'] = $patrimoine->patrimoine_rate_per_hour;
                    }
                    $item['unit'] = '';
                    $items[]      = $item;
                } elseif ($type == 'task_per_item') {
                    foreach ($tasks as $task_id) {
                        $task                     = $this->tasks_model->get($task_id);
                        $sec                      = $this->tasks_model->calc_task_total_time($task_id);
                        $item['description']      = $patrimoine->name . ' - ' . $task->name;
                        $item['qty']              = floatVal(sec2qty(task_timer_round($sec)));
                        $item['long_description'] = seconds_to_time_format(task_timer_round($sec)) . ' ' . _l('hours');
                        if ($patrimoine->billing_type == 2) {
                            $item['rate'] = $patrimoine->patrimoine_rate_per_hour;
                        } elseif ($patrimoine->billing_type == 3) {
                            $item['rate'] = $task->hourly_rate;
                        }
                        $item['task_id'] = $task_id;
                        $item['unit']    = '';
                        $items[]         = $item;
                    }
                } elseif ($type == 'timesheets_individualy') {
                    $timesheets     = $this->patrimoines_model->get_timesheets($patrimoine_id, $tasks);
                    $added_task_ids = [];
                    foreach ($timesheets as $timesheet) {
                        if ($timesheet['task_data']->billed == 0 && $timesheet['task_data']->billable == 1) {
                            $item['description'] = $patrimoine->name . ' - ' . $timesheet['task_data']->name;
                            if (!in_array($timesheet['task_id'], $added_task_ids)) {
                                $item['task_id'] = $timesheet['task_id'];
                            }

                            array_push($added_task_ids, $timesheet['task_id']);

                            $item['qty']              = floatVal(sec2qty(task_timer_round($timesheet['total_spent'])));
                            $item['long_description'] = _l('patrimoine_invoice_timesheet_start_time', _dt($timesheet['start_time'], true)) . "\r\n" . _l('patrimoine_invoice_timesheet_end_time', _dt($timesheet['end_time'], true)) . "\r\n" . _l('patrimoine_invoice_timesheet_total_logged_time', seconds_to_time_format(task_timer_round($timesheet['total_spent']))) . ' ' . _l('hours');

                            if ($this->input->post('timesheets_include_notes') && $timesheet['note']) {
                                $item['long_description'] .= "\r\n\r\n" . _l('note') . ': ' . $timesheet['note'];
                            }

                            if ($patrimoine->billing_type == 2) {
                                $item['rate'] = $patrimoine->patrimoine_rate_per_hour;
                            } elseif ($patrimoine->billing_type == 3) {
                                $item['rate'] = $timesheet['task_data']->hourly_rate;
                            }
                            $item['unit'] = '';
                            $items[]      = $item;
                        }
                    }
                }
            }
            if ($patrimoine->billing_type != 1) {
                $data['hours_quantity'] = true;
            }
            if ($this->input->post('expenses')) {
                if (isset($data['hours_quantity'])) {
                    unset($data['hours_quantity']);
                }
                if (count($tasks) > 0) {
                    $data['qty_hrs_quantity'] = true;
                }
                $expenses       = $this->input->post('expenses');
                $addExpenseNote = $this->input->post('expenses_add_note');
                $addExpenseName = $this->input->post('expenses_add_name');

                if (!$addExpenseNote) {
                    $addExpenseNote = [];
                }

                if (!$addExpenseName) {
                    $addExpenseName = [];
                }

                $this->load->model('expenses_model');
                foreach ($expenses as $expense_id) {
                    // reset item array
                    $item                     = [];
                    $item['id']               = 0;
                    $expense                  = $this->expenses_model->get($expense_id);
                    $item['expense_id']       = $expense->expenseid;
                    $item['description']      = _l('item_as_expense') . ' ' . $expense->name;
                    $item['long_description'] = $expense->description;

                    if (in_array($expense_id, $addExpenseNote) && !empty($expense->note)) {
                        $item['long_description'] .= PHP_EOL . $expense->note;
                    }

                    if (in_array($expense_id, $addExpenseName) && !empty($expense->expense_name)) {
                        $item['long_description'] .= PHP_EOL . $expense->expense_name;
                    }

                    $item['qty'] = 1;

                    $item['taxname'] = [];
                    if ($expense->tax != 0) {
                        array_push($item['taxname'], $expense->tax_name . '|' . $expense->taxrate);
                    }
                    if ($expense->tax2 != 0) {
                        array_push($item['taxname'], $expense->tax_name2 . '|' . $expense->taxrate2);
                    }
                    $item['rate']  = $expense->amount;
                    $item['order'] = 1;
                    $item['unit']  = '';
                    $items[]       = $item;
                }
            }
            $data['customer_id']          = $patrimoine->clientid;
            $data['invoice_from_patrimoine'] = true;
            $data['add_items']            = $items;
            $this->load->view('wealth_management/invoice_patrimoine', $data);
        }
    }

    public function invoice_patrimoine($patrimoine_id)
    {
        if (staff_can('create', 'invoices')) {
            $this->load->model('invoices_model');
            $data               = $this->input->post();
            $data['patrimoine_id'] = $patrimoine_id;
            $invoice_id         = $this->invoices_model->add($data);
            if ($invoice_id) {
                $this->patrimoines_model->log_activity($patrimoine_id, 'patrimoine_activity_invoiced_patrimoine', format_invoice_number($invoice_id));
                set_alert('success', _l('patrimoine_invoiced_successfully'));
            }
            redirect(admin_url('wealth_management/view/' . $patrimoine_id . '?group=patrimoine_invoices'));
        }
    }

    public function view_patrimoine_as_client($id, $clientid)
    {
        if (is_admin()) {
            login_as_client($clientid);
            redirect(site_url('clients/patrimoine/' . $id));
        }
    }

    public function get_staff_names_for_mentions($patrimoineId)
    {
        if ($this->input->is_ajax_request()) {
            $patrimoineId = $this->db->escape_str($patrimoineId);

            $members = $this->patrimoines_model->get_patrimoine_members($patrimoineId);
            $members = array_map(function ($member) {
                $staff = $this->staff_model->get($member['staff_id']);

                $_member['id'] = $member['staff_id'];
                $_member['name'] = $staff->firstname . ' ' . $staff->lastname;
                return $_member;
            }, $members);

            echo json_encode($members);
        }
    }


    public function add()
    {
        if ($this->input->post()) {
            $data            = $this->input->post();
            $postId = $data['id'];
            
            if($postId) {
                $id              = $this->patrimoines_info_model->update($data); 
                echo "welcome :" . $id;
                if ($id) {
                    // echo "hello world now ";
                    set_alert('success', _l('patrimoines_information_updated_success'), $id);
                    redirect(admin_url('wealth_management/view/'.$data['patrimoineid'].'?group=patrimoine_about_info'));
                }
            } else {
                $id              = $this->patrimoines_info_model->add($data); 
                if ($id) {
                    // echo "hello world now ";
                    set_alert('success', _l('patrimoines_information_updated_success'), $id);
                    redirect(admin_url('wealth_management/view/'.$data['patrimoineid'].'?group=patrimoine_about_info'));
                }
            }
        }
        
        $data = [];

        $id = $_GET['patrimoine_id'];
        $patrimoine = $this->patrimoines_model->get($id);

        
        if (!$patrimoine) {
            blank_page(_l('patrimoine_not_found'));
        } else {
            $data['info'] = $this->patrimoines_info_model->get_info($id);
        }

        $data['patrimoine_id'] = $patrimoine->id;
        
        $this->load->view('wealth_management/patrimonial/add', $data);
    }
    
    // public function addProches() {

    //     $data = []; 

    //     $id = $_GET['patrimoine_id'];
    //     $patrimoine = $this->patrimoines_model->get($id);

    //     if (!$patrimoine) {
    //         blank_page(_l('patrimoine_not_found'));
    //     } else {
    //         $data['proches'] = null;
    //     }

    //     $this->load->view('wealth_management/patrimonial/add-proches', $data);
    // }

    /* Add new task or update existing */
    public function addProches($id = '')
    {
        $data = [];

        if ($this->input->post()) {
            $data                = $this->input->post();
            $data['description'] = html_purify($this->input->post('description', false));
            if ($id == '') {
                $id      = $this->tasks_model->add($data);
                $_id     = false;
                $success = false;
                $message = '';
                if ($id) {
                    $success       = true;
                    $_id           = $id;
                    $message       = _l('added_successfully', _l('proche'));
                }
                echo json_encode([
                    'success' => $success,
                    'id'      => $_id,
                    'message' => $message,
                ]);
            } else {
                $success = $this->tasks_model->update($data, $id);
                $message = '';
                if ($success) {
                    $message = _l('updated_successfully', _l('proche'));
                }
                echo json_encode([
                    'success' => $success,
                    'message' => $message,
                    'id'      => $id,
                ]);
            }
            die;
        } 
        // add or edit.
        if ($id == '') {
            $title = _l('add_new', _l('proches_lowercase'));
            $data['proche'] = null;
        } else {
            $data['proche'] = $this->proche_model->get_info($id);
            $data['task'] = $this->tasks_model->get($id);
            $title = _l('edit', _l('proches_lowercase')) . ' ' . $data['task']->name;
        }

        $patrimoine_id = $_GET['patrimoine_id'];
        $patrimoine = $this->patrimoines_model->get($id); 
        
        if (!$patrimoine) {
            blank_page(_l('patrimoine_not_found'));
        } else {

        }
        $data['patrimoine_id'] = $patrimoine_id;
        $data['id']    = $id;
        $data['title'] = $title;
        $this->load->view('wealth_management/patrimonial/modals/proche_modal', $data);
    }
    // public function proches()
    // {
    //     $this->app->get_table_data('patrimoines_proches');
    // }

}
