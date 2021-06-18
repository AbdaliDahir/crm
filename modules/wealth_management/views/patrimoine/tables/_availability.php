<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_passifs_availability_designation'),
    _l('patrimoine_passifs_availability_valeur'),
    _l('patrimoine_passifs_availability_detenteur'),
    _l('patrimoine_passifs_availability_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs_availability', [], [
    'data-last-order-identifier' => 'patrimoines_passifs_availability',
    'data-default-order'  => get_table_last_order('patrimoines_passifs_availability'),
]);
