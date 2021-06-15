<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patremoine_passifs_estates_designation'),
    _l('patremoine_passifs_estates_capital'),
    _l('patremoine_passifs_estates_duree'),
    _l('patremoine_passifs_estates_taux'),
    _l('patremoine_passifs_estates_deces'),
    _l('patremoine_passifs_estates_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs', [], [
    'data-last-order-identifier' => 'patrimoines_passifs',
    'data-default-order'  => get_table_last_order('patrimoines_passifs'),
]);
