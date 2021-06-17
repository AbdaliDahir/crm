<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('budget_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-budget-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'budget'); return false;">
          <?php echo _l('new_patrimoine_budget') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_budget'); ?>
    </div>    
  </div>
</div>
