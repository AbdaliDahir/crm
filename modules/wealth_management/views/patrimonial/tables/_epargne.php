<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patremoine_passifs_availability_designation'),
    _l('patremoine_passifs_availability_valeur'),
    _l('patremoine_passifs_availability_detenteur'),
    _l('patremoine_passifs_availability_date_ouverture'),
    _l('patremoine_passifs_availability_associee'),
    _l('patremoine_passifs_availability_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs_epargne', [], [
    'data-last-order-identifier' => 'patrimoines_passifs_epargne',
    'data-default-order'  => get_table_last_order('patrimoines_passifs_epargne'),
]);
