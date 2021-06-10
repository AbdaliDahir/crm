<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    'subject',
    'last_activity',
    '(SELECT COUNT(*) FROM ' . db_prefix() . 'patrimoinediscussioncomments WHERE discussion_id = ' . db_prefix() . 'patrimoinediscussions.id AND discussion_type="regular") as totalComments',
    'show_to_customer',
    ];
$sIndexColumn = 'id';
$sTable       = db_prefix() . 'patrimoinediscussions';
$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, [], ['AND patrimoine_id=' . $this->ci->db->escape_str($patrimoine_id)], [
    'id',
    'description',
    ]);
$output  = $result['output'];
$rResult = $result['rResult'];
foreach ($rResult as $aRow) {
    $row = [];

    $subject = '<a href="' . admin_url('wealth_management/view/' . $patrimoine_id . '?group=patrimoine_discussions&discussion_id=' . $aRow['id']) . '">' . $aRow['subject'] . '</a>';
    if (has_permission('patrimoines', '', 'edit') || has_permission('patrimoines', '', 'delete')) {
        $subject .= '<div class="row-options">';
        if (has_permission('patrimoines', '', 'edit')) {
            $subject .= '<a href="#" onclick="edit_discussion(this,' . $aRow['id'] . '); return false;" data-subject="' . $aRow['subject'] . '" data-description="' . htmlentities(clear_textarea_breaks($aRow['description'])) . '" data-show-to-customer="' . $aRow['show_to_customer'] . '">' . _l('edit') . '</a>';
        }
        if (has_permission('patrimoines', '', 'delete')) {
            $subject .= (has_permission('patrimoines', '', 'edit') ? ' | ' : '') . '<a href="#" onclick="delete_patrimoine_discussion(' . $aRow['id'] . '); return false;" class="text-danger">' . _l('delete') . '</a>';
        }
        $subject .= '</div>';
    }

    $row[] = $subject;

    if (!is_null($aRow['last_activity'])) {
        $row[] = '<span class="text-has-action is-date" data-toggle="tooltip" data-title="' . _dt($aRow['last_activity']) . '">' . time_ago($aRow['last_activity']) . '</span>';
    } else {
        $row[] = _l('patrimoine_discussion_no_activity');
    }

    $row[] = $aRow['totalComments'];

    if ($aRow['show_to_customer'] == 1) {
        $row[] = _l('patrimoine_discussion_visible_to_customer_yes');
    } else {
        $row[] = _l('patrimoine_discussion_visible_to_customer_no');
    }

    $row['DT_RowClass'] = 'has-row-options';
    $output['aaData'][] = $row;
}
