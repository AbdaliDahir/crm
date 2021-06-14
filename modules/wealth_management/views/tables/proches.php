<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
  db_prefix() . 'patrimoines_proches.id',
  'patr_proches_username',
  'patr_proches_birthday',
  'patr_proches_lien_parente',
  'patr_proches_charge',
  'patr_proches_particularites'
];

$sWhere = [];

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
    for ($i = 0; $i < count($aColumns); $i++) {
        $_data = $aRow[$aColumns[$i]];
        if ($aColumns[$i] == 'patr_proches_birthday') {
            $_data = _dt($_data);
        }
        $row[] = $_data;
    }
    $output['aaData'][] = $row;
}
