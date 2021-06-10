<?php

defined('BASEPATH') or exit('No direct script access allowed');

$dimensions    = $pdf->getPageDimensions();
$custom_fields = get_custom_fields('patrimoines');

// Like heading patrimoine name
$html = '<h1>' . _l('patrimoine_name') . ': ' . $patrimoine->name . '</h1>';
// patrimoine overview heading
$html .= '<h3>' . ucwords(_l('patrimoine_overview')) . '</h3>';

if (!empty($patrimoine->description)) {
    // Patrimoine description
    $html .= '<p><b style="background-color:#f0f0f0;">' . _l('patrimoine_description') . '</b><br /><br /> ' . $patrimoine->description . '</p>';
}

$pdf->writeHTML($html, true, false, false, false, '');
$pdf->Ln(10);

$html = '';
$html .= '<table>';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>';

if ($patrimoine->billing_type == 1) {
    $type_name = 'patrimoine_billing_type_fixed_cost';
} elseif ($patrimoine->billing_type == 2) {
    $type_name = 'patrimoine_billing_type_patrimoine_hours';
} else {
    $type_name = 'patrimoine_billing_type_patrimoine_task_hours';
}

$html .= '<b style="background-color:#f0f0f0;">' . _l('patrimoine_overview') . '</b>';

$html .= '</th>';

$html .= '<th>';

$html .= '<b style="background-color:#f0f0f0;">' . ucwords(_l('finance_overview')) . '</b>';

$html .= '</th>';

if (count($custom_fields) > 0) {
    $html .= '<th>';
    $html .= '<b style="background-color:#f0f0f0;">' . ucwords(_l('patrimoine_custom_fields')) . '</b>';
    $html .= '</th>';
}

$html .= '<th>';
$html .= '<b style="background-color:#f0f0f0;">' . ucwords(_l('patrimoine_customer')) . '</b>';
$html .= '</th>';

$html .= '</tr>';

$html .= '</thead>';
$html .= '<tbody>';

$html .= '<tr>';

$html .= '<td><br /><br />';

$html .= '<b>' . _l('patrimoine_billing_type') . ': </b>' . _l($type_name) . '<br />';

if ($patrimoine->billing_type == 1 || $patrimoine->billing_type == 2) {
    if ($patrimoine->billing_type == 1) {
        $html .= '<b>' . _l('patrimoine_total_cost') . ': </b>' . app_format_money($patrimoine->patrimoine_cost, $patrimoine->currency_data) . '<br />';
    } else {
        $html .= '<b>' . _l('patrimoine_rate_per_hour') . ': </b>' . app_format_money($patrimoine->patrimoine_rate_per_hour, $patrimoine->currency_data) . '<br />';
    }
}
$status = get_patrimoine_status_by_id($patrimoine->status);
// Patrimoine status
$html .= '<b>' . _l('patrimoine_status') . ': </b>' . $status['name'] . '<br />';
// Date created
$html .= '<b>' . _l('patrimoine_datecreated') . ': </b>' . _d($patrimoine->patrimoine_created) . '<br />';
// Start date
$html .= '<b>' . _l('patrimoine_start_date') . ': </b>' . _d($patrimoine->start_date) . '<br />';
// Deadline
$d = $patrimoine->deadline ? _d($patrimoine->deadline) : '/';
$html .= '<b>' . _l('patrimoine_deadline') . ': </b>' . $d . '<br /><br />';
// Total Days
$html .= '<b>' . _l('total_patrimoine_worked_days') . ': </b>' . $total_days . '<br />';
// Total logged hours for this patrimoine
$html .= '<b>' . _l('patrimoine_overview_total_logged_hours') . ': </b>' . $total_logged_time . '<br />';
// Total members
$html .= '<b>' . _l('total_patrimoine_members') . ': </b>' . $total_members . '<br />';
// Total files
$html .= '<b>' . _l('total_patrimoine_files') . ': </b>' . $total_files_attached . '<br />';
// Total Discussions
$html .= '<b>' . _l('total_patrimoine_discussions_created') . ': </b>' . $total_files_attached . '<br />';
// Total Milestones
$html .= '<b>' . _l('total_milestones') . ': </b>' . $total_milestones . '<br />';
// Total Tickets
$html .= '<b>' . _l('total_tickets_related_to_patrimoine') . ': </b>' . $total_tickets . '<br />';
$html .= '</td>';

$html .= '<td><br /><br />';
$html .= '<b>' . _l('patrimoines_total_invoices_created') . ' </b>' . $total_invoices . '<br />';
// Not paid invoices total
$html .= '<b>' . _l('outstanding_invoices') . ' </b>' . app_format_money($invoices_total_data['due'], $patrimoine->currency_data) . '<br />';
// Due invoices total
$html .= '<b>' . _l('past_due_invoices') . ' </b>' . app_format_money($invoices_total_data['overdue'], $patrimoine->currency_data) . '<br />';
// Paid invoices
$html .= '<b>' . _l('paid_invoices') . ' </b>' . app_format_money($invoices_total_data['paid'], $patrimoine->currency_data) . '';

// Finance Overview
if ($patrimoine->billing_type == 2 || $patrimoine->billing_type == 3) {
    // Total logged time + money
    $logged_time_data = $this->ci->patrimoines_model->total_logged_time_by_billing_type($patrimoine->id);
    $html .= '<b>' . _l('patrimoine_overview_logged_hours') . ' </b>' . $logged_time_data['logged_time'] . ' - ' . app_format_money($logged_time_data['total_money'], $patrimoine->currency_data) . '<br />';
    // Total billable time + money
    $logged_time_data = $this->ci->patrimoines_model->data_billable_time($patrimoine->id);
    $html .= '<b>' . _l('patrimoine_overview_billable_hours') . ' </b>' . $logged_time_data['logged_time'] . ' - ' . app_format_money($logged_time_data['total_money'], $patrimoine->currency_data) . '<br />';
    // Total billed time + money
    $logged_time_data = $this->ci->patrimoines_model->data_billed_time($patrimoine->id);
    $html .= '<b>' . _l('patrimoine_overview_billed_hours') . ' </b>' . $logged_time_data['logged_time'] . ' - ' . app_format_money($logged_time_data['total_money'], $patrimoine->currency_data) . '<br />';
    // Total unbilled time + money
    $logged_time_data = $this->ci->patrimoines_model->data_unbilled_time($patrimoine->id);
    $html .= '<b>' . _l('patrimoine_overview_unbilled_hours') . ' </b>' . $logged_time_data['logged_time'] . ' - ' . app_format_money($logged_time_data['total_money'], $patrimoine->currency_data) . '<br /><br/>';
}

// Total expenses + money
$html .= '<b>' . _l('patrimoine_overview_expenses') . ': </b>' . app_format_money(sum_from_table(db_prefix() . 'expenses', ['where' => ['patrimoine_id' => $patrimoine->id], 'field' => 'amount']), $patrimoine->currency_data) . '<br />';
// Billable expenses + money
$html .= '<b>' . _l('patrimoine_overview_expenses_billable') . ': </b>' . app_format_money(sum_from_table(db_prefix() . 'expenses', ['where' => ['patrimoine_id' => $patrimoine->id, 'billable' => 1], 'field' => 'amount']), $patrimoine->currency_data) . '<br />';
// Billed expenses + money
$html .= '<b>' . _l('patrimoine_overview_expenses_billed') . ': </b>' . app_format_money(sum_from_table(db_prefix() . 'expenses', ['where' => ['patrimoine_id' => $patrimoine->id, 'invoiceid !=' => 'NULL', 'billable' => 1], 'field' => 'amount']), $patrimoine->currency_data) . '<br />';
// Unbilled expenses + money
$html .= '<b>' . _l('patrimoine_overview_expenses_unbilled') . ': </b>' . app_format_money(sum_from_table(db_prefix() . 'expenses', ['where' => ['patrimoine_id' => $patrimoine->id, 'invoiceid IS NULL', 'billable' => 1], 'field' => 'amount']), $patrimoine->currency_data);
$html .= '</td>';

// Custom fields
if (count($custom_fields) > 0) {
    $html .= '<td><br /><br />';
    foreach ($custom_fields as $field) {
        $value = get_custom_field_value($patrimoine->id, $field['id'], 'patrimoines');
        $value = $value === '' ? '/' : $value;
        $html .= '<b>' . ucfirst($field['name']) . ': </b>' . $value . '<br />';
    }

    $html .= '</td>';
}

// Customer Info
$html .= '<td><br /><br />';

$html .= '<b>' . $patrimoine->client_data->company . '</b><br />';
$html .= $patrimoine->client_data->address . '<br />';

if (!empty($patrimoine->client_data->city)) {
    $html .= $patrimoine->client_data->city;
}

if (!empty($patrimoine->client_data->state)) {
    $html .= ', ' . $patrimoine->client_data->state;
}

$country = get_country_short_name($patrimoine->client_data->country);

if (!empty($country)) {
    $html .= '<br />' . $country;
}

if (!empty($patrimoine->client_data->zip)) {
    $html .= ', ' . $patrimoine->client_data->zip;
}

if (!empty($patrimoine->client_data->phonenumber)) {
    $html .= '<br />' . $patrimoine->client_data->phonenumber;
}

if (!empty($patrimoine->client_data->vat)) {
    $html .= '<br />' . _l('client_vat_number') . ': ' . $patrimoine->client_data->vat;
}

$html .= '</td>';
$html .= '</tr>';

$html .= '</tbody>';
$html .= '</table>';

$pdf->writeHTML($html, true, false, false, false, '');

$pdf->ln(5);

// Patrimoine members overview
$html = '';
// Heading
$html .= '<p><b style="background-color:#f0f0f0;">' . ucwords(_l('patrimoine_members_overview')) . '</b></p>';
$html .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="1">';
$html .= '<thead>';
$html .= '<tr bgcolor="#323a45" style="color:#ffffff;">';
$html .= '<th width="12.5%"><b>' . _l('patrimoine_member') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('staff_total_task_assigned') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('staff_total_comments_on_tasks') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('total_patrimoine_discussions_created') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('total_patrimoine_discussions_comments') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('total_patrimoine_files') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('time_h') . '</b></th>';
$html .= '<th width="12.5%"><b>' . _l('time_decimal') . '</b></th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';
foreach ($members as $member) {
    $html .= '<tr style="color:#4a4a4a;">';
    $html .= '<td>' . get_staff_full_name($member['staff_id']) . '</td>';
    $html .= '<td>' . total_rows(db_prefix() . 'tasks', 'rel_type="patrimoine" AND rel_id="' . $patrimoine->id . '" AND id IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned WHERE staffid="' . $member['staff_id'] . '")') . '</td>';
    $html .= '<td>' . total_rows(db_prefix() . 'task_comments', 'staffid = ' . $member['staff_id'] . ' AND taskid IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type="patrimoine" AND rel_id="' . $patrimoine->id . '")') . '</td>';
    $html .= '<td>' . total_rows(db_prefix() . 'patrimoinediscussions', ['staff_id' => $member['staff_id'], 'patrimoine_id' => $patrimoine->id]) . '</td>';
    $html .= '<td>' . total_rows(db_prefix() . 'patrimoinediscussioncomments', 'staff_id=' . $member['staff_id'] . ' AND discussion_id IN (SELECT id FROM ' . db_prefix() . 'patrimoinediscussions WHERE patrimoine_id=' . $patrimoine->id . ')') . '</td>';
    $html .= '<td>' . total_rows(db_prefix() . 'patrimoine_files', ['staffid' => $member['staff_id'], 'patrimoine_id' => $patrimoine->id]) . '</td>';
    $member_tasks_assigned = $this->ci->tasks_model->get_tasks_by_staff_id($member['staff_id'], ['rel_id' => $patrimoine->id, 'rel_type' => 'patrimoine']);
    $seconds               = 0;
    foreach ($member_tasks_assigned as $member_task) {
        $seconds += $this->ci->tasks_model->calc_task_total_time($member_task['id'], ' AND staff_id=' . $member['staff_id']);
    }
    $html .= '<td>' . seconds_to_time_format($seconds) . '</td>';
    $html .= '<td>' . sec2qty($seconds) . '</td>';
    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
// Write patrimoine members table data
$pdf->writeHTML($html, true, false, false, false, '');

// Tasks overview
$pdf->Ln(5);
$html = '';
$html .= '<p><b style="background-color:#f0f0f0;">' . ucwords(_l('detailed_overview')) . '</b></p>';
$html .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="1">';
$html .= '<thead>';
$html .= '<tr bgcolor="#323a45" style="color:#ffffff;">';
$html .= '<th width="26.12%"><b>' . _l('tasks_dt_name') . '</b></th>';
$html .= '<th width="12%"><b>' . _l('total_task_members_assigned') . '</b></th>';
$html .= '<th width="12%"><b>' . _l('total_task_members_followers') . '</b></th>';
$html .= '<th width="9.28%"><b>' . _l('task_single_start_date') . '</b></th>';
$html .= '<th width="9.28%"><b>' . _l('task_single_due_date') . '</b></th>';
$html .= '<th width="7%"><b>' . _l('task_status') . '</b></th>';
$html .= '<th width="14.28%"><b>' . _l('time_h') . '</b></th>';
$html .= '<th width="10%"><b>' . _l('time_decimal') . '</b></th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';
foreach ($tasks as $task) {
    $html .= '<tr style="color:#4a4a4a;">';
    $html .= '<td width="26.12%">' . $task['name'] . '</td>';
    $html .= '<td width="12%">' . total_rows(db_prefix() . 'task_assigned', ['taskid' => $task['id']]) . '</td>';
    $html .= '<td width="12%">' . total_rows(db_prefix() . 'task_followers', ['taskid' => $task['id']]) . '</td>';
    $html .= '<td width="9.28%">' . _d($task['startdate']) . '</td>';
    $html .= '<td width="9.28%">' . (is_date($task['duedate']) ? _d($task['duedate']): '') . '</td>';
    $html .= '<td width="7%">' . format_task_status($task['status'], true, true) . '</td>';
    $html .= '<td width="14.28%">' . seconds_to_time_format($task['total_logged_time']) . '</td>';
    $html .= '<td width="10%">' . sec2qty($task['total_logged_time']) . '</td>';

    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
// Write tasks data
$pdf->writeHTML($html, true, false, false, false, '');

// Timesheets overview
$pdf->Ln(5);
$html = '';
$html .= '<p><b style="background-color:#f0f0f0;">' . ucwords(_l('timesheets_overview')) . '</b></p>';
$html .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="1">';
$html .= '<thead>';
$html .= '<tr bgcolor="#323a45" style="color:#ffffff;">';
$html .= '<th width="16.66%"><b>' . _l('patrimoine_timesheet_user') . '</b></th>';
$html .= '<th width="16.66%"><b>' . _l('patrimoine_timesheet_task') . '</b></th>';
$html .= '<th width="16.66%"><b>' . _l('patrimoine_timesheet_start_time') . '</b></th>';
$html .= '<th width="16.66%"><b>' . _l('patrimoine_timesheet_end_time') . '</b></th>';
$html .= '<th width="16.66%"><b>' . _l('time_h') . '</b></th>';
$html .= '<th width="16.66%"><b>' . _l('time_decimal') . '</b></th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';
foreach ($timesheets as $timesheet) {
    $html .= '<tr style="color:#4a4a4a;">';
    $html .= '<td>' . get_staff_full_name($timesheet['staff_id']) . '</td>';
    $html .= '<td>' . $timesheet['task_data']->name . '</td>';
    $html .= '<td>' . _dt($timesheet['start_time'], true) . '</td>';
    $html .= '<td>' . (!is_null($timesheet['end_time']) ? _dt($timesheet['end_time'], true) : '') . '</td>';
    $html .= '<td>' . seconds_to_time_format($timesheet['total_spent']) . '</td>';
    $html .= '<td>' . sec2qty($timesheet['total_spent']) . '</td>';

    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
// Write timesheets data
$pdf->writeHTML($html, true, false, false, false, '');

// Milestones overview
$pdf->Ln(5);
$html = '';
$html .= '<p><b style="background-color:#f0f0f0;">' . ucwords(_l('patrimoine_milestones_overview')) . '</b></p>';
$html .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="1">';
$html .= '<thead>';
$html .= '<tr bgcolor="#323a45" style="color:#ffffff;">';
$html .= '<th width="20%"><b>' . _l('milestone_name') . '</b></th>';
$html .= '<th width="30%"><b>' . _l('milestone_description') . '</b></th>';
$html .= '<th width="15%"><b>' . _l('milestone_due_date') . '</b></th>';
$html .= '<th width="15%"><b>' . _l('total_tasks_in_milestones') . '</b></th>';
$html .= '<th width="20%"><b>' . _l('milestone_total_logged_time') . '</b></th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';
foreach ($milestones as $milestone) {
    $html .= '<tr style="color:#4a4a4a;">';
    $html .= '<td width="20%">' . $milestone['name'] . '</td>';
    $html .= '<td width="30%">' . $milestone['description'] . '</td>';
    $html .= '<td width="15%">' . _d($milestone['due_date']) . '</td>';
    $html .= '<td width="15%">' . total_rows(db_prefix() . 'tasks', ['milestone' => $milestone['id'], 'rel_id' => $patrimoine->id, 'rel_type' => 'patrimoine']) . '</td>';
    $html .= '<td width="20%">' . seconds_to_time_format($milestone['total_logged_time']) . '</td>';
    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
// Write milestones table data
$pdf->writeHTML($html, true, false, false, false, '');

if (ob_get_length() > 0 && ENVIRONMENT == 'production') {
    ob_end_clean();
}

// Output PDF to user
$pdf->output('#' . $patrimoine->id . '_' . $patrimoine->name . '_' . _d(date('Y-m-d')) . '.pdf', 'I');
