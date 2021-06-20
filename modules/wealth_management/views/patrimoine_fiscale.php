<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> 
<div class="panel_s">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('patrimoine_fiscale_title'); ?> </div>
      </div> 
    </div>
  </div>
  <div class="panel-body"> 
    <?php echo form_open(admin_url('wealth_management/save_fiscale/'.$patrimoine->id)); ?>
      <?php echo render_textarea('patr_fiscale_description','',$fiscale,array(),array(),'','tinymce'); ?>
      <button type="submit" class="btn btn-info"><?php echo _l('patrimoine_save_fiscale'); ?></button>
      <?php echo form_close(); ?>
  </div>
</div>

<div class="panel_s">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> <?php echo _l('patrimoine_donation_title'); ?> </div>
      </div> 
    </div>
  </div>
  <div class="panel-body"> 
    <?php echo form_open(admin_url('wealth_management/save_donation/'.$patrimoine->id)); ?>
      <?php echo render_textarea('patr_donation_description','',$donation,array(),array(),'','tinymce'); ?>
      <button type="submit" class="btn btn-info"><?php echo _l('patrimoine_save_donation'); ?></button>
      <?php echo form_close(); ?>
  </div>
</div>
