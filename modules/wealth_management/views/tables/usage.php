<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'patrimoines_usage.id',
    'patr_usage_designation',
    'patr_usage_valeur',
    'patr_usage_detenteur',
    'patr_usage_date_achat',
    'patr_usage_capital',
    'patr_usage_duree',
    'patr_usage_taux',
    'patr_usage_deces',
];

$sWhere = [];

if ($patrimoine_id != '') {
    array_push($sWhere, 'WHERE patrimoineid = ' . $patrimoine_id );
}


// if ($this->ci->input->post('activity_log_date')) {
//     array_push($sWhere, 'AND date LIKE "' . $this->ci->db->escape_like_str(to_sql_date($this->ci->input->post('activity_log_date'))) . '%" ESCAPE \'!\'');
// }

$sIndexColumn = 'id';
$sTable       = db_prefix().'patrimoines_usage';

$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $sWhere);
$output       = $result['output'];
$rResult      = $result['rResult'];

foreach ($rResult as $aRow) {

    $row = [];

    $name = '';

    for ($i = 0; $i < count($aColumns); $i++) {
        
        $_data = $aRow[$aColumns[$i]];

        $row[] = $_data;
    }

    $name .= '<div class="actions">';
        
    $name .=  ' <a href="#" onclick="edit_usage(' . $aRow[$aColumns[0]] . ', ' . 3 .'); return false">' . _l('edit') . '</a>';
    
    $name .= ' | <a href="' . admin_url('wealth_management/delete_usage/' . $aRow[$aColumns[0]]) . '" class="text-danger _delete">' . _l('delete') . '</a>';

    $name .= '</div>';

    $row[] = $name;
    
    $output['aaData'][] = $row;

}
