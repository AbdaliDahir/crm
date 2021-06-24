<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'patrimoines.id',
    'name',
    'start_date',
    'deadline',
    'progress',
    'status',
];


// _l('the_number_sign'),
// _l('patrimoine_name'),
// _l('patrimoine_start_date'),
// _l('patrimoine_deadline'),
// _l('patrimoine_status')

$sWhere = [];
$filter = [];


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

$sIndexColumn = 'id';
$sTable       = db_prefix().'patrimoines';

$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $sWhere);

$output       = $result['output'];
$rResult      = $result['rResult'];

foreach ($rResult as $aRow) {

    $row = [];

    for ($i = 0; $i < count($aColumns); $i++) { 
        $_data = '';

        if($aColumns[$i] == 'progress') {
            if ($aRow[$aColumns[$i]] == 100) {
                $color = 'success';
            } else if($aRow[$aColumns[$i]] > 50) {
                $color = 'primary';
            } else if ($aRow[$aColumns[$i]] < 50 && $aRow[$aColumns[$i]] > 20) {
                $color = 'warning';
            } else {
                $color = 'danger';
            }

            $_data .= '<div class="text-right progress-finance-status no-mtop no-mbot">';
            $_data .= $aRow[$aColumns[$i]] .'%';
            $_data .= '<div class="progress no-margin progress-bar-mini">';
            $_data .=  '<div class="progress-bar progress-bar-'. $color .' no-percent-text not-dynamic" role="progressbar" aria-valuenow="' . $aRow[$aColumns[$i]] .'" aria-valuemin="0" aria-valuemax="100" style="width: ' . $aRow[$aColumns[$i]] .'%" data-percent="'.$aRow[$aColumns[$i]].'">
            </div> ';
            $_data .= '</div>';
            $_data .= '</div>';
        } else if ($aColumns[$i] == 'status') {
            $status = get_patrimoine_status_by_id($aRow['status']);
            $row[]  = '<span class="label label inline-block patrimoine-status-' . $aRow['status'] . '" style="color:' . $status['color'] . ';border:1px solid ' . $status['color'] . '">' . $status['name'] . '</span>';
        } else {
            $_data = $aRow[$aColumns[$i]];
        }
        
        $row[] = $_data;

    }

    
    $output['aaData'][] = $row;

}
