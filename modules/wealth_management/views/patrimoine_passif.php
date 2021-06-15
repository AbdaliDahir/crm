<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('passif_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-passif-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'passif'); return false;">
          <?php echo _l('new_patrimonial_passif') ?> 
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
        <div class="info-title text-left mtop5"> <?php echo _l('assurance_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-assurance-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'assurance'); return false;">
          <?php echo _l('new_patrimonial_assurance') ?> 
        </a> 
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
        <div class="info-title text-left mtop5"> <?php echo _l('epargne_title'); ?> </div>
      </div> 
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-epargne-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'epargne'); return false;">
          <?php echo _l('new_patrimonial_epargne') ?> 
        </a> 
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
        <div class="info-title text-left mtop5"> <?php echo _l('estates_title'); ?> </div>
      </div> 
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-estates-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'estates'); return false;">
          <?php echo _l('new_patrimonial_estates') ?> 
        </a> 
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
        <div class="info-title text-left mtop5"> <?php echo _l('availability_title'); ?> </div>
      </div> 
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-availability-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'availability'); return false;">
          <?php echo _l('new_patrimonial_availability') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">       
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimonial/tables/_availability'); ?>
    </div>  
  </div>
</div>
