<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- patrimoine Tasks -->
<?php
if ($patrimoine->settings->hide_tasks_on_main_tasks_table == '1') {
    echo '<i class="fa fa-exclamation fa-2x pull-left" data-toggle="tooltip" data-title="' . _l('patrimoine_hide_tasks_settings_info') . '"></i>';
}
?>
<div class="tasks-table">
    <?php init_relation_tasks_table(array('data-new-rel-id' => $patrimoine->id, 'data-new-rel-type' => 'patrimoine')); ?>
</div>