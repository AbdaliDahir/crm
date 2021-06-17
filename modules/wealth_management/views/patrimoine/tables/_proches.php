<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('proches_username'),
    _l('proches_birthday'),
    _l('proches_lien'),
    _l('proches_charge'),
    _l('proches_particularité'),
    _l('proches_contact_tel'),
    _l('proches_contact_email'),
    _l('proches_contact_address'),
    _l('proches_contact_option'),
    'action'
];

// $custom_fields = get_custom_fields('patrimoines_proches', ['show_on_table' => 1]);
// foreach ($custom_fields as $field) {
//   array_push($table_data, $field['name']);
// }

// $table_data = hooks()->apply_filters('patrimoines_table_columns', $table_data);

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_proches', [], [
    'data-last-order-identifier' => 'patrimoines_proches',
    'data-default-order'  => get_table_last_order('patrimoines_proches'),
]);
