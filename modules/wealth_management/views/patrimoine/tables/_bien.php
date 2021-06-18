<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_bien_designation'),
    _l('patrimoine_bien_valeur'),
    _l('patrimoine_bien_detenteur'), 
    _l('patrimoine_bien_charges'),
    _l('patrimoine_bien_particularite'),
    'action'
];

// $custom_fields = get_custom_fields('patrimoines_biens_pro', ['show_on_table' => 1]);
// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

// $table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_biens_pro', [], [
    'data-last-order-identifier' => 'patrimoines_biens_pro',
    'data-default-order'  => get_table_last_order('patrimoines_biens_pro'),
]);
