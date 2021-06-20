<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=usage'), array('id' => 'usage-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($usage)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
            <?php echo render_input('patr_usage_designation', 'patrimoine_usage_designation', isset($usage) ? $usage->patr_usage_designation : '','text'); ?>
            <?php echo render_input('patr_usage_valeur', 'patrimoine_usage_valeur', isset($usage) ? $usage->patr_usage_valeur : '','number'); ?>
            <?php echo render_input('patr_usage_detenteur', 'patrimoine_usage_detenteur',  isset($usage) ? $usage->patr_usage_detenteur : '','text'); ?>
            <?php echo render_input('patr_usage_charges', 'patrimoine_usage_charges',  isset($usage) ? $usage->patr_usage_charges : '','number'); ?>
            <?php echo render_date_input('patr_usage_date_achat','patrimoine_usage_date_achat',  $usage ? $usage->patr_usage_date_achat: ''); ?> 
            <?php echo render_input('patr_usage_capital', 'patrimoine_usage_capital',  isset($usage) ? $usage->patr_usage_capital : '','number'); ?>
            <?php echo render_input('patr_usage_duree', 'patrimoine_usage_duree',  isset($usage) ? $usage->patr_usage_duree : '','text'); ?>
            <?php echo render_input('patr_usage_taux', 'patrimoine_usage_taux',  isset($usage) ? $usage->patr_usage_taux : '','number'); ?>
            <?php echo render_input('patr_usage_deces', 'patrimoine_usage_deces',  isset($usage) ? $usage->patr_usage_deces : '','text'); ?> 
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
        patr_usage_valeur: {
          required: true,
          number: true
        },
        // patr_usage_detenteur: 'required',
        // patr_usage_date_achat: {
        //   required: false,
        //   date: true
        // },
        // patr_usage_capital: {
        //   required: false,
        //   number: true
        // },
        // patr_usage_charges: {
        //   required: false,
        //   number: true
        // },
        // patr_usage_taux: {
        //   required: false,
        //   number: true
        // }
      }, patrimoine_form_handler);
      init_datepicker();
    });

  </script>
