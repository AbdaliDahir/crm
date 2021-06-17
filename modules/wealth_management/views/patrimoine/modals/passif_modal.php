<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patremoine_id=&type=passif'), array('id' => 'passif-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($passif)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel"
  <?php if ($this->input->get('opened_from_lead_id')) { echo 'data-lead-id=' . $this->input->get('opened_from_lead_id'); } ?>>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $title; ?> </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12"> 
            <?php echo form_hidden('patrimoineid',  isset($passif) ? $passif->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $passif ? $passif->id : '') ?>
            <?php echo render_input('patr_passifs_designation', 'patremoine_passifs_designation', isset($passif) ? $passif->patr_passifs_designation : '','text'); ?>
            <?php echo render_input('patr_passifs_capital', 'patremoine_passifs_capital', isset($passif) ? $passif->patr_passifs_capital : '','text'); ?>
            <?php echo render_input('patr_passifs_duree', 'patremoine_passifs_duree',  isset($passif) ? $passif->patr_passifs_duree : '','text'); ?>
            <?php echo render_input('patr_passifs_taux', 'patremoine_passifs_taux',  isset($passif) ? $passif->patr_passifs_taux : '','text'); ?>
            <?php echo render_input('patr_passifs_deces', 'patremoine_passifs_deces',  isset($passif) ? $passif->patr_passifs_deces : '','text'); ?>
            <?php echo render_input('patr_passifs_particularites', 'patremoine_passifs_particularites',  isset($passif) ? $passif->patr_passifs_particularites : '','text'); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
        <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
      </div>
    </div>
  </div> <?php echo form_close(); ?> <script>
    $(function () {
      
      appValidateForm($('#passif-form'), {
        patr_passifs_designation: 'required',
        patr_passifs_capital: 'required',
        patr_passifs_duree: 'required',
        patr_passifs_taux: 'required',
        patr_passifs_deces: 'required',
        patr_passifs_particularites: 'required',
      }, patremoine_form_handler);
      init_datepicker();
    });

  </script>
