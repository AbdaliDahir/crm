<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> <div class="panel_s">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> Vos proches </div>
      </div>
      <div class="col-xs-6 text-right"> 
        <a href='#' class='btn btn-info pull-right mright5 new-proche-relation' onclick="new_patremoione_info_from_relation(<?php echo $patrimoine->id ?>, 'proche'); return false;">
          <?php echo _l('new_patrimoine_proches') ?> 
        </a> 
        
        <a href='#' class='btn btn-info pull-right mright5 new-proche-relation' onclick="edit_comment_patrimoine(<?php echo isset($proche_comment) ? 0 : $patrimoine->id ?>, <?php echo isset($proche_comment) ? $proche_comment->id : 0 ?>, 'proches'); return false;">
        <?php echo isset($proche_comment) ? _l('update_patrimoine_comment') : _l('new_patrimoine_comment') ?>  
        </a>  
      </div>
    </div>
  </div>
  <div class="panel-body">   
    <div class="tasks-table">
      <?php $this->load->view('wealth_management/patrimoine/tables/_proches'); ?>
      <hr/>
      <h4 class="mbot15 text-primary font-bold text-capitalize"><?php echo _l('comment_title') ?></h4>
      <p id="proches_comment_text">
        <?php echo isset($proche_comment) ? $proche_comment->patr_comment_text : _l('comment_empty') ?>
      </p>
    </div>  
  </div>
</div>
