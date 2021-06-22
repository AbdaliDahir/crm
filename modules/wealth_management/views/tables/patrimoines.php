<?php

defined('BASEPATH') or exit('No direct script access allowed');

$hasPermissionEdit   = has_permission('patrimoines', '', 'edit');
$hasPermissionDelete = has_permission('patrimoines', '', 'delete');
$hasPermissionCreate = has_permission('patrimoines', '', 'create');

$aColumns = [
    db_prefix() . 'patrimoines.id as id',
    'name',
    '(SELECT GROUP_CONCAT(name SEPARATOR ",") FROM ' . db_prefix() . 'taggables JOIN ' . db_prefix() . 'tags ON ' . db_prefix() . 'taggables.tag_id = ' . db_prefix() . 'tags.id WHERE rel_id = ' . db_prefix() . 'patrimoines.id and rel_type="patrimoine" ORDER by tag_order ASC) as tags',
    'start_date',
    'deadline',
    '(SELECT GROUP_CONCAT(CONCAT(firstname, \' \', lastname) SEPARATOR ",") FROM ' . db_prefix() . 'patrimoine_members JOIN ' . db_prefix() . 'staff on ' . db_prefix() . 'staff.staffid = ' . db_prefix() . 'patrimoine_members.staff_id WHERE patrimoine_id=' . db_prefix() . 'patrimoines.id ORDER BY staff_id) as members',
    'status',
];


$sIndexColumn = 'id';
$sTable       = db_prefix() . 'patrimoines';

// $join = [
//     'JOIN ' . db_prefix() . 'clients ON ' . db_prefix() . 'clients.userid = ' . db_prefix() . 'patrimoines.clientid',
// ];

$where  = [];
$filter = [];

// if ($clientid != '') {
//     array_push($where, ' AND clientid=' . $this->ci->db->escape_str($clientid));
// }

if (!has_permission('patrimoines', '', 'view') || $this->ci->input->post('my_patrimoines')) {
    array_push($where, ' AND ' . db_prefix() . 'patrimoines.id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . ')');
}

$statusIds = [];

foreach ($this->ci->patrimoines_model->get_patrimoine_statuses() as $status) {
    if ($this->ci->input->post('patrimoine_status_' . $status['id'])) {
        array_push($statusIds, $status['id']);
    }
}

if (count($statusIds) > 0) {
    array_push($filter, 'OR status IN (' . implode(', ', $statusIds) . ')');
}

if (count($filter) > 0) {
    array_push($where, 'AND (' . prepare_dt_filter($filter) . ')');
}

$custom_fields = get_table_custom_fields('patrimoines');

foreach ($custom_fields as $key => $field) {
    $selectAs = (is_cf_date($field) ? 'date_picker_cvalue_' . $key : 'cvalue_' . $key);
    array_push($customFieldsColumns, $selectAs);
    array_push($aColumns, 'ctable_' . $key . '.value as ' . $selectAs);
    array_push($join, 'LEFT JOIN ' . db_prefix() . 'customfieldsvalues as ctable_' . $key . ' ON ' . db_prefix() . 'patrimoines.id = ctable_' . $key . '.relid AND ctable_' . $key . '.fieldto="' . $field['fieldto'] . '" AND ctable_' . $key . '.fieldid=' . $field['id']);
}

$aColumns = hooks()->apply_filters('patrimoines_table_sql_columns', $aColumns);

// Fix for big queries. Some hosting have max_join_limit
if (count($custom_fields) > 4) {
    @$this->ci->db->query('SET SQL_BIG_SELECTS=1');
}

$result = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $where, [
    // 'clientid',
    '(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM ' . db_prefix() . 'patrimoine_members WHERE patrimoine_id=' . db_prefix() . 'patrimoines.id ORDER BY staff_id) as members_ids',
]);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    
    $row = [];

    $link = admin_url('wealth_management/view/' . $aRow['id']);

    $row[] = '<a href="' . $link . '">' . $aRow['id'] . '</a>';

    $name = '<a href="' . $link . '">' . $aRow['name'] . '</a>';

    $name .= '<div class="row-options">';

    $name .= '<a href="' . $link . '">' . _l('view') . '</a>';

    if ($hasPermissionCreate && !$clientid) {
        $name .= ' | <a href="#" onclick="copy_patrimoine(' . $aRow['id'] . ');return false;">' . _l('copy_patrimoine') . '</a>';
    }

    if ($hasPermissionEdit) {
        $name .= ' | <a href="' . admin_url('wealth_management/patrimoine/' . $aRow['id']) . '">' . _l('edit') . '</a>';
    }

    if ($hasPermissionDelete) {
        $name .= ' | <a href="' . admin_url('wealth_management/delete/' . $aRow['id']) . '" class="text-danger _delete">' . _l('delete') . '</a>';
    }

    $name .= '</div>';

    $row[] = $name;

    // $row[] = '<a href="' . admin_url('clients/client/' . $aRow['clientid']) . '">' . $aRow['company'] . '</a>';

    $row[] = render_tags($aRow['tags']);

    $row[] = _d($aRow['start_date']);

    $row[] = _d($aRow['deadline']);

    $membersOutput = '';

    $members       = explode(',', $aRow['members']);
    $exportMembers = '';
    foreach ($members as $key => $member) {
        if ($member != '') {
            $members_ids = explode(',', $aRow['members_ids']);
            $member_id   = $members_ids[$key];
            $membersOutput .= '<a href="' . admin_url('profile/' . $member_id) . '">' .
                staff_profile_image($member_id, [
                    'staff-profile-image-small mright5',
                ], 'small', [
                    'data-toggle' => 'tooltip',
                    'data-title'  => $member,
                ]) . '</a>';
            // For exporting
            $exportMembers .= $member . ', ';
        }
    }

    $membersOutput .= '<span class="hide">' . trim($exportMembers, ', ') . '</span>';
    $row[] = $membersOutput;

    $status = get_patrimoine_status_by_id($aRow['status']);
    $row[]  = '<span class="label label inline-block patrimoine-status-' . $aRow['status'] . '" style="color:' . $status['color'] . ';border:1px solid ' . $status['color'] . '">' . $status['name'] . '</span>';

    // Custom fields add values
    foreach ($customFieldsColumns as $customFieldColumn) {
        $row[] = (strpos($customFieldColumn, 'date_picker_') !== false ? _d($aRow[$customFieldColumn]) : $aRow[$customFieldColumn]);
    }

    $row['DT_RowClass'] = 'has-row-options';

    $row = hooks()->apply_filters('patrimoines_table_row_data', $row, $aRow);

    $output['aaData'][] = $row;
}
