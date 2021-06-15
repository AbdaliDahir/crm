<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addRapport/' . $id), array('id' => 'rapport-form')); ?> <div
  class="modal fade<?php if (isset($rapport)) { echo ' edit'; } ?>" id="_rapport_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($rapport) ? $rapport->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $rapport ? $rapport->id : '') ?>
            <?php echo render_input('patr_rapport_designation', 'patremoine_rapport_designation', isset($rapport) ? $rapport->patr_rapport_designation : '','text'); ?>
            <?php echo render_input('patr_rapport_valeur', 'patremoine_rapport_valeur', isset($rapport) ? $rapport->patr_rapport_valeur : '','text'); ?>
            <?php echo render_input('patr_rapport_detenteur', 'patremoine_rapport_detenteur',  isset($rapport) ? $rapport->patr_rapport_detenteur : '','text'); ?>
            <?php echo render_input('patr_rapport_revenus_fiscal', 'patremoine_rapport_revenus_fiscal',  isset($rapport) ? $rapport->patr_rapport_revenus_fiscal : '','text'); ?>
            <?php echo render_input('patr_rapport_charges', 'patremoine_rapport_charges',  isset($rapport) ? $rapport->patr_rapport_charges : '','text'); ?>
            <?php echo render_input('patr_rapport_capital', 'patremoine_rapport_capital',  isset($rapport) ? $rapport->patr_rapport_capital : '','text'); ?>
            <?php echo render_input('patr_rapport_duree', 'patremoine_rapport_duree',  isset($rapport) ? $rapport->patr_rapport_duree : '','text'); ?>
            <?php echo render_input('patr_rapport_taux', 'patremoine_rapport_taux',  isset($rapport) ? $rapport->patr_rapport_taux : '','text'); ?>
            <?php echo render_input('patr_rapport_deces', 'patremoine_rapport_deces',  isset($rapport) ? $rapport->patr_rapport_deces : '','text'); ?> 
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
        <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
      </div>
    </div>
  </div> 
  <?php echo form_close(); ?>
  <script>
    $(function () { 
      appValidateForm($('#rapport-form'), {
        patr_rapport_designation: 'required',
        patr_rapport_valeur: 'required',
        patr_rapport_detenteur: 'required',
        patr_rapport_revenus_fiscal: 'required',
        patr_rapport_charges: 'required',
        patr_rapport_capital: 'required',
        patr_rapport_duree: 'required',
        patr_rapport_taux: 'required',
        patr_rapport_deces: 'required',
      }, rapport_form_handler);
      init_datepicker();
    });
  </script>
