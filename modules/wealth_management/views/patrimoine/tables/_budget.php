<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patremoine_budget_designation'),
    _l('patremoine_budget_montant'),
    'action'
];

// patrimoines_budget

// $custom_fields = get_custom_fields('patrimoines_budget', ['show_on_table' => 1]);
// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

// $table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_budget', [], [
    'data-last-order-identifier' => 'patrimoines_budget',
    'data-default-order'  => get_table_last_order('patrimoines_budget'),
]);
