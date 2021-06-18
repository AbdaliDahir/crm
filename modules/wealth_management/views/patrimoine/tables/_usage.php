<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_usage_designation'),
    _l('patrimoine_usage_valeur'),
    _l('patrimoine_usage_detenteur'),
    _l('patrimoine_usage_date_achat'),
    _l('patrimoine_usage_capital'),
    _l('patrimoine_usage_duree'),
    _l('patrimoine_usage_taux'),
    _l('patrimoine_usage_deces'),
    'action'
];

// $custom_fields = get_custom_fields('patrimoines_usage', ['show_on_table' => 1]);
// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

// $table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_usage', [], [
    'data-last-order-identifier' => 'patrimoines_usage',
    'data-default-order'  => get_table_last_order('patrimoines_usage'),
]);
