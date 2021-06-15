<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addUsage/' . $id), array('id' => 'usage-form')); ?> <div
  class="modal fade<?php if (isset($usage)) { echo ' edit'; } ?>" id="_usage_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($usage) ? $usage->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $usage ? $usage->id : '') ?>
            <?php echo render_input('patr_usage_designation', 'patremoine_usage_designation', isset($usage) ? $usage->patr_usage_designation : '','text'); ?>
            <?php echo render_input('patr_usage_valeur', 'patremoine_usage_valeur', isset($usage) ? $usage->patr_usage_valeur : '','text'); ?>
            <?php echo render_input('patr_usage_detenteur', 'patremoine_usage_detenteur',  isset($usage) ? $usage->patr_usage_detenteur : '','text'); ?>
            <?php echo render_date_input('patr_usage_date_achat','patremoine_usage_date_achat',  isset($usage) ? $usage->patr_usage_date_achat : ''); ?>
            
            <?php echo render_input('patr_usage_capital', 'patremoine_usage_capital',  isset($usage) ? $usage->patr_usage_capital : '','text'); ?>
            <?php echo render_input('patr_usage_duree', 'patremoine_usage_duree',  isset($usage) ? $usage->patr_usage_duree : '','text'); ?>
            <?php echo render_input('patr_usage_taux', 'patremoine_usage_taux',  isset($usage) ? $usage->patr_usage_taux : '','text'); ?>
            <?php echo render_input('patr_usage_deces', 'patremoine_usage_deces',  isset($usage) ? $usage->patr_usage_deces : '','text'); ?> 
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
      
      appValidateForm($('#usage-form'), {
        patr_usage_designation: 'required',
        patr_usage_valeur: 'required',
        patr_usage_detenteur: 'required',
        patr_usage_date_achat: 'required',
        patr_usage_capital: 'required',
        patr_usage_duree: 'required',
        patr_usage_taux: 'required',
        patr_usage_deces: 'required',
      }, usage_form_handler);
      init_datepicker();
    });

  </script>
