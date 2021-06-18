<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_rapport_designation'),
    _l('patrimoine_rapport_valeur'),
    _l('patrimoine_rapport_detenteur'),
    _l('patrimoine_rapport_revenus_fiscal'),
    _l('patrimoine_rapport_charges'),
    _l('patrimoine_rapport_capital'),
    _l('patrimoine_rapport_duree'),
    _l('patrimoine_rapport_taux'),
    _l('patrimoine_rapport_deces'),
    'action'
];

// $custom_fields = get_custom_fields('patrimoines_immo_rapport', ['show_on_table' => 1]);
// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

// $table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_immo_rapport', [], [
    'data-last-order-identifier' => 'patrimoines_immo_rapport',
    'data-default-order'  => get_table_last_order('patrimoines_immo_rapport'),
]);
