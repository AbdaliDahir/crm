<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('usage_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-usage-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'usage'); return false;">
          <?php echo _l('new_patrimonial_usage') ?> 
        </a> 
        <a href='#' class='btn btn-info pull-right mright5 new-rapport-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'rapport'); return false;">
          <?php echo _l('new_patrimonial_rapport') ?> 
        <a href='#' class='btn btn-info pull-right mright5 new-bien-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'bien'); return false;">
          <?php echo _l('new_patrimonial_bien') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_usage'); ?>
    </div>    
  </div>
</div>

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('rapport_title'); ?> </div>
      </div>
    </div>
  </div>
  
  <div class="panel-body">      
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_rapport'); ?>
    </div>     
  </div>
</div>


<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('bien_title'); ?> </div>
      </div> 
    </div>
  </div>
  <div class="panel-body">       
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_bien'); ?>
    </div>  
  </div>
</div>
