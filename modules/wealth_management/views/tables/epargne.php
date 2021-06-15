<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'patrimoines_passifs_epargne.id',
    'patr_passifs_designation',
    'patr_passifs_valeur',
    'patr_passifs_detenteur',
    'patr_passifs_date_ouverture',
    'patr_passifs_associee', 
    'patr_passifs_particularites'
];

$sWhere = [];

if ($patrimoine_id != '') {
    array_push($sWhere, 'WHERE patrimoineid = ' . $patrimoine_id );
}

$sIndexColumn = 'id';
$sTable       = db_prefix().'patrimoines_passifs_epargne';

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
        
    $name .=  ' <a href="#" onclick="edit_epargne(' . $aRow[$aColumns[0]] . ', ' . 3 .'); return false">' . _l('edit') . '</a>';
    
    $name .= ' | <a href="' . admin_url('wealth_management/delete_epargne/' . $aRow[$aColumns[0]]) . '" class="text-danger _delete">' . _l('delete') . '</a>';

    $name .= '</div>';

    $row[] = $name;
    
    $output['aaData'][] = $row;

}
