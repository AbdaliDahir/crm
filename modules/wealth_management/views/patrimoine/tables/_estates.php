<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_passifs_estates_designation'),
    _l('patrimoine_passifs_estates_valeur'),
    _l('patrimoine_passifs_estates_detenteur'),
    _l('patrimoine_passifs_estates_revenus'),
    _l('patrimoine_passifs_estates_revenus_fiscal'),
    _l('patrimoine_passifs_estates_taux'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs_estates', [], [
    'data-last-order-identifier' => 'patrimoines_passifs_estates',
    'data-default-order'  => get_table_last_order('patrimoines_passifs_estates'),
]);
