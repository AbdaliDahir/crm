<?php defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
  _l('the_number_sign'),
  _l('patrimoine_name'),
  _l('patrimoine_start_date'),
  _l('patrimoine_deadline'),
  _l('patrimoine_progress'),
  _l('patrimoine_status'),
];

// $custom_fields = get_custom_fields('patrimoines', ['show_on_table' => 1]);

// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

$table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_dashboard', [], [
  'data-last-order-identifier' => 'patrimoines_dashboard',
  'data-default-order'  => get_table_last_order('patrimoines_dashboard'),
]);
