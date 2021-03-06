<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_passifs_epargne_designation'),
    _l('patrimoine_passifs_epargne_valeur'),
    _l('patrimoine_passifs_epargne_detenteur'),
    _l('patrimoine_passifs_epargne_date_ouverture'),
    _l('patrimoine_passifs_epargne_associee'),
    _l('patrimoine_passifs_epargne_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs_epargne', [], [
    'data-last-order-identifier' => 'patrimoines_passifs_epargne',
    'data-default-order'  => get_table_last_order('patrimoines_passifs_epargne'),
]);
