<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patremoine_id=&type=availability'), array('id' => 'availability-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($availability)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
          
            <?php echo form_hidden('patrimoineid',  isset($availability) ? $availability->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $availability ? $availability->id : '') ?>
            <?php echo render_input('patr_passifs_designation', 'patremoine_passifs_availability_designation', isset($availability) ? $availability->patr_passifs_designation : '','text'); ?>
            <?php echo render_input('patr_passifs_valeur', 'patremoine_passifs_availability_valeur', isset($availability) ? $availability->patr_passifs_valeur : '','text'); ?>
            <?php echo render_input('patr_passifs_detenteur', 'patremoine_passifs_availability_detenteur',  isset($availability) ? $availability->patr_passifs_detenteur : '','text'); ?>
            <?php echo render_input('patr_passifs_particularites', 'patremoine_passifs_availability_particularites',  isset($availability) ? $availability->patr_passifs_particularites : '','text'); ?> 
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
      
      appValidateForm($('#availability-form'), {
        patr_passifs_designation: 'required',
        patr_passifs_valeur: 'required',
        patr_passifs_detenteur: 'required',
        patr_passifs_particularites: 'required',
      }, patremoine_form_handler);
      init_datepicker();
    });

  </script>
