<?php

defined('BASEPATH') or exit('No direct script access allowed');

$table_data = [
    _l('id'),
    _l('patrimoine_passifs_assurance_designation'),
    _l('patrimoine_passifs_assurance_capital'),
    _l('patrimoine_passifs_assurance_souscription'),
    _l('patrimoine_passifs_assurance_assure'),
    _l('patrimoine_passifs_assurance_benef'),
    _l('patrimoine_passifs_assurance_particularites'),
    'action'
];

render_datatable($table_data, isset($class) ?  $class : 'patrimoines_passifs_assurance', [], [
    'data-last-order-identifier' => 'patrimoines_passifs_assurance',
    'data-default-order'  => get_table_last_order('patrimoines_passifs_assurance'),
]);
