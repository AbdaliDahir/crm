<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=rapport'), array('id' => 'rapport-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($rapport)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
            <?php echo render_input('patr_rapport_designation', 'patrimoine_rapport_designation', isset($rapport) ? $rapport->patr_rapport_designation : '','text'); ?>
            <?php echo render_input('patr_rapport_valeur', 'patrimoine_rapport_valeur', isset($rapport) ? $rapport->patr_rapport_valeur : '','number'); ?>
            <?php echo render_input('patr_rapport_detenteur', 'patrimoine_rapport_detenteur',  isset($rapport) ? $rapport->patr_rapport_detenteur : '','text'); ?>
            <?php echo render_input('patr_rapport_revenus_fiscal', 'patrimoine_rapport_revenus_fiscal',  isset($rapport) ? $rapport->patr_rapport_revenus_fiscal : '','text'); ?>
            <?php echo render_input('patr_rapport_charges', 'patrimoine_rapport_charges',  isset($rapport) ? $rapport->patr_rapport_charges : '','number'); ?>
            <?php echo render_input('patr_rapport_capital', 'patrimoine_rapport_capital',  isset($rapport) ? $rapport->patr_rapport_capital : '','number'); ?>
            <?php echo render_input('patr_rapport_duree', 'patrimoine_rapport_duree',  isset($rapport) ? $rapport->patr_rapport_duree : '','text'); ?>
            <?php echo render_input('patr_rapport_taux', 'patrimoine_rapport_taux',  isset($rapport) ? $rapport->patr_rapport_taux : '','number'); ?>
            <?php echo render_input('patr_rapport_deces', 'patrimoine_rapport_deces',  isset($rapport) ? $rapport->patr_rapport_deces : '','text'); ?> 
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
        patr_rapport_valeur: {
          required: true,
          number: true
        },
        patr_rapport_detenteur: 'required',
        patr_rapport_revenus_fiscal: 'required',
        patr_rapport_charges: {
          required: true,
          number: true
        },
            patr_rapport_capital: {
          required: true,
          number: true
        },
        patr_rapport_duree: 'required',
        patr_rapport_taux: {
          required: true,
          number: true
        },
        patr_rapport_deces: 'required',
        
      }, patrimoine_form_handler);
      init_datepicker();
    });
  </script>
