<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('passif_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-passif-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'passif'); return false;">
          <?php echo _l('new_patrimoine_passif') ?> 
        </a> 
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_passif'); ?>
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
          <?php echo _l('new_patrimoine_assurance') ?> 
        </a> 
        
        <a href='#' class='btn btn-info pull-right mright5 new-assurance-relation' onclick="edit_comment_patrimoine(<?php echo isset($assurance_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($assurance_comment) ? $assurance_comment->id : 0 ?>, 'assurance'); return false;">
        <?php echo isset($assurance_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?> 
        </a>  
        
      </div>
    </div>
  </div>
  <div class="panel-body">      
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_assurance'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> <?php echo _l('comment_title') ?></h4>
      <p id="assurance_comment_text">
        <?php echo isset($assurance_comment) ? $assurance_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
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
          <?php echo _l('new_patrimoine_epargne') ?> 
        </a> 

        <a href='#' class='btn btn-info pull-right mright5 new-epargne-relation' onclick="edit_comment_patrimoine(<?php echo isset($epargne_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($epargne_comment) ? $epargne_comment->id : 0 ?>, 'epargne'); return false;">
        <?php echo isset($epargne_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?> 
        </a>  

      </div>
    </div>
  </div>
  <div class="panel-body">       
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_epargne'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> <?php echo _l('comment_title') ?></h4>
      <p id="epargne_comment_text">
        <?php echo isset($epargne_comment) ? $epargne_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
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
          <?php echo _l('new_patrimoine_estates') ?> 
        </a> 

        <a href='#' class='btn btn-info pull-right mright5 new-estates-relation' onclick="edit_comment_patrimoine(<?php echo isset($estates_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($estates_comment) ? $estates_comment->id : 0 ?>, 'estates'); return false;">
        <?php echo isset($estates_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?>  
        </a>  

      </div>
    </div>
  </div>
  <div class="panel-body">       
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_estates'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> <?php echo _l('comment_title') ?></h4>
      <p id="estates_comment_text">
        <?php echo isset($estates_comment) ? $estates_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
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
          <?php echo _l('new_patrimoine_availability') ?> 
        </a> 
        
        <a href='#' class='btn btn-info pull-right mright5 new-availability-relation' onclick="edit_comment_patrimoine(<?php echo isset($availability_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($availability_comment) ? $availability_comment->id : 0 ?>, 'availability'); return false;">
        <?php echo isset($availability_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?> 
        </a>  

      </div>
    </div>
  </div>
  <div class="panel-body">       
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_availability'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> <?php echo _l('comment_title') ?></h4>
      <p id="availability_comment_text">
        <?php echo isset($availability_comment) ? $availability_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
    </div>  
  </div>
</div>
