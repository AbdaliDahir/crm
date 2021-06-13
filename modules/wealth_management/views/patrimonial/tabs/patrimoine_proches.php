<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> <div class="panel_s">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> Vos proches </div>
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php init_relation_proches_table(array('data-new-rel-id' => $patrimoine->id)); ?>
    </div>  
  </div>
</div>
