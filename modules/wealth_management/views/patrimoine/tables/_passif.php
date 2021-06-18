<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_passifs_designation'),
    _l('patrimoine_passifs_capital'),
    _l('patrimoine_passifs_duree'),
    _l('patrimoine_passifs_taux'),
    _l('patrimoine_passifs_deces'),
    _l('patrimoine_passifs_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs', [], [
    'data-last-order-identifier' => 'patrimoines_passifs',
    'data-default-order'  => get_table_last_order('patrimoines_passifs'),
]);
