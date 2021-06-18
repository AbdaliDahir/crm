<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('usage_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-usage-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'usage'); return false;">
          <?php echo _l('new_patrimoine_usage') ?> 
        </a> 
        <a href='#' class='btn btn-info pull-right mright5 new-rapport-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'rapport'); return false;">
          <?php echo _l('new_patrimoine_rapport') ?> 
        <a href='#' class='btn btn-info pull-right mright5 new-bien-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'bien'); return false;">
          <?php echo _l('new_patrimoine_bien') ?> 
        </a> 

        <a href='#' class='btn btn-info pull-right mright5 new-usage-relation' onclick="edit_comment_patrimoine(<?php echo isset($usage_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($usage_comment) ? $usage_comment->id : 0 ?>, 'usage'); return false;">
          <?php echo isset($usage_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?> 
        </a>  

      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_usage'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"><?php echo _l('comment_title') ?></h4>
      <p id="usage_comment_text">
        <?php echo isset($usage_comment) ? $usage_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
    </div>    
  </div>
</div>

<div class="panel_s mbot30">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('rapport_title'); ?> </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-rapport-relation' onclick="edit_comment_patrimoine(<?php echo isset($rapport_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($rapport_comment) ? $rapport_comment->id : 0 ?>, 'rapport'); return false;">
          <?php echo isset($rapport_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?> 
        </a> 
      </div>
    </div>
  </div>
  
  <div class="panel-body">      
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_rapport'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> <?php echo _l('comment_title') ?></h4>
      <p id="rapport_comment_text">
        <?php echo isset($rapport_comment) ? $rapport_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
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
      <?php $this->load->view('wealth_management/patrimoine/tables/_bien'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"> 
        <?php echo _l('bien_qst_title') ?> 
        <?php if (isset($bien_qst)) { ?>
          <a href='#' class='btn-link text-underline text-danger h6 mright5 new-rapport-relation' onclick="edit_bien_qst_patrimoine(<?php echo $bien_qst->id ?>); return false;">
            <?php echo _l('update_patrimoine_bien_qst') ?> 
          </a> 
        <?php } else { ?>
          <a href='#' class='btn-link text-underline text-primary h6 mright5 new-rapport-relation' onclick="new_patremoione_bien_qst(<?php echo $patrimoine->id ?>); return false;">
            <?php echo _l('new_patrimoine_bien_qst') ?> 
          </a> 
        <?php } ?> 
      </h4>
      <div id="bien_qst_text"> 
        <div class="text mbot15">
          <strong class="p-r-30"><?php echo _l('bien_qst_capital') ?> :</strong>  
          <span><?php echo isset($bien_qst) ? $bien_qst->patr_bien_qst_capital : '......................' ?></span> 
        </div>
        <div class="text mbot15"> 
          <strong class="p-r-30"><?php echo _l('bien_qst_participations') ?> :</strong>
          <span> <?php echo isset($bien_qst) ? $bien_qst->patr_bien_qst_participations : '...........................' ?></span>
        </div>
        <div class="text mbot15">
          <strong class="p-r-30"><?php echo _l('bien_qst_immobilier') ?> :</strong>
          <span><?php echo isset($bien_qst) ? $bien_qst->patr_bien_qst_immobilier : '...........................' ?></span> 
        </div>
        <div class="text mbot15"> 
          <strong class="p-r-30"><?php echo _l('bien_qst_pact') ?> :</strong> 
          <span><?php echo isset($bien_qst) ? $bien_qst->patr_bien_qst_pact : '...........................' ?></span>
        </div>
      </div>
    </div>  
  </div>
</div>
