<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Patrimoines_model extends App_Model
{
    private $patrimoine_settings;

    public function __construct()
    {
        parent::__construct();

        $patrimoine_settings = [
            'available_features',
            'view_tasks',
            'create_tasks',
            'edit_tasks',
            'comment_on_tasks',
            'view_task_comments',
            'view_task_attachments',
            'view_task_checklist_items',
            'upload_on_tasks',
            'view_task_total_logged_time',
            'view_finance_overview',
            'upload_files',
            'open_discussions',
            'view_milestones',
            'view_gantt',
            'view_timesheets',
            'view_activity_log',
            'view_team_members',
            'hide_tasks_on_main_tasks_table',
        ];

        $this->patrimoine_settings = hooks()->apply_filters('patrimoine_settings', $patrimoine_settings);
    }

    public function get_patrimoine_statuses()
    {
        $statuses = hooks()->apply_filters('before_get_patrimoine_statuses', [
            [
                'id'             => 1,
                'color'          => '#989898',
                'name'           => _l('patrimoine_status_1'),
                'order'          => 1,
                'filter_default' => true,
            ],
            [
                'id'             => 2,
                'color'          => '#03a9f4',
                'name'           => _l('patrimoine_status_2'),
                'order'          => 2,
                'filter_default' => true,
            ],
            [
                'id'             => 3,
                'color'          => '#ff6f00',
                'name'           => _l('patrimoine_status_3'),
                'order'          => 3,
                'filter_default' => true,
            ],
            [
                'id'             => 4,
                'color'          => '#84c529',
                'name'           => _l('patrimoine_status_4'),
                'order'          => 100,
                'filter_default' => false,
            ],
            [
                'id'             => 5,
                'color'          => '#989898',
                'name'           => _l('patrimoine_status_5'),
                'order'          => 4,
                'filter_default' => false,
            ],
        ]);

        usort($statuses, function ($a, $b) {
            return $a['order'] - $b['order'];
        });

        return $statuses;
    }

    public function get_distinct_tasks_timesheets_staff($patrimoine_id)
    {
        return $this->db->query('SELECT DISTINCT staff_id FROM ' . db_prefix() . 'taskstimers LEFT JOIN ' . db_prefix() . 'tasks ON ' . db_prefix() . 'tasks.id = ' . db_prefix() . 'taskstimers.task_id WHERE rel_type="patrimoine" AND rel_id=' . $this->db->escape_str($patrimoine_id))->result_array();
    }

    public function get_distinct_patrimoines_members()
    {
        return $this->db->query('SELECT staff_id, firstname, lastname FROM ' . db_prefix() . 'patrimoine_members JOIN ' . db_prefix() . 'staff ON ' . db_prefix() . 'staff.staffid=' . db_prefix() . 'patrimoine_members.staff_id GROUP by staff_id order by firstname ASC')->result_array();
    }

    public function get_most_used_billing_type()
    {
        return $this->db->query('SELECT billing_type, COUNT(*) AS total_usage
                FROM ' . db_prefix() . 'patrimoines
                GROUP BY billing_type
                ORDER BY total_usage DESC
                LIMIT 1')->row();
    }

    public function timers_started_for_patrimoine($patrimoine_id, $where = [], $task_timers_where = [])
    {
        $this->db->where($where);
        $this->db->where('end_time IS NULL');
        $this->db->where(db_prefix() . 'tasks.rel_id', $patrimoine_id);
        $this->db->where(db_prefix() . 'tasks.rel_type', 'patrimoine');
        $this->db->join(db_prefix() . 'tasks', db_prefix() . 'tasks.id=' . db_prefix() . 'taskstimers.task_id');
        $total = $this->db->count_all_results(db_prefix() . 'taskstimers');

        return $total > 0 ? true : false;
    }

    public function pin_action($id)
    {
        if (total_rows(db_prefix() . 'pinned_patrimoines', [
            'staff_id' => get_staff_user_id(),
            'patrimoine_id' => $id,
        ]) == 0) {
            $this->db->insert(db_prefix() . 'pinned_patrimoines', [
                'staff_id'   => get_staff_user_id(),
                'patrimoine_id' => $id,
            ]);

            return true;
        }
        $this->db->where('patrimoine_id', $id);
        $this->db->where('staff_id', get_staff_user_id());
        $this->db->delete(db_prefix() . 'pinned_patrimoines');

        return true;
    }

    public function get_currency($id)
    {
        $this->load->model('currencies_model');
        $customer_currency = $this->clients_model->get_customer_default_currency(get_client_id_by_patrimoine_id($id));
        if ($customer_currency != 0) {
            $currency = $this->currencies_model->get($customer_currency);
        } else {
            $currency = $this->currencies_model->get_base_currency();
        }

        return $currency;
    }

    public function calc_progress($id)
    {
        $this->db->select('progress_from_tasks,progress,status');
        $this->db->where('id', $id);
        $patrimoine = $this->db->get(db_prefix() . 'patrimoines')->row();

        if ($patrimoine->status == 4) {
            return 100;
        }

        if ($patrimoine->progress_from_tasks == 1) {
            return $this->calc_progress_by_tasks($id);
        }

        return $patrimoine->progress;
    }

    public function calc_progress_by_tasks($id)
    {
        $total_patrimoine_tasks = total_rows(db_prefix() . 'tasks', [
            'rel_type' => 'patrimoine',
            'rel_id'   => $id,
        ]);
        $total_finished_tasks = total_rows(db_prefix() . 'tasks', [
            'rel_type' => 'patrimoine',
            'rel_id'   => $id,
            'status'   => 5,
        ]);
        $percent = 0;
        if ($total_finished_tasks >= floatval($total_patrimoine_tasks)) {
            $percent = 100;
        } else {
            if ($total_patrimoine_tasks !== 0) {
                $percent = number_format(($total_finished_tasks * 100) / $total_patrimoine_tasks, 2);
            }
        }

        return $percent;
    }

    public function get_last_patrimoine_settings()
    {
        $this->db->select('id');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $last_patrimoine = $this->db->get(db_prefix() . 'patrimoines')->row();
        if ($last_patrimoine) {
            return $this->get_patrimoine_settings($last_patrimoine->id);
        }

        return [];
    }

    public function get_settings()
    {
        return $this->patrimoine_settings;
    }

    public function get($id = '', $where = [])
    {
        $this->db->where($where);
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $patrimoine = $this->db->get(db_prefix() . 'patrimoines')->row();
            if ($patrimoine) {
                $patrimoine->shared_vault_entries = $this->clients_model->get_vault_entries($patrimoine->clientid, ['share_in_patrimoines' => 1]);
                $settings                      = $this->get_patrimoine_settings($id);

                // SYNC NEW TABS
                $tabs                        = get_patrimoine_tabs_admin();
                $tabs_flatten                = [];
                $settings_available_features = [];

                $available_features_index = false;
                foreach ($settings as $key => $setting) {

                    if ($setting['name'] == 'available_features') {
                        $available_features_index = $key;

                        $available_features       = unserialize($setting['value']);
                        if (is_array($available_features)) {
                            foreach ($available_features as $name => $avf) {
                                $settings_available_features[] = $name;
                            }
                        }
                    }
                }
                foreach ($tabs as $tab) {
                    if (isset($tab['collapse'])) {
                        foreach ($tab['children'] as $d) {
                            $tabs_flatten[] = $d['slug'];
                        }
                    } else {
                        $tabs_flatten[] = $tab['slug'];
                    }
                }
                if (count($settings_available_features) != $tabs_flatten) {
                    foreach ($tabs_flatten as $tab) {
                        if (!in_array($tab, $settings_available_features)) {
                            if ($available_features_index) {
                                $current_available_features_settings = $settings[$available_features_index];
                                $tmp                                 = unserialize($current_available_features_settings['value']);
                                $tmp[$tab]                           = 1;
                                $this->db->where('id', $current_available_features_settings['id']);
                                $this->db->update(db_prefix() . 'patrimoine_settings', ['value' => serialize($tmp)]);
                            }
                        }
                    }
                }

                $patrimoine->settings = new StdClass();

                foreach ($settings as $setting) {
                    $patrimoine->settings->{$setting['name']} = $setting['value'];
                }

                $patrimoine->client_data = new StdClass();
                $patrimoine->client_data = $this->clients_model->get($patrimoine->clientid);

                $patrimoine->info = new StdClass();
                $patrimoine->info = $this->patrimoines_info_model->get_info($id);
                // foreach($patrimoine->info as $key => $value) {
                //     $patrimoine[$key] = $value;
                // }

                $patrimoine            = hooks()->apply_filters('patrimoine_get', $patrimoine);
                $GLOBALS['patrimoine'] = $patrimoine;

                return $patrimoine;
            }

            return null;
        }

        $this->db->select('*,' . get_sql_select_client_company());
        $this->db->join(db_prefix() . 'clients', db_prefix() . 'clients.userid=' . db_prefix() . 'patrimoines.clientid');
        $this->db->order_by('id', 'desc');

        return $this->db->get(db_prefix() . 'patrimoines')->result_array();
    }

    public function calculate_total_by_patrimoine_hourly_rate($seconds, $hourly_rate)
    {
        $hours       = seconds_to_time_format($seconds);
        $decimal     = sec2qty($seconds);
        $total_money = 0;
        $total_money += ($decimal * $hourly_rate);

        return [
            'hours'       => $hours,
            'total_money' => $total_money,
        ];
    }

    public function calculate_total_by_task_hourly_rate($tasks)
    {
        $total_money    = 0;
        $_total_seconds = 0;

        foreach ($tasks as $task) {
            $seconds = $task['total_logged_time'];
            $_total_seconds += $seconds;
            $total_money += sec2qty($seconds) * $task['hourly_rate'];
        }

        return [
            'total_money'   => $total_money,
            'total_seconds' => $_total_seconds,
        ];
    }

    public function get_tasks($id, $where = [], $apply_restrictions = false, $count = false, $callback = null)
    {
        $has_permission                    = has_permission('tasks', '', 'view');
        $show_all_tasks_for_patrimoine_member = get_option('show_all_tasks_for_patrimoine_member');

        $select = implode(', ', prefixed_table_fields_array(db_prefix() . 'tasks')) . ',' . db_prefix() . 'milestones.name as milestone_name,
        (SELECT SUM(CASE
            WHEN end_time is NULL THEN ' . time() . '-start_time
            ELSE end_time-start_time
            END) FROM ' . db_prefix() . 'taskstimers WHERE task_id=' . db_prefix() . 'tasks.id) as total_logged_time,
           ' . get_sql_select_task_assignees_ids() . ' as assignees_ids
        ';

        if (!is_client_logged_in() && is_staff_logged_in()) {
            $select .= ',(SELECT staffid FROM ' . db_prefix() . 'task_assigned WHERE taskid=' . db_prefix() . 'tasks.id AND staffid=' . get_staff_user_id() . ') as current_user_is_assigned';
        }

        if (is_client_logged_in()) {
            $this->db->where('visible_to_client', 1);
        }

        $this->db->select($select);

        $this->db->join(db_prefix() . 'milestones', db_prefix() . 'milestones.id = ' . db_prefix() . 'tasks.milestone', 'left');
        $this->db->where('rel_id', $id);
        $this->db->where('rel_type', 'patrimoine');
        if ($apply_restrictions == true) {
            if (!is_client_logged_in() && !$has_permission && $show_all_tasks_for_patrimoine_member == 0) {
                $this->db->where('(
                    ' . db_prefix() . 'tasks.id IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned WHERE staffid=' . get_staff_user_id() . ')
                    OR ' . db_prefix() . 'tasks.id IN(SELECT taskid FROM ' . db_prefix() . 'task_followers WHERE staffid=' . get_staff_user_id() . ')
                    OR is_public = 1
                    OR (addedfrom =' . get_staff_user_id() . ' AND is_added_from_contact = 0)
                    )');
            }
        }

        $this->db->where($where);

        // Milestones kanban order
        // Request is admin/wealth_management/milestones_kanban
        if ($this->uri->segment(3) == 'milestones_kanban' | $this->uri->segment(3) == 'milestones_kanban_load_more') {
            $this->db->order_by('milestone_order', 'asc');
        } else {
            $orderByString = hooks()->apply_filters('patrimoine_tasks_array_default_order', 'FIELD(status, 5), duedate IS NULL ASC, duedate');
            $this->db->order_by($orderByString, '', false);
        }

        if ($callback) {
            $callback();
        }

        if ($count == false) {
            $tasks = $this->db->get(db_prefix() . 'tasks')->result_array();
        } else {
            $tasks = $this->db->count_all_results(db_prefix() . 'tasks');
        }

        return $tasks;
    }

    public function cancel_recurring_tasks($id)
    {
        $this->db->where('rel_type', 'patrimoine');
        $this->db->where('rel_id', $id);
        $this->db->where('recurring', 1);
        $this->db->where('(cycles != total_cycles OR cycles=0)');

        $this->db->update(db_prefix() . 'tasks', [
            'recurring_type'      => null,
            'repeat_every'        => 0,
            'cycles'              => 0,
            'recurring'           => 0,
            'custom_recurring'    => 0,
            'last_recurring_date' => null,
        ]);
    }

    public function do_milestones_kanban_query($milestone_id, $patrimoine_id, $page = 1, $where = [], $count = false)
    {
        $where['milestone'] = $milestone_id;
        $limit              = get_option('tasks_kanban_limit');
        $tasks              = $this->get_tasks($patrimoine_id, $where, true, $count, function () use ($count, $page, $limit) {
            if ($count == false) {
                if ($page > 1) {
                    $position = (($page - 1) * $limit);
                    $this->db->limit($limit, $position);
                } else {
                    $this->db->limit($limit);
                }
            }
        });

        return $tasks;
    }

    public function get_files($patrimoine_id)
    {
        if (is_client_logged_in()) {
            $this->db->where('visible_to_customer', 1);
        }
        $this->db->where('patrimoine_id', $patrimoine_id);

        return $this->db->get(db_prefix() . 'patrimoine_files')->result_array();
    }

    public function get_file($id, $patrimoine_id = false)
    {
        if (is_client_logged_in()) {
            $this->db->where('visible_to_customer', 1);
        }
        $this->db->where('id', $id);
        $file = $this->db->get(db_prefix() . 'patrimoine_files')->row();

        if ($file && $patrimoine_id) {
            if ($file->patrimoine_id != $patrimoine_id) {
                return false;
            }
        }

        return $file;
    }

    public function update_file_data($data)
    {
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update(db_prefix() . 'patrimoine_files', $data);
    }

    public function change_file_visibility($id, $visible)
    {
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'patrimoine_files', [
            'visible_to_customer' => $visible,
        ]);
    }

    public function change_activity_visibility($id, $visible)
    {
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'patrimoine_activity', [
            'visible_to_customer' => $visible,
        ]);
    }

    public function remove_file($id, $logActivity = true)
    {
        hooks()->do_action('before_remove_patrimoine_file', $id);

        $this->db->where('id', $id);
        $file = $this->db->get(db_prefix() . 'patrimoine_files')->row();
        if ($file) {
            if (empty($file->external)) {
                $path     = get_upload_path_by_type('patrimoine') . $file->patrimoine_id . '/';
                $fullPath = $path . $file->file_name;
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                    $fname     = pathinfo($fullPath, PATHINFO_FILENAME);
                    $fext      = pathinfo($fullPath, PATHINFO_EXTENSION);
                    $thumbPath = $path . $fname . '_thumb.' . $fext;

                    if (file_exists($thumbPath)) {
                        unlink($thumbPath);
                    }
                }
            }

            $this->db->where('id', $id);
            $this->db->delete(db_prefix() . 'patrimoine_files');
            if ($logActivity) {
                $this->log_activity($file->patrimoine_id, 'patrimoine_activity_patrimoine_file_removed', $file->file_name, $file->visible_to_customer);
            }

            // Delete discussion comments
            $this->_delete_discussion_comments($id, 'file');

            if (is_dir(get_upload_path_by_type('patrimoine') . $file->patrimoine_id)) {
                // Check if no attachments left, so we can delete the folder also
                $other_attachments = list_files(get_upload_path_by_type('patrimoine') . $file->patrimoine_id);
                if (count($other_attachments) == 0) {
                    delete_dir(get_upload_path_by_type('patrimoine') . $file->patrimoine_id);
                }
            }

            return true;
        }

        return false;
    }

    public function get_patrimoine_overview_weekly_chart_data($id, $type = 'this_week')
    {
        $billing_type = get_patrimoine_billing_type($id);
        $chart        = [];

        $has_permission_create = has_permission('patrimoines', '', 'create');
        // If don't have permission for patrimoines create show only bileld time
        if (!$has_permission_create) {
            $timesheets_type = 'total_logged_time_only';
        } else {
            if ($billing_type == 2 || $billing_type == 3) {
                $timesheets_type = 'billable_unbilled';
            } else {
                $timesheets_type = 'total_logged_time_only';
            }
        }

        $chart['data']             = [];
        $chart['data']['labels']   = [];
        $chart['data']['datasets'] = [];

        $chart['data']['datasets'][] = [
            'label'           => ($timesheets_type == 'billable_unbilled' ? str_replace(':', '', _l('patrimoine_overview_billable_hours')) : str_replace(':', '', _l('patrimoine_overview_logged_hours'))),
            'data'            => [],
            'backgroundColor' => [],
            'borderColor'     => [],
            'borderWidth'     => 1,
        ];

        if ($timesheets_type == 'billable_unbilled') {
            $chart['data']['datasets'][] = [
                'label'           => str_replace(':', '', _l('patrimoine_overview_unbilled_hours')),
                'data'            => [],
                'backgroundColor' => [],
                'borderColor'     => [],
                'borderWidth'     => 1,
            ];
        }

        $temp_weekdays_data = [];
        $weeks              = [];
        $where_time         = '';

        if ($type == 'this_month') {
            $beginThisMonth = date('Y-m-01');
            $endThisMonth   = date('Y-m-t 23:59:59');

            $weeks_split_start = date('Y-m-d', strtotime($beginThisMonth));
            $weeks_split_end   = date('Y-m-d', strtotime($endThisMonth));

            $where_time = 'start_time BETWEEN ' . strtotime($beginThisMonth) . ' AND ' . strtotime($endThisMonth);
        } elseif ($type == 'last_month') {
            $beginLastMonth = date('Y-m-01', strtotime('-1 MONTH'));
            $endLastMonth   = date('Y-m-t 23:59:59', strtotime('-1 MONTH'));

            $weeks_split_start = date('Y-m-d', strtotime($beginLastMonth));
            $weeks_split_end   = date('Y-m-d', strtotime($endLastMonth));

            $where_time = 'start_time BETWEEN ' . strtotime($beginLastMonth) . ' AND ' . strtotime($endLastMonth);
        } elseif ($type == 'last_week') {
            $beginLastWeek = date('Y-m-d', strtotime('monday last week'));
            $endLastWeek   = date('Y-m-d 23:59:59', strtotime('sunday last week'));
            $where_time    = 'start_time BETWEEN ' . strtotime($beginLastWeek) . ' AND ' . strtotime($endLastWeek);
        } else {
            $beginThisWeek = date('Y-m-d', strtotime('monday this week'));
            $endThisWeek   = date('Y-m-d 23:59:59', strtotime('sunday this week'));
            $where_time    = 'start_time BETWEEN ' . strtotime($beginThisWeek) . ' AND ' . strtotime($endThisWeek);
        }

        if ($type == 'this_week' || $type == 'last_week') {
            foreach (get_weekdays() as $day) {
                array_push($chart['data']['labels'], $day);
            }
            $weekDay = date('w', strtotime(date('Y-m-d H:i:s')));
            $i       = 0;
            foreach (get_weekdays_original() as $day) {
                if ($weekDay != '0') {
                    $chart['data']['labels'][$i] = date('d', strtotime($day . ' ' . str_replace('_', ' ', $type))) . ' - ' . $chart['data']['labels'][$i];
                } else {
                    if ($type == 'this_week') {
                        $strtotime = 'last ' . $day;
                        if ($day == 'Sunday') {
                            $strtotime = 'sunday this week';
                        }
                        $chart['data']['labels'][$i] = date('d', strtotime($strtotime)) . ' - ' . $chart['data']['labels'][$i];
                    } else {
                        $strtotime                   = $day . ' last week';
                        $chart['data']['labels'][$i] = date('d', strtotime($strtotime)) . ' - ' . $chart['data']['labels'][$i];
                    }
                }
                $i++;
            }
        } elseif ($type == 'this_month' || $type == 'last_month') {
            $weeks_split_start = new DateTime($weeks_split_start);
            $weeks_split_end   = new DateTime($weeks_split_end);
            $weeks             = get_weekdays_between_dates($weeks_split_start, $weeks_split_end);
            $total_weeks       = count($weeks);
            for ($i = 1; $i <= $total_weeks; $i++) {
                array_push($chart['data']['labels'], split_weeks_chart_label($weeks, $i));
            }
        }

        $loop_break = ($timesheets_type == 'billable_unbilled') ? 2 : 1;

        for ($i = 0; $i < $loop_break; $i++) {
            $temp_weekdays_data = [];
            // Store the weeks in new variable for each loop to prevent duplicating
            $tmp_weeks = $weeks;


            $color = '3, 169, 244';

            $where = 'task_id IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type = "patrimoine" AND rel_id = "' . $this->db->escape_str($id) . '"';

            if ($timesheets_type != 'total_logged_time_only') {
                $where .= ' AND billable=1';
                if ($i == 1) {
                    $color = '252, 45, 66';
                    $where .= ' AND billed = 0';
                }
            }

            $where .= ')';
            $this->db->where($where_time);
            $this->db->where($where);
            if (!$has_permission_create) {
                $this->db->where('staff_id', get_staff_user_id());
            }
            $timesheets = $this->db->get(db_prefix() . 'taskstimers')->result_array();

            foreach ($timesheets as $t) {
                $total_logged_time = 0;
                if ($t['end_time'] == null) {
                    $total_logged_time = time() - $t['start_time'];
                } else {
                    $total_logged_time = $t['end_time'] - $t['start_time'];
                }

                if ($type == 'this_week' || $type == 'last_week') {
                    $weekday = date('N', $t['start_time']);
                    if (!isset($temp_weekdays_data[$weekday])) {
                        $temp_weekdays_data[$weekday] = 0;
                    }
                    $temp_weekdays_data[$weekday] += $total_logged_time;
                } else {
                    // months - this and last
                    $w = 1;
                    foreach ($tmp_weeks as $week) {
                        $start_time_date = strftime('%Y-%m-%d', $t['start_time']);
                        if (!isset($tmp_weeks[$w]['total'])) {
                            $tmp_weeks[$w]['total'] = 0;
                        }
                        if (in_array($start_time_date, $week)) {
                            $tmp_weeks[$w]['total'] += $total_logged_time;
                        }
                        $w++;
                    }
                }
            }

            if ($type == 'this_week' || $type == 'last_week') {
                ksort($temp_weekdays_data);
                for ($w = 1; $w <= 7; $w++) {
                    $total_logged_time = 0;
                    if (isset($temp_weekdays_data[$w])) {
                        $total_logged_time = $temp_weekdays_data[$w];
                    }
                    array_push($chart['data']['datasets'][$i]['data'], sec2qty($total_logged_time));
                    array_push($chart['data']['datasets'][$i]['backgroundColor'], 'rgba(' . $color . ',0.8)');
                    array_push($chart['data']['datasets'][$i]['borderColor'], 'rgba(' . $color . ',1)');
                }
            } else {
                // loop over $tmp_weeks because the unbilled is shown twice because we auto increment twice
                // months - this and last
                foreach ($tmp_weeks as $week) {
                    $total = 0;
                    if (isset($week['total'])) {
                        $total = $week['total'];
                    }
                    $total_logged_time = $total;
                    array_push($chart['data']['datasets'][$i]['data'], sec2qty($total_logged_time));
                    array_push($chart['data']['datasets'][$i]['backgroundColor'], 'rgba(' . $color . ',0.8)');
                    array_push($chart['data']['datasets'][$i]['borderColor'], 'rgba(' . $color . ',1)');
                }
            }
        }

        return $chart;
    }

    public function get_gantt_data($patrimoine_id, $type = 'milestones', $taskStatus = null)
    {
        $patrimoine_data = $this->get($patrimoine_id);
        $type_data    = [];
        if ($type == 'milestones') {
            $type_data[] = [
                'name'   => _l('milestones_uncategorized'),
                'dep_id' => 'milestone_0',
                'id'     => 0,
            ];
            $_milestones = $this->get_milestones($patrimoine_id);
            foreach ($_milestones as $m) {
                $m['dep_id']       = 'milestone_' . $m['id'];
                $m['milestone_id'] = $m['id'];
                $type_data[]       = $m;
            }
        } elseif ($type == 'members') {
            $type_data[] = [
                'name'     => _l('task_list_not_assigned'),
                'dep_id'   => 'member_0',
                'staff_id' => 0,
            ];
            $_members = $this->get_patrimoine_members($patrimoine_id);
            foreach ($_members as $m) {
                $m['dep_id'] = 'member_' . $m['staff_id'];
                $m['name']   = get_staff_full_name($m['staff_id']);
                $type_data[] = $m;
            }
        } else {
            if (!$taskStatus) {
                $statuses = $this->tasks_model->get_statuses();
                foreach ($statuses as $status) {
                    $status['dep_id'] = 'status_' . $status['id'];
                    $status['name']   = format_task_status($status['id'], false, true);
                    $type_data[]      = $status;
                }
            } else {
                $status['id']     = $taskStatus;
                $status['dep_id'] = 'status_' . $taskStatus;
                $status['name']   = format_task_status($taskStatus, false, true);
                $type_data[]      = $status;
            }
        }

        $gantt_data     = [];
        $has_permission = has_permission('tasks', '', 'view');
        foreach ($type_data as $data) {
            if ($type == 'milestones') {
                $tasks = $this->get_tasks($patrimoine_id, 'milestone=' . $this->db->escape_str($data['id']) . ($taskStatus ? ' AND ' . db_prefix() . 'tasks.status=' . $this->db->escape_str($taskStatus) : ''), true);
                if (isset($data['due_date'])) {
                    $data['end'] = $data['due_date'];
                }
                unset($data['description']);
            } elseif ($type == 'members') {
                if ($data['staff_id'] != 0) {
                    $tasks = $this->get_tasks($patrimoine_id, db_prefix() . 'tasks.id IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned WHERE staffid=' . $data['staff_id'] . ')' . ($taskStatus ? ' AND ' . db_prefix() . 'tasks.status=' . $taskStatus : ''), true);
                } else {
                    $tasks = $this->get_tasks($patrimoine_id, db_prefix() . 'tasks.id NOT IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned)' . ($taskStatus ? ' AND ' . db_prefix() . 'tasks.status=' . $taskStatus : ''), true);
                }
            } else {
                $tasks = $this->get_tasks($patrimoine_id, [
                    'status' => $data['id'],
                ], true);
            }

            if (count($tasks) > 0) {
                $data['id']           = $data['dep_id'];
                $data['start']        = $patrimoine_data->start_date;
                $data['end']          = (isset($data['end'])) ? $data['end'] : $patrimoine_data->deadline;
                $data['custom_class'] = 'noDrag';
                unset($data['dep_id']);
                $gantt_data[] = $data;

                foreach ($tasks as $task) {
                    $gantt_data[] = get_task_array_gantt_data($task, $data['id']);
                }
            }
        }

        return $gantt_data;
    }

    public function get_all_patrimoines_gantt_data($filters = [])
    {
        $statuses   = $this->get_patrimoine_statuses();
        $gantt_data = [];

        $statusesIds = [];
        foreach ($statuses as $status) {
            if (!in_array($status['id'], $filters['status'])) {
                continue;
            }

            if (!has_permission('patrimoines', '', 'view')) {
                $this->db->where(db_prefix() . 'patrimoines.id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . ')');
            }

            if ($filters['member']) {
                $this->db->where(db_prefix() . 'patrimoines.id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . $this->db->escape_str($filters['member']) . ')');
            }

            $this->db->where('status', $status['id']);
            $this->db->order_by('deadline IS NULL ASC, deadline', '', false);
            $patrimoines = $this->db->get(db_prefix() . 'patrimoines')->result_array();

            foreach ($patrimoines as $patrimoine) {
                $tasks = $this->get_tasks($patrimoine['id'], [], true);

                $data               = [];
                $data['id']         = 'proj_' . $patrimoine['id'];
                $data['patrimoine_id'] = $patrimoine['id'];
                $data['name']       = $patrimoine['name'];
                $data['progress']   = 0;
                $data['start']      = strftime('%Y-%m-%d', strtotime($patrimoine['start_date']));

                if (!empty($patrimoine['deadline'])) {
                    $data['end'] = strftime('%Y-%m-%d', strtotime($patrimoine['deadline']));
                }

                $data['custom_class'] = 'noDrag';
                $gantt_data[]         = $data;

                if (count($tasks) > 0) {
                    foreach ($tasks as $task) {
                        $task_data                 = get_task_array_gantt_data($task, null, isset($data['end']) ? $data['end'] : null);
                        $task_data['progress']     = 0;
                        $task_data['dependencies'] = $data['id'];
                        $gantt_data[]              = $task_data;
                    }
                }
            }
        }

        return $gantt_data;
    }

    public function calc_milestone_logged_time($patrimoine_id, $id)
    {
        $total = [];
        $tasks = $this->get_tasks($patrimoine_id, [
            'milestone' => $id,
        ]);

        foreach ($tasks as $task) {
            $total[] = $task['total_logged_time'];
        }

        return array_sum($total);
    }

    public function total_logged_time($id)
    {
        $q = $this->db->query('
            SELECT SUM(CASE
                WHEN end_time is NULL THEN ' . time() . '-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM ' . db_prefix() . 'taskstimers
            WHERE task_id IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id=' . $this->db->escape_str($id) . ')')
            ->row();

        return $q->total_logged_time;
    }

    public function get_milestones($patrimoine_id)
    {
        $this->db->select('*, (SELECT COUNT(id) FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id=' . $this->db->escape_str($patrimoine_id) . ' and milestone=' . db_prefix() . 'milestones.id) as total_tasks, (SELECT COUNT(id) FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id=' . $this->db->escape_str($patrimoine_id) . ' and milestone=' . db_prefix() . 'milestones.id AND status=5) as total_finished_tasks');
        $this->db->where('patrimoine_id', $patrimoine_id);
        $this->db->order_by('milestone_order', 'ASC');
        $milestones = $this->db->get(db_prefix() . 'milestones')->result_array();
        $i          = 0;
        foreach ($milestones as $milestone) {
            $milestones[$i]['total_logged_time'] = $this->calc_milestone_logged_time($patrimoine_id, $milestone['id']);
            $i++;
        }


        return $milestones;
    }

    public function add_milestone($data)
    {
        $data['due_date']    = to_sql_date($data['due_date']);
        $data['datecreated'] = date('Y-m-d');
        $data['description'] = nl2br($data['description']);

        if (isset($data['description_visible_to_customer'])) {
            $data['description_visible_to_customer'] = 1;
        } else {
            $data['description_visible_to_customer'] = 0;
        }
        $this->db->insert(db_prefix() . 'milestones', $data);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            $this->db->where('id', $insert_id);
            $milestone = $this->db->get(db_prefix() . 'milestones')->row();
            $patrimoine   = $this->get($milestone->patrimoine_id);
            if ($patrimoine->settings->view_milestones == 1) {
                $show_to_customer = 1;
            } else {
                $show_to_customer = 0;
            }
            $this->log_activity($milestone->patrimoine_id, 'patrimoine_activity_created_milestone', $milestone->name, $show_to_customer);
            log_activity('Patrimoine Milestone Created [ID:' . $insert_id . ']');

            return $insert_id;
        }

        return false;
    }

    public function update_milestone($data, $id)
    {
        $this->db->where('id', $id);
        $milestone           = $this->db->get(db_prefix() . 'milestones')->row();
        $data['due_date']    = to_sql_date($data['due_date']);
        $data['description'] = nl2br($data['description']);

        if (isset($data['description_visible_to_customer'])) {
            $data['description_visible_to_customer'] = 1;
        } else {
            $data['description_visible_to_customer'] = 0;
        }

        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'milestones', $data);
        if ($this->db->affected_rows() > 0) {
            $patrimoine = $this->get($milestone->patrimoine_id);
            if ($patrimoine->settings->view_milestones == 1) {
                $show_to_customer = 1;
            } else {
                $show_to_customer = 0;
            }
            $this->log_activity($milestone->patrimoine_id, 'patrimoine_activity_updated_milestone', $milestone->name, $show_to_customer);
            log_activity('Patrimoine Milestone Updated [ID:' . $id . ']');

            return true;
        }

        return false;
    }

    public function update_task_milestone($data)
    {
        $this->db->where('id', $data['task_id']);
        $this->db->update(db_prefix() . 'tasks', [
            'milestone' => $data['milestone_id'],
        ]);

        foreach ($data['order'] as $order) {
            $this->db->where('id', $order[0]);
            $this->db->update(db_prefix() . 'tasks', [
                'milestone_order' => $order[1],
            ]);
        }
    }

    public function update_milestones_order($data)
    {
        foreach ($data['order'] as $status) {
            $this->db->where('id', $status[0]);
            $this->db->update(db_prefix() . 'milestones', [
                'milestone_order' => $status[1],
            ]);
        }
    }

    public function update_milestone_color($data)
    {
        $this->db->where('id', $data['milestone_id']);
        $this->db->update(db_prefix() . 'milestones', [
            'color' => $data['color'],
        ]);
    }

    public function delete_milestone($id)
    {
        $this->db->where('id', $id);
        $milestone = $this->db->get(db_prefix() . 'milestones')->row();
        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'milestones');
        if ($this->db->affected_rows() > 0) {
            $patrimoine = $this->get($milestone->patrimoine_id);
            if ($patrimoine->settings->view_milestones == 1) {
                $show_to_customer = 1;
            } else {
                $show_to_customer = 0;
            }
            $this->log_activity($milestone->patrimoine_id, 'patrimoine_activity_deleted_milestone', $milestone->name, $show_to_customer);
            $this->db->where('milestone', $id);
            $this->db->update(db_prefix() . 'tasks', [
                'milestone' => 0,
            ]);
            log_activity('Patrimoine Milestone Deleted [' . $id . ']');

            return true;
        }

        return false;
    }

    public function add($data)
    {
        if (isset($data['notify_patrimoine_members_status_change'])) {
            unset($data['notify_patrimoine_members_status_change']);
        }
        $send_created_email = false;
        if (isset($data['send_created_email'])) {
            unset($data['send_created_email']);
            $send_created_email = true;
        }

        $send_patrimoine_marked_as_finished_email_to_contacts = false;
        if (isset($data['patrimoine_marked_as_finished_email_to_contacts'])) {
            unset($data['patrimoine_marked_as_finished_email_to_contacts']);
            $send_patrimoine_marked_as_finished_email_to_contacts = true;
        }

        if (isset($data['settings'])) {
            $patrimoine_settings = $data['settings'];
            unset($data['settings']);
        }
        if (isset($data['custom_fields'])) {
            $custom_fields = $data['custom_fields'];
            unset($data['custom_fields']);
        }
        if (isset($data['progress_from_tasks'])) {
            $data['progress_from_tasks'] = 1;
        } else {
            $data['progress_from_tasks'] = 0;
        }

        if (isset($data['contact_notification'])) {
            if ($data['contact_notification'] == 2) {
                $data['notify_contacts'] = serialize($data['notify_contacts']);
            } else {
                $data['notify_contacts'] = serialize([]);
            }
        }

        $data['patrimoine_cost']    = !empty($data['patrimoine_cost']) ? $data['patrimoine_cost'] : null;
        $data['estimated_hours'] = !empty($data['estimated_hours']) ? $data['estimated_hours'] : null;

        $data['start_date'] = to_sql_date($data['start_date']);

        if (!empty($data['deadline'])) {
            $data['deadline'] = to_sql_date($data['deadline']);
        } else {
            unset($data['deadline']);
        }

        $data['patrimoine_created'] = date('Y-m-d');
        if (isset($data['patrimoine_members'])) {
            $patrimoine_members = $data['patrimoine_members'];
            unset($data['patrimoine_members']);
        }
        if ($data['billing_type'] == 1) {
            $data['patrimoine_rate_per_hour'] = 0;
        } elseif ($data['billing_type'] == 2) {
            $data['patrimoine_cost'] = 0;
        } else {
            $data['patrimoine_rate_per_hour'] = 0;
            $data['patrimoine_cost']          = 0;
        }

        $data['addedfrom'] = get_staff_user_id();


        $items_to_convert = false;
        if (isset($data['items'])) {
            $items_to_convert = $data['items'];
            $estimate_id = $data['estimate_id'];
            $items_assignees = $data['items_assignee'];
            unset($data['items'], $data['estimate_id'], $data['items_assignee']);
        }

        $data = hooks()->apply_filters('before_add_patrimoine', $data);

        $tags = '';
        if (isset($data['tags'])) {
            $tags = $data['tags'];
            unset($data['tags']);
        }

        // add patremoins info // 
        $patr_info = [];
        $patr_info_attributes = ['patr_me_firstname', 'patr_me_lastname', 'patr_me_birthday','patr_me_profession','patr_me_depart','patr_me_nss', 'patr_me_address', 'patr_me_tele_perso', 'patr_me_tele_m', 'patr_me_tele_mme', 'patr_me_email_one', 'patr_me_email_two', 'patr_partner_firstname', 'patr_partner_lastname', 'patr_partner_birthday', 'patr_partner_profession', 'patr_partner_depart', 'patr_partner_nss', 'patr_partner_precedent_marriage_date', 'patr_partner_regime', 'patr_partner_marriage_date', 'patr_partner_marriage_duration', 'patr_partner_situtation', 'patr_partner_finance', 'patr_partner_donation'];
        
        foreach($patr_info_attributes as $patr) {
            $patr_info[$patr] = $data[$patr];
            unset($data[$patr]);
        }

        $this->db->insert(db_prefix() . 'patrimoines', $data);
        $insert_id = $this->db->insert_id();

        if ($insert_id) {

            handle_tags_save($tags, $insert_id, 'patrimoine');

            /*** save information */
            $patr_info['patr_me_firstname']   = trim($patr_info['patr_me_firstname']);
            $patr_info['patr_me_lastname']   = trim($patr_info['patr_me_lastname']);
            $patr_info['patr_me_address']   = trim($patr_info['patr_me_address']);
    
            if (isset($patr_info['patr_me_birthday'])) {
                $patr_info['patr_me_birthday'] = to_sql_date($patr_info['patr_me_birthday']);
            }
            if($patr_info['patr_partner_donation'] != 0 || $patr_info['patr_partner_donation'] != 1) {
                unset($patr_info['patr_partner_donation']);
            }
            // add created date and last updated date.
            $patr_info['created_date'] = date('Y-m-d H:i:s');
            $patr_info['updated_date'] = date('Y-m-d H:i:s');
            $patr_info['patrimoineid'] = $insert_id;
    
            $this->db->insert(db_prefix() . 'patrimoines_info', $patr_info);
            $this->db->insert_id();
    
            /*****./END::save information */

            if (isset($custom_fields)) {
                handle_custom_fields_post($insert_id, $custom_fields);
            }

            if (isset($patrimoine_members)) {
                $_pm['patrimoine_members'] = $patrimoine_members;
                $this->add_edit_members($_pm, $insert_id);
            }

            $original_settings = $this->get_settings();
            if (isset($patrimoine_settings)) {
                $_settings = [];
                $_values   = [];
                foreach ($patrimoine_settings as $name => $val) {
                    array_push($_settings, $name);
                    $_values[$name] = $val;
                }
                foreach ($original_settings as $setting) {
                    if ($setting != 'available_features') {
                        if (in_array($setting, $_settings)) {
                            $value_setting = 1;
                        } else {
                            $value_setting = 0;
                        }
                    } else {
                        $tabs         = get_patrimoine_tabs_admin();
                        $tab_settings = [];
                        foreach ($_values[$setting] as $tab) {
                            $tab_settings[$tab] = 1;
                        }
                        foreach ($tabs as $tab) {
                            if (!isset($tab['collapse'])) {
                                if (!in_array($tab['slug'], $_values[$setting])) {
                                    $tab_settings[$tab['slug']] = 0;
                                }
                            } else {
                                foreach ($tab['children'] as $tab_dropdown) {
                                    if (!in_array($tab_dropdown['slug'], $_values[$setting])) {
                                        $tab_settings[$tab_dropdown['slug']] = 0;
                                    }
                                }
                            }
                        }
                        $value_setting = serialize($tab_settings);
                    }
                    $this->db->insert(db_prefix() . 'patrimoine_settings', [
                        'patrimoine_id' => $insert_id,
                        'name'       => $setting,
                        'value'      => $value_setting,
                    ]);
                }
            } else {
                foreach ($original_settings as $setting) {
                    $value_setting = 0;
                    $this->db->insert(db_prefix() . 'patrimoine_settings', [
                        'patrimoine_id' => $insert_id,
                        'name'       => $setting,
                        'value'      => $value_setting,
                    ]);
                }
            }

            if ($items_to_convert && is_numeric($estimate_id)) {
                $this->convert_estimate_items_to_tasks($insert_id, $items_to_convert, $items_assignees, $data, $patrimoine_settings);

                $this->db->where('id', $estimate_id);
                $this->db->set('patrimoine_id', $insert_id);
                $this->db->update(db_prefix() . 'estimates');
            }

            $this->log_activity($insert_id, 'patrimoine_activity_created');

            if ($send_created_email == true) {
                $this->send_patrimoine_customer_email($insert_id, 'patrimoine_created_to_customer');
            }

            if ($send_patrimoine_marked_as_finished_email_to_contacts == true) {
                $this->send_patrimoine_customer_email($insert_id, 'patrimoine_marked_as_finished_to_customer');
            }

            hooks()->do_action('after_add_patrimoine', $insert_id);

            log_activity('New Patrimoine Created [ID: ' . $insert_id . ']');

            return $insert_id;
        }

        return false;
    }

    public function update($data, $id)
    {
        $this->db->select('status');
        $this->db->where('id', $id);
        $old_status = $this->db->get(db_prefix() . 'patrimoines')->row()->status;

        $send_created_email = false;
        if (isset($data['send_created_email'])) {
            unset($data['send_created_email']);
            $send_created_email = true;
        }

        $send_patrimoine_marked_as_finished_email_to_contacts = false;
        if (isset($data['patrimoine_marked_as_finished_email_to_contacts'])) {
            unset($data['patrimoine_marked_as_finished_email_to_contacts']);
            $send_patrimoine_marked_as_finished_email_to_contacts = true;
        }

        $original_patrimoine = $this->get($id);

        if (isset($data['notify_patrimoine_members_status_change'])) {
            $notify_patrimoine_members_status_change = true;
            unset($data['notify_patrimoine_members_status_change']);
        }

        // update patremoins info // 
        $patr_info = [];
        $patr_info_attributes = ['info_id', 'patr_me_firstname', 'patr_me_lastname', 'patr_me_birthday','patr_me_profession','patr_me_depart','patr_me_nss', 'patr_me_address', 'patr_me_tele_perso', 'patr_me_tele_m', 'patr_me_tele_mme', 'patr_me_email_one', 'patr_me_email_two', 'patr_partner_firstname', 'patr_partner_lastname', 'patr_partner_birthday', 'patr_partner_profession', 'patr_partner_depart', 'patr_partner_nss', 'patr_partner_precedent_marriage_date', 'patr_partner_regime', 'patr_partner_marriage_date', 'patr_partner_marriage_duration', 'patr_partner_situtation', 'patr_partner_finance', 'patr_partner_donation', 'patrimoineid'];
        
        foreach($patr_info_attributes as $patr) {
            if(isset($data[$patr])) {
                $patr_info[$patr] = $data[$patr];
                unset($data[$patr]);
            }
        }

        $patr_info['patrimoineid'] = $id;
        
        /*** update information */
        if(isset($patr_info['info_id']) && !empty($patr_info['info_id'])) {
            $this->patrimoines_info_model->update($patr_info);
        } else {
            $this->patrimoines_info_model->add($patr_info);
        }
        /*****./END::save information */

        $affectedRows = 0;
        if (!isset($data['settings'])) {
            $this->db->where('patrimoine_id', $id);
            $this->db->update(db_prefix() . 'patrimoine_settings', [
                'value' => 0,
            ]);
            if ($this->db->affected_rows() > 0) {
                $affectedRows++;
            }
        } else {
            $_settings = [];
            $_values   = [];

            foreach ($data['settings'] as $name => $val) {
                array_push($_settings, $name);
                $_values[$name] = $val;
            }

            unset($data['settings']);
            $original_settings = $this->get_patrimoine_settings($id);

            foreach ($original_settings as $setting) {
                if ($setting['name'] != 'available_features') {
                    if (in_array($setting['name'], $_settings)) {
                        $value_setting = 1;
                    } else {
                        $value_setting = 0;
                    }
                } else {
                    $tabs         = get_patrimoine_tabs_admin();
                    $tab_settings = [];
                    foreach ($_values[$setting['name']] as $tab) {
                        $tab_settings[$tab] = 1;
                    }
                    foreach ($tabs as $tab) {
                        if (!isset($tab['collapse'])) {
                            if (!in_array($tab['slug'], $_values[$setting['name']])) {
                                $tab_settings[$tab['slug']] = 0;
                            }
                        } else {
                            foreach ($tab['children'] as $tab_dropdown) {
                                if (!in_array($tab_dropdown['slug'], $_values[$setting['name']])) {
                                    $tab_settings[$tab_dropdown['slug']] = 0;
                                }
                            }
                        }
                    }
                    $value_setting = serialize($tab_settings);
                }

                $this->db->where('patrimoine_id', $id);
                $this->db->where('name', $setting['name']);
                $this->db->update(db_prefix() . 'patrimoine_settings', [
                    'value' => $value_setting,
                ]);

                if ($this->db->affected_rows() > 0) {
                    $affectedRows++;
                }
            }
        }

        $data['patrimoine_cost']    = !empty($data['patrimoine_cost']) ? $data['patrimoine_cost'] : null;
        $data['estimated_hours'] = !empty($data['estimated_hours']) ? $data['estimated_hours'] : null;

        if ($old_status == 4 && $data['status'] != 4) {
            $data['date_finished'] = null;
        } elseif (isset($data['date_finished'])) {
            $data['date_finished'] = to_sql_date($data['date_finished'], true);
        }

        if (isset($data['progress_from_tasks'])) {
            $data['progress_from_tasks'] = 1;
        } else {
            $data['progress_from_tasks'] = 0;
        }

        if (isset($data['custom_fields'])) {
            $custom_fields = $data['custom_fields'];
            if (handle_custom_fields_post($id, $custom_fields)) {
                $affectedRows++;
            }
            unset($data['custom_fields']);
        }

        if (!empty($data['deadline'])) {
            $data['deadline'] = to_sql_date($data['deadline']);
        } else {
            $data['deadline'] = null;
        }

        $data['start_date'] = to_sql_date($data['start_date']);
        if ($data['billing_type'] == 1) {
            $data['patrimoine_rate_per_hour'] = 0;
        } elseif ($data['billing_type'] == 2) {
            $data['patrimoine_cost'] = 0;
        } else {
            $data['patrimoine_rate_per_hour'] = 0;
            $data['patrimoine_cost']          = 0;
        }
        if (isset($data['patrimoine_members'])) {
            $patrimoine_members = $data['patrimoine_members'];
            unset($data['patrimoine_members']);
        }
        $_pm = [];
        if (isset($patrimoine_members)) {
            $_pm['patrimoine_members'] = $patrimoine_members;
        }
        if ($this->add_edit_members($_pm, $id)) {
            $affectedRows++;
        }
        if (isset($data['mark_all_tasks_as_completed'])) {
            $mark_all_tasks_as_completed = true;
            unset($data['mark_all_tasks_as_completed']);
        }

        if (isset($data['tags'])) {
            if (handle_tags_save($data['tags'], $id, 'patrimoine')) {
                $affectedRows++;
            }
            unset($data['tags']);
        }

        if (isset($data['cancel_recurring_tasks'])) {
            unset($data['cancel_recurring_tasks']);
            $this->cancel_recurring_tasks($id);
        }

        if (isset($data['contact_notification'])) {
            if ($data['contact_notification'] == 2) {
                $data['notify_contacts'] = serialize($data['notify_contacts']);
            } else {
                $data['notify_contacts'] = serialize([]);
            }
        }

        $data = hooks()->apply_filters('before_update_patrimoine', $data, $id);

        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'patrimoines', $data);

        if ($this->db->affected_rows() > 0) {
            if (isset($mark_all_tasks_as_completed)) {
                $this->_mark_all_patrimoine_tasks_as_completed($id);
            }
            $affectedRows++;
        }

        if ($send_created_email == true) {
            if ($this->send_patrimoine_customer_email($id, 'patrimoine_created_to_customer')) {
                $affectedRows++;
            }
        }

        if ($send_patrimoine_marked_as_finished_email_to_contacts == true) {
            if ($this->send_patrimoine_customer_email($id, 'patrimoine_marked_as_finished_to_customer')) {
                $affectedRows++;
            }
        }
        if ($affectedRows > 0) {
            $this->log_activity($id, 'patrimoine_activity_updated');
            log_activity('Patrimoine Updated [ID: ' . $id . ']');

            if ($original_patrimoine->status != $data['status']) {
                hooks()->do_action('patrimoine_status_changed', [
                    'status'     => $data['status'],
                    'patrimoine_id' => $id,
                ]);
                // Give space this log to be on top
                sleep(1);
                if ($data['status'] == 4) {
                    $this->log_activity($id, 'patrimoine_marked_as_finished');
                    $this->db->where('id', $id);
                    $this->db->update(db_prefix() . 'patrimoines', ['date_finished' => date('Y-m-d H:i:s')]);
                } else {
                    $this->log_activity($id, 'patrimoine_status_updated', '<b><lang>patrimoine_status_' . $data['status'] . '</lang></b>');
                }

                if (isset($notify_patrimoine_members_status_change)) {
                    $this->_notify_patrimoine_members_status_change($id, $original_patrimoine->status, $data['status']);
                }
            }
            hooks()->do_action('after_update_patrimoine', $id);

            return true;
        }

        return false;
    }

    /**
     * Simplified function to send non complicated email templates for patrimoine contacts
     * @param  mixed $id patrimoine id
     * @return boolean
     */
    public function send_patrimoine_customer_email($id, $template)
    {
        $this->db->select('clientid,contact_notification,notify_contacts');
        $this->db->where('id', $id);
        $patrimoine = $this->db->get(db_prefix() . 'patrimoines')->row();

        $sent     = false;

        if ($patrimoine->contact_notification == 1) {
            $contacts = $this->clients_model->get_contacts($patrimoine->clientid, ['active' => 1, 'patrimoine_emails' => 1]);
        } elseif ($patrimoine->contact_notification == 2) {
            $contacts = [];
            $contactIds = unserialize($patrimoine->notify_contacts);
            if (count($contactIds) > 0) {
                $this->db->where_in('id', $contactIds);
                $this->db->where('active', 1);
                $contacts = $this->db->get(db_prefix() . 'contacts')->result_array();
            }
        } else {
            $contacts = [];
        }

        foreach ($contacts as $contact) {
            if (send_mail_template($template, $id, $patrimoine->clientid, $contact)) {
                $sent = true;
            }
        }

        return $sent;
    }

    public function mark_as($data)
    {
        $this->db->select('status');
        $this->db->where('id', $data['patrimoine_id']);
        $old_status = $this->db->get(db_prefix() . 'patrimoines')->row()->status;

        $this->db->where('id', $data['patrimoine_id']);
        $this->db->update(db_prefix() . 'patrimoines', [
            'status' => $data['status_id'],
        ]);
        if ($this->db->affected_rows() > 0) {
            hooks()->do_action('patrimoine_status_changed', [
                'status'     => $data['status_id'],
                'patrimoine_id' => $data['patrimoine_id'],
            ]);


            if ($data['status_id'] == 4) {
                $this->log_activity($data['patrimoine_id'], 'patrimoine_marked_as_finished');
                $this->db->where('id', $data['patrimoine_id']);
                $this->db->update(db_prefix() . 'patrimoines', ['date_finished' => date('Y-m-d H:i:s')]);
            } else {
                $this->log_activity($data['patrimoine_id'], 'patrimoine_status_updated', '<b><lang>patrimoine_status_' . $data['status_id'] . '</lang></b>');
                if ($old_status == 4) {
                    $this->db->update(db_prefix() . 'patrimoines', ['date_finished' => null]);
                }
            }

            if ($data['notify_patrimoine_members_status_change'] == 1) {
                $this->_notify_patrimoine_members_status_change($data['patrimoine_id'], $old_status, $data['status_id']);
            }

            if ($data['mark_all_tasks_as_completed'] == 1) {
                $this->_mark_all_patrimoine_tasks_as_completed($data['patrimoine_id']);
            }

            if (isset($data['cancel_recurring_tasks']) && $data['cancel_recurring_tasks'] == 'true') {
                $this->cancel_recurring_tasks($data['patrimoine_id']);
            }

            if (
                isset($data['send_patrimoine_marked_as_finished_email_to_contacts'])
                && $data['send_patrimoine_marked_as_finished_email_to_contacts'] == 1
            ) {
                $this->send_patrimoine_customer_email($data['patrimoine_id'], 'patrimoine_marked_as_finished_to_customer');
            }

            return true;
        }


        return false;
    }

    private function _notify_patrimoine_members_status_change($id, $old_status, $new_status)
    {
        $members       = $this->get_patrimoine_members($id);
        $notifiedUsers = [];
        foreach ($members as $member) {
            if ($member['staff_id'] != get_staff_user_id()) {
                $notified = add_notification([
                    'fromuserid'      => get_staff_user_id(),
                    'description'     => 'not_patrimoine_status_updated',
                    'link'            => 'wealth_management/view/' . $id,
                    'touserid'        => $member['staff_id'],
                    'additional_data' => serialize([
                        '<lang>patrimoine_status_' . $old_status . '</lang>',
                        '<lang>patrimoine_status_' . $new_status . '</lang>',
                    ]),
                ]);
                if ($notified) {
                    array_push($notifiedUsers, $member['staff_id']);
                }
            }
        }
        pusher_trigger_notification($notifiedUsers);
    }

    private function _mark_all_patrimoine_tasks_as_completed($id)
    {
        $this->db->where('rel_type', 'patrimoine');
        $this->db->where('rel_id', $id);
        $this->db->update(db_prefix() . 'tasks', [
            'status'       => 5,
            'datefinished' => date('Y-m-d H:i:s'),
        ]);
        $tasks = $this->get_tasks($id);
        foreach ($tasks as $task) {
            $this->db->where('task_id', $task['id']);
            $this->db->where('end_time IS NULL');
            $this->db->update(db_prefix() . 'taskstimers', [
                'end_time' => time(),
            ]);
        }
        $this->log_activity($id, 'patrimoine_activity_marked_all_tasks_as_complete');
    }

    public function add_edit_members($data, $id)
    {
        $affectedRows = 0;
        if (isset($data['patrimoine_members'])) {
            $patrimoine_members = $data['patrimoine_members'];
        }

        $new_patrimoine_members_to_receive_email = [];
        $this->db->select('name,clientid');
        $this->db->where('id', $id);
        $patrimoine      = $this->db->get(db_prefix() . 'patrimoines')->row();
        $patrimoine_name = $patrimoine->name;
        $client_id    = $patrimoine->clientid;

        $patrimoine_members_in = $this->get_patrimoine_members($id);
        if (sizeof($patrimoine_members_in) > 0) {
            foreach ($patrimoine_members_in as $patrimoine_member) {
                if (isset($patrimoine_members)) {
                    if (!in_array($patrimoine_member['staff_id'], $patrimoine_members)) {
                        $this->db->where('patrimoine_id', $id);
                        $this->db->where('staff_id', $patrimoine_member['staff_id']);
                        $this->db->delete(db_prefix() . 'patrimoine_members');
                        if ($this->db->affected_rows() > 0) {
                            $this->db->where('staff_id', $patrimoine_member['staff_id']);
                            $this->db->where('patrimoine_id', $id);
                            $this->db->delete(db_prefix() . 'pinned_patrimoines');

                            $this->log_activity($id, 'patrimoine_activity_removed_team_member', get_staff_full_name($patrimoine_member['staff_id']));
                            $affectedRows++;
                        }
                    }
                } else {
                    $this->db->where('patrimoine_id', $id);
                    $this->db->delete(db_prefix() . 'patrimoine_members');
                    if ($this->db->affected_rows() > 0) {
                        $affectedRows++;
                    }
                }
            }
            if (isset($patrimoine_members)) {
                $notifiedUsers = [];
                foreach ($patrimoine_members as $staff_id) {
                    $this->db->where('patrimoine_id', $id);
                    $this->db->where('staff_id', $staff_id);
                    $_exists = $this->db->get(db_prefix() . 'patrimoine_members')->row();
                    if (!$_exists) {
                        if (empty($staff_id)) {
                            continue;
                        }
                        $this->db->insert(db_prefix() . 'patrimoine_members', [
                            'patrimoine_id' => $id,
                            'staff_id'   => $staff_id,
                        ]);
                        if ($this->db->affected_rows() > 0) {
                            if ($staff_id != get_staff_user_id()) {
                                $notified = add_notification([
                                    'fromuserid'      => get_staff_user_id(),
                                    'description'     => 'not_staff_added_as_patrimoine_member',
                                    'link'            => 'wealth_management/view/' . $id,
                                    'touserid'        => $staff_id,
                                    'additional_data' => serialize([
                                        $patrimoine_name,
                                    ]),
                                ]);
                                array_push($new_patrimoine_members_to_receive_email, $staff_id);
                                if ($notified) {
                                    array_push($notifiedUsers, $staff_id);
                                }
                            }


                            $this->log_activity($id, 'patrimoine_activity_added_team_member', get_staff_full_name($staff_id));
                            $affectedRows++;
                        }
                    }
                }
                pusher_trigger_notification($notifiedUsers);
            }
        } else {
            if (isset($patrimoine_members)) {
                $notifiedUsers = [];
                foreach ($patrimoine_members as $staff_id) {
                    if (empty($staff_id)) {
                        continue;
                    }
                    $this->db->insert(db_prefix() . 'patrimoine_members', [
                        'patrimoine_id' => $id,
                        'staff_id'   => $staff_id,
                    ]);
                    if ($this->db->affected_rows() > 0) {
                        if ($staff_id != get_staff_user_id()) {
                            $notified = add_notification([
                                'fromuserid'      => get_staff_user_id(),
                                'description'     => 'not_staff_added_as_patrimoine_member',
                                'link'            => 'wealth_management/view/' . $id,
                                'touserid'        => $staff_id,
                                'additional_data' => serialize([
                                    $patrimoine_name,
                                ]),
                            ]);
                            array_push($new_patrimoine_members_to_receive_email, $staff_id);
                            if ($notifiedUsers) {
                                array_push($notifiedUsers, $staff_id);
                            }
                        }
                        $this->log_activity($id, 'patrimoine_activity_added_team_member', get_staff_full_name($staff_id));
                        $affectedRows++;
                    }
                }
                pusher_trigger_notification($notifiedUsers);
            }
        }

        if (count($new_patrimoine_members_to_receive_email) > 0) {
            $all_members = $this->get_patrimoine_members($id);
            foreach ($all_members as $data) {
                if (in_array($data['staff_id'], $new_patrimoine_members_to_receive_email)) {
                    send_mail_template('patrimoine_staff_added_as_member', $data, $id, $client_id);
                }
            }
        }
        if ($affectedRows > 0) {
            return true;
        }

        return false;
    }

    public function is_member($patrimoine_id, $staff_id = '')
    {
        if (!is_numeric($staff_id)) {
            $staff_id = get_staff_user_id();
        }
        $member = total_rows(db_prefix() . 'patrimoine_members', [
            'staff_id'   => $staff_id,
            'patrimoine_id' => $patrimoine_id,
        ]);
        if ($member > 0) {
            return true;
        }

        return false;
    }

    public function get_patrimoines_for_ticket($client_id)
    {
        return $this->get('', [
            'clientid' => $client_id,
        ]);
    }

    public function get_patrimoine_settings($patrimoine_id)
    {
        $this->db->where('patrimoine_id', $patrimoine_id);

        return $this->db->get(db_prefix() . 'patrimoine_settings')->result_array();
    }

    public function get_patrimoine_members($id)
    {
        $this->db->select('email,patrimoine_id,staff_id');
        $this->db->join(db_prefix() . 'staff', db_prefix() . 'staff.staffid=' . db_prefix() . 'patrimoine_members.staff_id');
        $this->db->where('patrimoine_id', $id);

        return $this->db->get(db_prefix() . 'patrimoine_members')->result_array();
    }

    public function remove_team_member($patrimoine_id, $staff_id)
    {
        $this->db->where('patrimoine_id', $patrimoine_id);
        $this->db->where('staff_id', $staff_id);
        $this->db->delete(db_prefix() . 'patrimoine_members');
        if ($this->db->affected_rows() > 0) {

            // Remove member from tasks where is assigned
            $this->db->where('staffid', $staff_id);
            $this->db->where('taskid IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id="' . $this->db->escape_str($patrimoine_id) . '")');
            $this->db->delete(db_prefix() . 'task_assigned');

            $this->log_activity($patrimoine_id, 'patrimoine_activity_removed_team_member', get_staff_full_name($staff_id));

            return true;
        }

        return false;
    }

    public function get_timesheets($patrimoine_id, $tasks_ids = [])
    {
        if (count($tasks_ids) == 0) {
            $tasks     = $this->get_tasks($patrimoine_id);
            $tasks_ids = [];
            foreach ($tasks as $task) {
                array_push($tasks_ids, $task['id']);
            }
        }
        if (count($tasks_ids) > 0) {
            $this->db->where('task_id IN(' . implode(', ', $tasks_ids) . ')');
            $timesheets = $this->db->get(db_prefix() . 'taskstimers')->result_array();
            $i          = 0;
            foreach ($timesheets as $t) {
                $task                         = $this->tasks_model->get($t['task_id']);
                $timesheets[$i]['task_data']  = $task;
                $timesheets[$i]['staff_name'] = get_staff_full_name($t['staff_id']);
                if (!is_null($t['end_time'])) {
                    $timesheets[$i]['total_spent'] = $t['end_time'] - $t['start_time'];
                } else {
                    $timesheets[$i]['total_spent'] = time() - $t['start_time'];
                }
                $i++;
            }

            return $timesheets;
        }

        return [];
    }

    public function get_discussion($id, $patrimoine_id = '')
    {
        if ($patrimoine_id != '') {
            $this->db->where('patrimoine_id', $patrimoine_id);
        }
        $this->db->where('id', $id);
        if (is_client_logged_in()) {
            $this->db->where('show_to_customer', 1);
            $this->db->where('patrimoine_id IN (SELECT id FROM ' . db_prefix() . 'patrimoines WHERE clientid=' . get_client_user_id() . ')');
        }
        $discussion = $this->db->get(db_prefix() . 'patrimoinediscussions')->row();
        if ($discussion) {
            return $discussion;
        }

        return false;
    }

    public function get_discussion_comment($id)
    {
        $this->db->where('id', $id);
        $comment = $this->db->get(db_prefix() . 'patrimoinediscussioncomments')->row();
        if ($comment->contact_id != 0) {
            if (is_client_logged_in()) {
                if ($comment->contact_id == get_contact_user_id()) {
                    $comment->created_by_current_user = true;
                } else {
                    $comment->created_by_current_user = false;
                }
            } else {
                $comment->created_by_current_user = false;
            }
            $comment->profile_picture_url = contact_profile_image_url($comment->contact_id);
        } else {
            if (is_client_logged_in()) {
                $comment->created_by_current_user = false;
            } else {
                if (is_staff_logged_in()) {
                    if ($comment->staff_id == get_staff_user_id()) {
                        $comment->created_by_current_user = true;
                    } else {
                        $comment->created_by_current_user = false;
                    }
                } else {
                    $comment->created_by_current_user = false;
                }
            }
            if (is_admin($comment->staff_id)) {
                $comment->created_by_admin = true;
            } else {
                $comment->created_by_admin = false;
            }
            $comment->profile_picture_url = staff_profile_image_url($comment->staff_id);
        }
        $comment->created = (strtotime($comment->created) * 1000);
        if (!empty($comment->modified)) {
            $comment->modified = (strtotime($comment->modified) * 1000);
        }
        if (!is_null($comment->file_name)) {
            $comment->file_url = site_url('uploads/discussions/' . $comment->discussion_id . '/' . $comment->file_name);
        }

        return $comment;
    }

    public function get_discussion_comments($id, $type)
    {
        $this->db->where('discussion_id', $id);
        $this->db->where('discussion_type', $type);
        $comments             = $this->db->get(db_prefix() . 'patrimoinediscussioncomments')->result_array();
        $i                    = 0;
        $allCommentsIDS       = [];
        $allCommentsParentIDS = [];
        foreach ($comments as $comment) {
            $allCommentsIDS[] = $comment['id'];
            if (!empty($comment['parent'])) {
                $allCommentsParentIDS[] = $comment['parent'];
            }

            if ($comment['contact_id'] != 0) {
                if (is_client_logged_in()) {
                    if ($comment['contact_id'] == get_contact_user_id()) {
                        $comments[$i]['created_by_current_user'] = true;
                    } else {
                        $comments[$i]['created_by_current_user'] = false;
                    }
                } else {
                    $comments[$i]['created_by_current_user'] = false;
                }
                $comments[$i]['profile_picture_url'] = contact_profile_image_url($comment['contact_id']);
            } else {
                if (is_client_logged_in()) {
                    $comments[$i]['created_by_current_user'] = false;
                } else {
                    if (is_staff_logged_in()) {
                        if ($comment['staff_id'] == get_staff_user_id()) {
                            $comments[$i]['created_by_current_user'] = true;
                        } else {
                            $comments[$i]['created_by_current_user'] = false;
                        }
                    } else {
                        $comments[$i]['created_by_current_user'] = false;
                    }
                }
                if (is_admin($comment['staff_id'])) {
                    $comments[$i]['created_by_admin'] = true;
                } else {
                    $comments[$i]['created_by_admin'] = false;
                }
                $comments[$i]['profile_picture_url'] = staff_profile_image_url($comment['staff_id']);
            }
            if (!is_null($comment['file_name'])) {
                $comments[$i]['file_url'] = site_url('uploads/discussions/' . $id . '/' . $comment['file_name']);
            }
            $comments[$i]['created'] = (strtotime($comment['created']) * 1000);
            if (!empty($comment['modified'])) {
                $comments[$i]['modified'] = (strtotime($comment['modified']) * 1000);
            }
            $i++;
        }

        // Ticket #5471
        foreach ($allCommentsParentIDS as $parent_id) {
            if (!in_array($parent_id, $allCommentsIDS)) {
                foreach ($comments as $key => $comment) {
                    if ($comment['parent'] == $parent_id) {
                        $comments[$key]['parent'] = null;
                    }
                }
            }
        }

        return $comments;
    }

    public function get_discussions($patrimoine_id)
    {
        $this->db->where('patrimoine_id', $patrimoine_id);
        if (is_client_logged_in()) {
            $this->db->where('show_to_customer', 1);
        }
        $discussions = $this->db->get(db_prefix() . 'patrimoinediscussions')->result_array();
        $i           = 0;
        foreach ($discussions as $discussion) {
            $discussions[$i]['total_comments'] = total_rows(db_prefix() . 'patrimoinediscussioncomments', [
                'discussion_id'   => $discussion['id'],
                'discussion_type' => 'regular',
            ]);
            $i++;
        }

        return $discussions;
    }

    public function add_discussion_comment($data, $discussion_id, $type)
    {
        $discussion               = $this->get_discussion($discussion_id);
        $_data['discussion_id']   = $discussion_id;
        $_data['discussion_type'] = $type;
        if (isset($data['content'])) {
            $_data['content'] = $data['content'];
        }
        if (isset($data['parent']) && $data['parent'] != null) {
            $_data['parent'] = $data['parent'];
        }
        if (is_client_logged_in()) {
            $_data['contact_id'] = get_contact_user_id();
            $_data['fullname']   = get_contact_full_name($_data['contact_id']);
            $_data['staff_id']   = 0;
        } else {
            $_data['contact_id'] = 0;
            $_data['staff_id']   = get_staff_user_id();
            $_data['fullname']   = get_staff_full_name($_data['staff_id']);
        }
        $_data = handle_patrimoine_discussion_comment_attachments($discussion_id, $data, $_data);

        $_data['created'] = date('Y-m-d H:i:s');

        $_data = hooks()->apply_filters('before_add_patrimoine_discussion_comment', $_data, $discussion_id);

        $this->db->insert(db_prefix() . 'patrimoinediscussioncomments', $_data);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            if ($type == 'regular') {
                $discussion = $this->get_discussion($discussion_id);
                $not_link   = 'wealth_management/view/' . $discussion->patrimoine_id . '?group=patrimoine_discussions&discussion_id=' . $discussion_id;
            } else {
                $discussion                   = $this->get_file($discussion_id);
                $not_link                     = 'wealth_management/view/' . $discussion->patrimoine_id . '?group=patrimoine_files&file_id=' . $discussion_id;
                $discussion->show_to_customer = $discussion->visible_to_customer;
            }

            $emailTemplateData = [
                'staff' => [
                    'discussion_id'         => $discussion_id,
                    'discussion_comment_id' => $insert_id,
                    'discussion_type'       => $type,
                ],
                'customers' => [
                    'customer_template'     => true,
                    'discussion_id'         => $discussion_id,
                    'discussion_comment_id' => $insert_id,
                    'discussion_type'       => $type,
                ],
            ];

            if (isset($_data['file_name'])) {
                $emailTemplateData['attachments'] = [
                    [
                        'attachment' => PROJECT_DISCUSSION_ATTACHMENT_FOLDER . $discussion_id . '/' . $_data['file_name'],
                        'filename'   => $_data['file_name'],
                        'type'       => $_data['file_mime_type'],
                        'read'       => true,
                    ],
                ];
            }

            $notification_data = [
                'description' => 'not_commented_on_patrimoine_discussion',
                'link'        => $not_link,
            ];

            if (is_client_logged_in()) {
                $notification_data['fromclientid'] = get_contact_user_id();
            } else {
                $notification_data['fromuserid'] = get_staff_user_id();
            }
            $notifiedUsers = [];

            $regex = "/data\-mention\-id\=\"(\d+)\"/";
            if (isset($data['content']) && preg_match_all($regex, $data['content'], $mentionedStaff, PREG_PATTERN_ORDER)) {
                $members = array_unique($mentionedStaff[1], SORT_NUMERIC);
                $this->send_patrimoine_email_mentioned_users($discussion->patrimoine_id, 'patrimoine_new_discussion_comment_to_staff', $members, $emailTemplateData);

                foreach ($members as $memberId) {
                    if ($memberId == get_staff_user_id() && !is_client_logged_in()) {
                        continue;
                    }

                    $notification_data['touserid'] = $memberId;
                    if (add_notification($notification_data)) {
                        array_push($notifiedUsers, $memberId);
                    }
                }
            } else {
                $this->send_patrimoine_email_template($discussion->patrimoine_id, 'patrimoine_new_discussion_comment_to_staff', 'patrimoine_new_discussion_comment_to_customer', $discussion->show_to_customer, $emailTemplateData);

                $members = $this->get_patrimoine_members($discussion->patrimoine_id);
                foreach ($members as $member) {
                    if ($member['staff_id'] == get_staff_user_id() && !is_client_logged_in()) {
                        continue;
                    }
                    $notification_data['touserid'] = $member['staff_id'];
                    if (add_notification($notification_data)) {
                        array_push($notifiedUsers, $member['staff_id']);
                    }
                }
            }

            $this->log_activity($discussion->patrimoine_id, 'patrimoine_activity_commented_on_discussion', $discussion->subject, $discussion->show_to_customer);

            pusher_trigger_notification($notifiedUsers);

            $this->_update_discussion_last_activity($discussion_id, $type);

            hooks()->do_action('after_add_discussion_comment', $insert_id);

            return $this->get_discussion_comment($insert_id);
        }

        return false;
    }

    public function update_discussion_comment($data)
    {
        $comment = $this->get_discussion_comment($data['id']);
        $this->db->where('id', $data['id']);
        $this->db->update(db_prefix() . 'patrimoinediscussioncomments', [
            'modified' => date('Y-m-d H:i:s'),
            'content'  => $data['content'],
        ]);
        if ($this->db->affected_rows() > 0) {
            $this->_update_discussion_last_activity($comment->discussion_id, $comment->discussion_type);
        }

        return $this->get_discussion_comment($data['id']);
    }

    public function delete_discussion_comment($id, $logActivity = true)
    {
        $comment = $this->get_discussion_comment($id);
        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoinediscussioncomments');
        if ($this->db->affected_rows() > 0) {
            $this->delete_discussion_comment_attachment($comment->file_name, $comment->discussion_id);
            if ($logActivity) {
                $additional_data = '';
                if ($comment->discussion_type == 'regular') {
                    $discussion = $this->get_discussion($comment->discussion_id);
                    $not        = 'patrimoine_activity_deleted_discussion_comment';
                    $additional_data .= $discussion->subject . '<br />' . $comment->content;
                } else {
                    $discussion = $this->get_file($comment->discussion_id);
                    $not        = 'patrimoine_activity_deleted_file_discussion_comment';
                    $additional_data .= $discussion->subject . '<br />' . $comment->content;
                }

                if (!is_null($comment->file_name)) {
                    $additional_data .= $comment->file_name;
                }

                $this->log_activity($discussion->patrimoine_id, $not, $additional_data);
            }
        }

        $this->db->where('parent', $id);
        $this->db->update(db_prefix() . 'patrimoinediscussioncomments', [
            'parent' => null,
        ]);

        if ($this->db->affected_rows() > 0 && $logActivity) {
            $this->_update_discussion_last_activity($comment->discussion_id, $comment->discussion_type);
        }

        return true;
    }

    public function delete_discussion_comment_attachment($file_name, $discussion_id)
    {
        $path = PROJECT_DISCUSSION_ATTACHMENT_FOLDER . $discussion_id;
        if (!is_null($file_name)) {
            if (file_exists($path . '/' . $file_name)) {
                unlink($path . '/' . $file_name);
            }
        }
        if (is_dir($path)) {
            // Check if no attachments left, so we can delete the folder also
            $other_attachments = list_files($path);
            if (count($other_attachments) == 0) {
                delete_dir($path);
            }
        }
    }

    public function add_discussion($data)
    {
        if (is_client_logged_in()) {
            $data['contact_id']       = get_contact_user_id();
            $data['staff_id']         = 0;
            $data['show_to_customer'] = 1;
        } else {
            $data['staff_id']   = get_staff_user_id();
            $data['contact_id'] = 0;
            if (isset($data['show_to_customer'])) {
                $data['show_to_customer'] = 1;
            } else {
                $data['show_to_customer'] = 0;
            }
        }
        $data['datecreated'] = date('Y-m-d H:i:s');
        $data['description'] = nl2br($data['description']);
        $this->db->insert(db_prefix() . 'patrimoinediscussions', $data);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            $members           = $this->get_patrimoine_members($data['patrimoine_id']);
            $notification_data = [
                'description' => 'not_created_new_patrimoine_discussion',
                'link'        => 'wealth_management/view/' . $data['patrimoine_id'] . '?group=patrimoine_discussions&discussion_id=' . $insert_id,
            ];

            if (is_client_logged_in()) {
                $notification_data['fromclientid'] = get_contact_user_id();
            } else {
                $notification_data['fromuserid'] = get_staff_user_id();
            }

            $notifiedUsers = [];
            foreach ($members as $member) {
                if ($member['staff_id'] == get_staff_user_id() && !is_client_logged_in()) {
                    continue;
                }
                $notification_data['touserid'] = $member['staff_id'];
                if (add_notification($notification_data)) {
                    array_push($notifiedUsers, $member['staff_id']);
                }
            }
            pusher_trigger_notification($notifiedUsers);
            $this->send_patrimoine_email_template($data['patrimoine_id'], 'patrimoine_discussion_created_to_staff', 'patrimoine_discussion_created_to_customer', $data['show_to_customer'], [
                'staff' => [
                    'discussion_id'   => $insert_id,
                    'discussion_type' => 'regular',
                ],
                'customers' => [
                    'customer_template' => true,
                    'discussion_id'     => $insert_id,
                    'discussion_type'   => 'regular',
                ],
            ]);
            $this->log_activity($data['patrimoine_id'], 'patrimoine_activity_created_discussion', $data['subject'], $data['show_to_customer']);

            return $insert_id;
        }

        return false;
    }

    public function edit_discussion($data, $id)
    {
        $this->db->where('id', $id);
        if (isset($data['show_to_customer'])) {
            $data['show_to_customer'] = 1;
        } else {
            $data['show_to_customer'] = 0;
        }
        $data['description'] = nl2br($data['description']);
        $this->db->update(db_prefix() . 'patrimoinediscussions', $data);
        if ($this->db->affected_rows() > 0) {
            $this->log_activity($data['patrimoine_id'], 'patrimoine_activity_updated_discussion', $data['subject'], $data['show_to_customer']);

            return true;
        }

        return false;
    }

    public function delete_discussion($id, $logActivity = true)
    {
        $discussion = $this->get_discussion($id);
        $this->db->where('id', $id);
        $this->db->delete(db_prefix() . 'patrimoinediscussions');
        if ($this->db->affected_rows() > 0) {
            if ($logActivity) {
                $this->log_activity($discussion->patrimoine_id, 'patrimoine_activity_deleted_discussion', $discussion->subject, $discussion->show_to_customer);
            }
            $this->_delete_discussion_comments($id, 'regular');

            return true;
        }

        return false;
    }

    public function copy($patrimoine_id, $data)
    {
        $_new_data = [];
        $patrimoine   = $this->get($patrimoine_id);
        $settings  = $this->get_patrimoine_settings($patrimoine_id);
        $fields    = $this->db->list_fields(db_prefix() . 'patrimoines');

        foreach ($fields as $field) {
            if (isset($patrimoine->$field)) {
                $_new_data[$field] = $patrimoine->$field;
            }
        }

        unset($_new_data['id']);
        $_new_data['clientid'] = $data['clientid_copy_patrimoine'];
        unset($_new_data['clientid_copy_patrimoine']);

        $_new_data['start_date'] = to_sql_date($data['start_date']);

        if ($_new_data['start_date'] > date('Y-m-d')) {
            $_new_data['status'] = 1;
        } else {
            $_new_data['status'] = 2;
        }
        if ($data['deadline']) {
            $_new_data['deadline'] = to_sql_date($data['deadline']);
        } else {
            $_new_data['deadline'] = null;
        }

        $_new_data['patrimoine_created'] = date('Y-m-d H:i:s');
        $_new_data['addedfrom']       = get_staff_user_id();

        $_new_data['date_finished'] = null;

        if ($patrimoine->contact_notification == 2) {
            $contacts = $this->clients_model->get_contacts($_new_data['clientid'], ['active' => 1, 'patrimoine_emails' => 1]);
            $_new_data['notify_contacts'] = serialize(array_column($contacts, 'id'));
        }

        $this->db->insert(db_prefix() . 'patrimoines', $_new_data);
        $id = $this->db->insert_id();
        if ($id) {
            $tags = get_tags_in($patrimoine_id, 'patrimoine');
            handle_tags_save($tags, $id, 'patrimoine');

            foreach ($settings as $setting) {
                $this->db->insert(db_prefix() . 'patrimoine_settings', [
                    'patrimoine_id' => $id,
                    'name'       => $setting['name'],
                    'value'      => $setting['value'],
                ]);
            }

            $added_tasks = [];
            $tasks       = $this->get_tasks($patrimoine_id);

            if (isset($data['tasks'])) {
                foreach ($tasks as $task) {
                    if (isset($data['task_include_followers'])) {
                        $copy_task_data['copy_task_followers'] = 'true';
                    }

                    if (isset($data['task_include_assignees'])) {
                        $copy_task_data['copy_task_assignees'] = 'true';
                    }

                    if (isset($data['tasks_include_checklist_items'])) {
                        $copy_task_data['copy_task_checklist_items'] = 'true';
                    }

                    $copy_task_data['copy_from'] = $task['id'];

                    // For new task start date, we will find the difference in days between
                    // the old patrimoine start and and the old task start date and then
                    // based on the new patrimoine start date, we will add e.q. 15 days to be
                    // new task start date to the task
                    // e.q. old patrimoine start date 2020-04-01, old task start date 2020-04-15 and due date 2020-04-30
                    // copy patrimoine and set start date 2020-06-01
                    // new task start date will be 2020-06-15 and below due date 2020-06-30
                    $dStart    = new DateTime($patrimoine->start_date);
                    $dEnd      = new DateTime($task['startdate']);
                    $dDiff     = $dStart->diff($dEnd);
                    $startDate = new DateTime($_new_data['start_date']);
                    $startDate->modify('+' . $dDiff->days . ' DAY');
                    $newTaskStartDate = $startDate->format('Y-m-d');

                    $merge = [
                        'rel_id'              => $id,
                        'rel_type'            => 'patrimoine',
                        'last_recurring_date' => null,
                        'startdate'           => $newTaskStartDate,
                        'status'              => $data['copy_patrimoine_task_status'],
                    ];

                    // Calculate the diff in days between the task start and due date
                    // then add these days to the new task start date to be used as this task due date
                    if ($task['duedate']) {
                        $dStart  = new DateTime($task['startdate']);
                        $dEnd    = new DateTime($task['duedate']);
                        $dDiff   = $dStart->diff($dEnd);
                        $dueDate = new DateTime($newTaskStartDate);
                        $dueDate->modify('+' . $dDiff->days . ' DAY');
                        $merge['duedate'] = $dueDate->format('Y-m-d');
                    }

                    $task_id = $this->tasks_model->copy($copy_task_data, $merge);

                    if ($task_id) {
                        array_push($added_tasks, $task_id);
                    }
                }
            }

            if (isset($data['milestones'])) {
                $milestones        = $this->get_milestones($patrimoine_id);
                $_added_milestones = [];
                foreach ($milestones as $milestone) {
                    $oldPatrimoineStartDate = new DateTime($patrimoine->start_date);
                    $dDuedate            = new DateTime($milestone['due_date']);
                    $dDiff               = $oldPatrimoineStartDate->diff($dDuedate);

                    $newPatrimoineStartDate = new DateTime($_new_data['start_date']);
                    $newPatrimoineStartDate->modify('+' . $dDiff->days . ' DAY');
                    $newMilestoneDueDate = $newPatrimoineStartDate->format('Y-m-d');

                    $this->db->insert(db_prefix() . 'milestones', [
                        'name'                            => $milestone['name'],
                        'patrimoine_id'                      => $id,
                        'milestone_order'                 => $milestone['milestone_order'],
                        'description_visible_to_customer' => $milestone['description_visible_to_customer'],
                        'description'                     => $milestone['description'],
                        'due_date'                        => $newMilestoneDueDate,
                        'datecreated'                     => date('Y-m-d'),
                        'color'                           => $milestone['color'],
                    ]);

                    $milestone_id = $this->db->insert_id();

                    if ($milestone_id) {
                        $_added_milestone_data         = [];
                        $_added_milestone_data['id']   = $milestone_id;
                        $_added_milestone_data['name'] = $milestone['name'];
                        $_added_milestones[]           = $_added_milestone_data;
                    }
                }

                if (isset($data['tasks'])) {
                    if (count($added_tasks) > 0) {
                        // Original patrimoine tasks
                        foreach ($tasks as $task) {
                            if ($task['milestone'] != 0) {
                                $this->db->where('id', $task['milestone']);
                                $milestone = $this->db->get(db_prefix() . 'milestones')->row();

                                if ($milestone) {
                                    foreach ($_added_milestones as $added_milestone) {
                                        if ($milestone->name == $added_milestone['name']) {
                                            $this->db->where('id IN (' . implode(', ', $added_tasks) . ')');
                                            $this->db->where('milestone', $task['milestone']);
                                            $this->db->update(db_prefix() . 'tasks', [
                                                'milestone' => $added_milestone['id'],
                                            ]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } else {
                // milestones not set
                if (count($added_tasks)) {
                    foreach ($added_tasks as $task) {
                        $this->db->where('id', $task['id']);
                        $this->db->update(db_prefix() . 'tasks', [
                            'milestone' => 0,
                        ]);
                    }
                }
            }

            if (isset($data['members'])) {
                $members  = $this->get_patrimoine_members($patrimoine_id);
                $_members = [];

                foreach ($members as $member) {
                    array_push($_members, $member['staff_id']);
                }

                $this->add_edit_members([
                    'patrimoine_members' => $_members,
                ], $id);
            }

            foreach (get_custom_fields('patrimoines') as $field) {
                $value = get_custom_field_value($patrimoine_id, $field['id'], 'patrimoines', false);
                if ($value != '') {
                    $this->db->insert(db_prefix() . 'customfieldsvalues', [
                        'relid'   => $id,
                        'fieldid' => $field['id'],
                        'fieldto' => 'patrimoines',
                        'value'   => $value,
                    ]);
                }
            }

            $this->log_activity($id, 'patrimoine_activity_created');

            log_activity('Patrimoine Copied [ID: ' . $patrimoine_id . ', NewID: ' . $id . ']');

            hooks()->do_action('patrimoine_copied', [
                'patrimoine_id'     => $patrimoine_id,
                'new_patrimoine_id' => $id,
            ]);

            return $id;
        }

        return false;
    }

    public function get_staff_notes($patrimoine_id)
    {
        $this->db->where('patrimoine_id', $patrimoine_id);
        $this->db->where('staff_id', get_staff_user_id());
        $notes = $this->db->get(db_prefix() . 'patrimoine_notes')->row();
        if ($notes) {
            return $notes->content;
        }

        return '';
    }

    public function save_note($data, $patrimoine_id)
    {
        // Check if the note exists for this patrimoine;
        $this->db->where('patrimoine_id', $patrimoine_id);
        $this->db->where('staff_id', get_staff_user_id());
        $notes = $this->db->get(db_prefix() . 'patrimoine_notes')->row();
        if ($notes) {
            $this->db->where('id', $notes->id);
            $this->db->update(db_prefix() . 'patrimoine_notes', [
                'content' => $data['content'],
            ]);
            if ($this->db->affected_rows() > 0) {
                return true;
            }

            return false;
        }
        $this->db->insert(db_prefix() . 'patrimoine_notes', [
            'staff_id'   => get_staff_user_id(),
            'content'    => $data['content'],
            'patrimoine_id' => $patrimoine_id,
        ]);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            return true;
        }

        return false;


        return false;
    }

    public function delete($patrimoine_id)
    {
        $patrimoine_name = get_patrimoine_name_by_id($patrimoine_id);

        $this->db->where('id', $patrimoine_id);
        $this->db->delete(db_prefix() . 'patrimoines');
        if ($this->db->affected_rows() > 0) {
            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_members');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_notes');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'milestones');

            // Delete the custom field values
            $this->db->where('relid', $patrimoine_id);
            $this->db->where('fieldto', 'patrimoines');
            $this->db->delete(db_prefix() . 'customfieldsvalues');

            $this->db->where('rel_id', $patrimoine_id);
            $this->db->where('rel_type', 'patrimoine');
            $this->db->delete(db_prefix() . 'taggables');


            $this->db->where('patrimoine_id', $patrimoine_id);
            $discussions = $this->db->get(db_prefix() . 'patrimoinediscussions')->result_array();
            foreach ($discussions as $discussion) {
                $discussion_comments = $this->get_discussion_comments($discussion['id'], 'regular');
                foreach ($discussion_comments as $comment) {
                    $this->delete_discussion_comment_attachment($comment['file_name'], $discussion['id']);
                }
                $this->db->where('discussion_id', $discussion['id']);
                $this->db->delete(db_prefix() . 'patrimoinediscussioncomments');
            }
            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoinediscussions');

            $files = $this->get_files($patrimoine_id);
            foreach ($files as $file) {
                $this->remove_file($file['id']);
            }

            $tasks = $this->get_tasks($patrimoine_id);
            foreach ($tasks as $task) {
                $this->tasks_model->delete_task($task['id'], false);
            }

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_settings');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'patrimoine_activity');

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'expenses', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'contracts', [
                'patrimoine_id' => null,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'invoices', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'creditnotes', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'estimates', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->update(db_prefix() . 'tickets', [
                'patrimoine_id' => 0,
            ]);

            $this->db->where('patrimoine_id', $patrimoine_id);
            $this->db->delete(db_prefix() . 'pinned_patrimoines');

            log_activity('Patrimoine Deleted [ID: ' . $patrimoine_id . ', Name: ' . $patrimoine_name . ']');

            return true;
        }

        return false;
    }

    public function get_activity($id = '', $limit = '', $only_patrimoine_members_activity = false)
    {
        if (!is_client_logged_in()) {
            $has_permission = has_permission('patrimoines', '', 'view');
            if (!$has_permission) {
                $this->db->where('patrimoine_id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . ')');
            }
        }
        if (is_client_logged_in()) {
            $this->db->where('visible_to_customer', 1);
        }
        if (is_numeric($id)) {
            $this->db->where('patrimoine_id', $id);
        }
        if (is_numeric($limit)) {
            $this->db->limit($limit);
        }
        $this->db->order_by('dateadded', 'desc');
        $activities = $this->db->get(db_prefix() . 'patrimoine_activity')->result_array();
        $i          = 0;
        foreach ($activities as $activity) {
            $seconds          = get_string_between($activity['additional_data'], '<seconds>', '</seconds>');
            $other_lang_keys  = get_string_between($activity['additional_data'], '<lang>', '</lang>');
            $_additional_data = $activity['additional_data'];

            if ($seconds != '') {
                $_additional_data = str_replace('<seconds>' . $seconds . '</seconds>', seconds_to_time_format($seconds), $_additional_data);
            }

            if ($other_lang_keys != '') {
                $_additional_data = str_replace('<lang>' . $other_lang_keys . '</lang>', _l($other_lang_keys), $_additional_data);
            }

            if (strpos($_additional_data, 'patrimoine_status_') !== false) {
                $_additional_data = get_patrimoine_status_by_id(strafter($_additional_data, 'patrimoine_status_'));

                if (isset($_additional_data['name'])) {
                    $_additional_data = $_additional_data['name'];
                }
            }

            $activities[$i]['description']     = _l($activities[$i]['description_key']);
            $activities[$i]['additional_data'] = $_additional_data;
            $activities[$i]['patrimoine_name']    = get_patrimoine_name_by_id($activity['patrimoine_id']);
            unset($activities[$i]['description_key']);
            $i++;
        }

        return $activities;
    }

    public function log_activity($patrimoine_id, $description_key, $additional_data = '', $visible_to_customer = 1)
    {
        if (!DEFINED('CRON')) {
            if (is_client_logged_in()) {
                $data['contact_id'] = get_contact_user_id();
                $data['staff_id']   = 0;
                $data['fullname']   = get_contact_full_name(get_contact_user_id());
            } elseif (is_staff_logged_in()) {
                $data['contact_id'] = 0;
                $data['staff_id']   = get_staff_user_id();
                $data['fullname']   = get_staff_full_name(get_staff_user_id());
            }
        } else {
            $data['contact_id'] = 0;
            $data['staff_id']   = 0;
            $data['fullname']   = '[CRON]';
        }
        $data['description_key']     = $description_key;
        $data['additional_data']     = $additional_data;
        $data['visible_to_customer'] = $visible_to_customer;
        $data['patrimoine_id']          = $patrimoine_id;
        $data['dateadded']           = date('Y-m-d H:i:s');

        $data = hooks()->apply_filters('before_log_patrimoine_activity', $data);

        $this->db->insert(db_prefix() . 'patrimoine_activity', $data);
    }

    public function new_patrimoine_file_notification($file_id, $patrimoine_id)
    {
        $file = $this->get_file($file_id);

        $additional_data = $file->file_name;
        $this->log_activity($patrimoine_id, 'patrimoine_activity_uploaded_file', $additional_data, $file->visible_to_customer);

        $members           = $this->get_patrimoine_members($patrimoine_id);
        $notification_data = [
            'description' => 'not_patrimoine_file_uploaded',
            'link'        => 'wealth_management/view/' . $patrimoine_id . '?group=patrimoine_files&file_id=' . $file_id,
        ];

        if (is_client_logged_in()) {
            $notification_data['fromclientid'] = get_contact_user_id();
        } else {
            $notification_data['fromuserid'] = get_staff_user_id();
        }

        $notifiedUsers = [];
        foreach ($members as $member) {
            if ($member['staff_id'] == get_staff_user_id() && !is_client_logged_in()) {
                continue;
            }
            $notification_data['touserid'] = $member['staff_id'];
            if (add_notification($notification_data)) {
                array_push($notifiedUsers, $member['staff_id']);
            }
        }
        pusher_trigger_notification($notifiedUsers);

        $this->send_patrimoine_email_template(
            $patrimoine_id,
            'patrimoine_file_to_staff',
            'patrimoine_file_to_customer',
            $file->visible_to_customer,
            [
                'staff'     => ['discussion_id' => $file_id, 'discussion_type' => 'file'],
                'customers' => ['customer_template' => true, 'discussion_id' => $file_id, 'discussion_type' => 'file'],
            ]
        );
    }

    public function add_external_file($data)
    {
        $insert['dateadded']           = date('Y-m-d H:i:s');
        $insert['patrimoine_id']          = $data['patrimoine_id'];
        $insert['external']            = $data['external'];
        $insert['visible_to_customer'] = $data['visible_to_customer'];
        $insert['file_name']           = $data['files'][0]['name'];
        $insert['subject']             = $data['files'][0]['name'];
        $insert['external_link']       = $data['files'][0]['link'];

        $path_parts         = pathinfo($data['files'][0]['name']);
        $insert['filetype'] = get_mime_by_extension('.' . $path_parts['extension']);

        if (isset($data['files'][0]['thumbnailLink'])) {
            $insert['thumbnail_link'] = $data['files'][0]['thumbnailLink'];
        }

        if (isset($data['staffid'])) {
            $insert['staffid'] = $data['staffid'];
        } elseif (isset($data['contact_id'])) {
            $insert['contact_id'] = $data['contact_id'];
        }

        $this->db->insert(db_prefix() . 'patrimoine_files', $insert);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            $this->new_patrimoine_file_notification($insert_id, $data['patrimoine_id']);

            return $insert_id;
        }

        return false;
    }

    public function send_patrimoine_email_template($patrimoine_id, $staff_template, $customer_template, $action_visible_to_customer, $additional_data = [])
    {
        if (count($additional_data) == 0) {
            $additional_data['customers'] = [];
            $additional_data['staff']     = [];
        } elseif (count($additional_data) == 1) {
            if (!isset($additional_data['staff'])) {
                $additional_data['staff'] = [];
            } else {
                $additional_data['customers'] = [];
            }
        }

        $patrimoine = $this->get($patrimoine_id);
        $members = $this->get_patrimoine_members($patrimoine_id);

        foreach ($members as $member) {
            if (is_staff_logged_in() && $member['staff_id'] == get_staff_user_id()) {
                continue;
            }
            $mailTemplate = mail_template($staff_template, $patrimoine, $member, $additional_data['staff']);
            if (isset($additional_data['attachments'])) {
                foreach ($additional_data['attachments'] as $attachment) {
                    $mailTemplate->add_attachment($attachment);
                }
            }
            $mailTemplate->send();
        }

        if ($action_visible_to_customer == 1) {
            if ($patrimoine->contact_notification == 1) {
                $contacts = $this->clients_model->get_contacts($patrimoine->clientid, ['active' => 1, 'patrimoine_emails' => 1]);
            } elseif ($patrimoine->contact_notification == 2) {
                $contacts = [];
                $contactIds = unserialize($patrimoine->notify_contacts);
                if (count($contactIds) > 0) {
                    $this->db->where_in('id', $contactIds);
                    $this->db->where('active', 1);
                    $contacts = $this->db->get(db_prefix() . 'contacts')->result_array();
                }
            } else {
                $contacts = [];
            }

            foreach ($contacts as $contact) {
                if (is_client_logged_in() && $contact['id'] == get_contact_user_id()) {
                    continue;
                }
                $mailTemplate = mail_template($customer_template, $patrimoine, $contact, $additional_data['customers']);
                if (isset($additional_data['attachments'])) {
                    foreach ($additional_data['attachments'] as $attachment) {
                        $mailTemplate->add_attachment($attachment);
                    }
                }
                $mailTemplate->send();
            }
        }
    }

    private function _get_patrimoine_billing_data($id)
    {
        $this->db->select('billing_type,patrimoine_rate_per_hour');
        $this->db->where('id', $id);

        return $this->db->get(db_prefix() . 'patrimoines')->row();
    }

    public function total_logged_time_by_billing_type($id, $conditions = [])
    {
        $patrimoine_data = $this->_get_patrimoine_billing_data($id);
        $data         = [];
        if ($patrimoine_data->billing_type == 2) {
            $seconds             = $this->total_logged_time($id);
            $data                = $this->patrimoines_model->calculate_total_by_patrimoine_hourly_rate($seconds, $patrimoine_data->patrimoine_rate_per_hour);
            $data['logged_time'] = $data['hours'];
        } elseif ($patrimoine_data->billing_type == 3) {
            $data = $this->_get_data_total_logged_time($id);
        }

        return $data;
    }

    public function data_billable_time($id)
    {
        return $this->_get_data_total_logged_time($id, [
            'billable' => 1,
        ]);
    }

    public function data_billed_time($id)
    {
        return $this->_get_data_total_logged_time($id, [
            'billable' => 1,
            'billed'   => 1,
        ]);
    }

    public function data_unbilled_time($id)
    {
        return $this->_get_data_total_logged_time($id, [
            'billable' => 1,
            'billed'   => 0,
        ]);
    }

    private function _delete_discussion_comments($id, $type)
    {
        $this->db->where('discussion_id', $id);
        $this->db->where('discussion_type', $type);
        $comments = $this->db->get(db_prefix() . 'patrimoinediscussioncomments')->result_array();
        foreach ($comments as $comment) {
            $this->delete_discussion_comment_attachment($comment['file_name'], $id);
        }
        $this->db->where('discussion_id', $id);
        $this->db->where('discussion_type', $type);
        $this->db->delete(db_prefix() . 'patrimoinediscussioncomments');
    }

    private function _get_data_total_logged_time($id, $conditions = [])
    {
        $patrimoine_data = $this->_get_patrimoine_billing_data($id);
        $tasks        = $this->get_tasks($id, $conditions);

        if ($patrimoine_data->billing_type == 3) {
            $data                = $this->calculate_total_by_task_hourly_rate($tasks);
            $data['logged_time'] = seconds_to_time_format($data['total_seconds']);
        } elseif ($patrimoine_data->billing_type == 2) {
            $seconds = 0;
            foreach ($tasks as $task) {
                $seconds += $task['total_logged_time'];
            }
            $data                = $this->calculate_total_by_patrimoine_hourly_rate($seconds, $patrimoine_data->patrimoine_rate_per_hour);
            $data['logged_time'] = $data['hours'];
        }

        return $data;
    }

    private function _update_discussion_last_activity($id, $type)
    {
        if ($type == 'file') {
            $table = db_prefix() . 'patrimoine_files';
        } elseif ($type == 'regular') {
            $table = db_prefix() . 'patrimoinediscussions';
        }
        $this->db->where('id', $id);
        $this->db->update($table, [
            'last_activity' => date('Y-m-d H:i:s'),
        ]);
    }

    public function send_patrimoine_email_mentioned_users($patrimoine_id, $staff_template, $staff, $additional_data = [])
    {
        $this->load->model('staff_model');

        $patrimoine = $this->get($patrimoine_id);

        foreach ($staff as $staffId) {
            if (is_staff_logged_in() && $staffId == get_staff_user_id()) {
                continue;
            }
            $member             = (array) $this->staff_model->get($staffId);
            $member['staff_id'] = $member['staffid'];

            $mailTemplate = mail_template($staff_template, $patrimoine, $member, $additional_data['staff']);
            if (isset($additional_data['attachments'])) {
                foreach ($additional_data['attachments'] as $attachment) {
                    $mailTemplate->add_attachment($attachment);
                }
            }
            $mailTemplate->send();
        }
    }

    public function convert_estimate_items_to_tasks($patrimoine_id, $items, $assignees, $patrimoine_data, $patrimoine_settings)
    {
        $this->load->model('tasks_model');
        foreach ($items as $index => $itemId) {

            $this->db->where('id', $itemId);
            $_item = $this->db->get(db_prefix() . 'itemable')->row();

            $data = [
                'billable' => 'on',
                'name' => $_item->description,
                'description' => $_item->long_description,
                'startdate' => $patrimoine_data['start_date'],
                'duedate' => '',
                'rel_type' => 'patrimoine',
                'rel_id' => $patrimoine_id,
                'hourly_rate' => $patrimoine_data['billing_type'] == 3 ? $_item->rate : 0,
                'priority' => get_option('default_task_priority'),
                'withDefaultAssignee' => false,
            ];

            if (isset($patrimoine_settings->view_tasks)) {
                $data['visible_to_client'] = 'on';
            }

            $task_id = $this->tasks_model->add($data);

            if ($task_id) {
                $staff_id = $assignees[$index];

                $this->tasks_model->add_task_assignees([
                    'taskid' => $task_id,
                    'assignee' => intval($staff_id),
                ]);

                if (!$this->is_member($patrimoine_id, $staff_id)) {
                    $this->db->insert(db_prefix() . 'patrimoine_members', [
                        'patrimoine_id' => $patrimoine_id,
                        'staff_id'   => $staff_id,
                    ]);
                }
            }
        }
    }
}
