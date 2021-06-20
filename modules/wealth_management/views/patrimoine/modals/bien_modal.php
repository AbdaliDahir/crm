<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=bien'), array('id' => 'bien-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($bien)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($bien) ? $bien->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $bien ? $bien->id : '') ?>
            <?php echo render_input('patr_bien_designation', 'patrimoine_bien_designation', isset($bien) ? $bien->patr_bien_designation : '','text'); ?>
            <?php echo render_input('patr_bien_valeur', 'patrimoine_bien_valeur', isset($bien) ? $bien->patr_bien_valeur : '','number'); ?>
            <?php echo render_input('patr_bien_detenteur', 'patrimoine_bien_detenteur',  isset($bien) ? $bien->patr_bien_detenteur : '','text'); ?>
            <?php echo render_input('patr_bien_charges', 'patrimoine_bien_charges',  isset($bien) ? $bien->patr_bien_charges : '','number'); ?>
            <?php echo render_input('patr_bien_particularites', 'patrimoine_bien_particularite',  isset($bien) ? $bien->patr_bien_particularites : '','text'); ?>
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
      
      appValidateForm($('#bien-form'), {
        patr_bien_designation: 'required',
        patr_bien_valeur: {
          required: true,
          number: true
        },
        // patr_bien_detenteur: 'required',
        // patr_bien_charges: {
        //   required: true,
        //   number: true
        // },
        // patr_bien_particularites: 'required',
      }, patrimoine_form_handler);
      init_datepicker();
    });

  </script>
