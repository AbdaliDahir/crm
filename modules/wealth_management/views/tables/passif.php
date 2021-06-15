<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'patrimoines_passifs.id',
    'patr_passifs_designation',
    'patr_passifs_capital',
    'patr_passifs_duree',
    'patr_passifs_taux',
    'patr_passifs_deces',
    'patr_passifs_particularites',
];

$sWhere = [];

if ($patrimoine_id != '') {
    array_push($sWhere, 'WHERE patrimoineid = ' . $patrimoine_id );
}


// if ($this->ci->input->post('activity_log_date')) {
//     array_push($sWhere, 'AND date LIKE "' . $this->ci->db->escape_like_str(to_sql_date($this->ci->input->post('activity_log_date'))) . '%" ESCAPE \'!\'');
// }

$sIndexColumn = 'id';
$sTable       = db_prefix().'patrimoines_passifs';

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
        
    $name .=  ' <a href="#" onclick="edit_passif(' . $aRow[$aColumns[0]] . ', ' . 3 .'); return false">' . _l('edit') . '</a>';
    
    $name .= ' | <a href="' . admin_url('wealth_management/delete_passif/' . $aRow[$aColumns[0]]) . '" class="text-danger _delete">' . _l('delete') . '</a>';

    $name .= '</div>';

    $row[] = $name;
    
    $output['aaData'][] = $row;

}
