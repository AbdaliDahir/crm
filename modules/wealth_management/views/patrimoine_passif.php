<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('passif_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-usage-relation' onclick="new_usage_from_relation(<?php echo $patrimoine->id ?>); return false;">
          <?php echo _l('new_patrimonial_usage') ?> 
        </a> 
        <a href='#' class='btn btn-info pull-right mright5 new-rapport-relation' onclick="new_rapport_from_relation(<?php echo $patrimoine->id ?>); return false;">
          <?php echo _l('new_patrimonial_rapport') ?> 
        <a href='#' class='btn btn-info pull-right mright5 new-bien-relation' onclick="new_bien_from_relation(<?php echo $patrimoine->id ?>); return false;">
          <?php echo _l('new_patrimonial_bien') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_passif'); ?>
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
      <?php $this->load->view('wealth_management/patrimonial/tables/_assurance'); ?>
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
      <?php $this->load->view('wealth_management/patrimonial/tables/_epargne'); ?>
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
      <?php $this->load->view('wealth_management/patrimonial/tables/_estates'); ?>
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
      <?php $this->load->view('wealth_management/patrimonial/tables/_availability'); ?>
    </div>  
  </div>
</div>
