<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> <div class="panel_s">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> Vos proches </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-proche-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'proche'); return false;">
          <?php echo _l('new_patrimonial_proches') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_proches'); ?>
    </div>  
  </div>
</div>
