<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addBienQst/' . $id ), array('id' => 'bien_qst-form')); ?> <div
  class="modal _bien_qst_modal fade<?php if (isset($bien_qst)) { echo ' edit'; } ?>" id="_bien_qst_modal" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel"
  <?php if ($this->input->get('opened_from_lead_id')) { echo 'data-lead-id=' . $this->input->get('opened_from_lead_id'); } ?>>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $title; ?> </h4>
      </div>

      <!-- $this->values = ['patr_bien_qst_capital','patr_bien_qst_participations','patr_bien_qst_immobilier','patr_bien_charges','patr_bien_qst_pact']; -->

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12"> 
            <?php echo form_hidden('patrimoineid',  isset($bien_qst) ? $bien_qst->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', isset($bien_qst) ? $bien_qst->id : '') ?>
            <?php echo render_input('patr_bien_qst_capital', 'bien_qst_capital', isset($bien_qst) ? $bien_qst->patr_bien_qst_capital : '','text'); ?>
            <?php echo render_input('patr_bien_qst_participations', 'bien_qst_participations', isset($bien_qst) ? $bien_qst->patr_bien_qst_participations : '','text'); ?>
            <?php echo render_input('patr_bien_qst_immobilier', 'bien_qst_immobilier',  isset($bien_qst) ? $bien_qst->patr_bien_qst_immobilier : '','text'); ?>
            <?php echo render_input('patr_bien_qst_pact', 'bien_qst_pact',  isset($bien_qst) ? $bien_qst->patr_bien_qst_pact : '','text'); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
        <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
      </div>
    </div>
  </div> <?php echo form_close(); ?> 
