<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'patrimoines_proches.id',
    'patr_proches_username',
    'patr_proches_birthday',
    'patr_proches_lien_parente',
    'patr_proches_charge',
    'patr_proches_particularites',
    'patr_proches_tele',
    'patr_proches_email',
    'patr_proches_address',
    'patr_proches_contact'
];

$sWhere = [];


if ($patrimoine_id != '') {
    array_push($sWhere, 'WHERE patrimoineid = ' . $patrimoine_id );
}


// if ($this->ci->input->post('activity_log_date')) {
//     array_push($sWhere, 'AND date LIKE "' . $this->ci->db->escape_like_str(to_sql_date($this->ci->input->post('activity_log_date'))) . '%" ESCAPE \'!\'');
// }

$sIndexColumn = 'id';
$sTable       = db_prefix().'patrimoines_proches';

$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $sWhere);
$output       = $result['output'];
$rResult      = $result['rResult'];

foreach ($rResult as $aRow) {

    $row = [];

    $name = '';

    for ($i = 0; $i < count($aColumns); $i++) {
        
        $_data = $aRow[$aColumns[$i]];
        
        if($aColumns[$i] == 'patr_proches_lien_parente') {
            if($_data === '1') {
                $_data = _l('proches_parente_e_parent');
            }
            if($_data === '0') {
                $_data = _l('proches_parente_e_petit');
            }
        }

        if($aColumns[$i] == 'patr_proches_contact') {
            if($_data === '1') {
                $_data = _l('proche_contact_yes');
            }
            if($_data === '0') {
                $_data = _l('proche_contact_no');
            }
        }

        $row[] = $_data;
    }

    $name .= '<div class="actions">';
        
    $name .=  ' <a href="#" onclick="edit_info_patrimoine(' . $aRow[$aColumns[0]] . ', \'proche\'); return false">' . _l('edit') . '</a>';
    
    $name .= ' | <a href="' . admin_url('wealth_management/delete_proche/' . $aRow[$aColumns[0]]) . '" class="text-danger _delete">' . _l('delete') . '</a>';

    $name .= '</div>';

    $row[] = $name;
    
    $output['aaData'][] = $row;

}
