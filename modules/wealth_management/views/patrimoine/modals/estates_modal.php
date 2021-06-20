<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=estates'), array('id' => 'estates-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($estates)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
          
            <?php echo form_hidden('patrimoineid',  isset($estates) ? $estates->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $estates ? $estates->id : '') ?>
            <?php echo render_input('patr_passifs_designation', 'patrimoine_passifs_estates_designation', isset($estates) ? $estates->patr_passifs_designation : '','text'); ?>
            <?php echo render_input('patr_passifs_valeur', 'patrimoine_passifs_estates_valeur', isset($estates) ? $estates->patr_passifs_valeur : '','number'); ?>
            <?php echo render_input('patr_passifs_detenteur', 'patrimoine_passifs_estates_detenteur',  isset($estates) ? $estates->patr_passifs_detenteur : '','text'); ?>
            <?php echo render_input('patr_passifs_revenus', 'patrimoine_passifs_estates_revenus', isset($estates) ? $estates->patr_passifs_revenus : '','text'); ?>
            <?php echo render_input('patr_passifs_revenus_fiscal', 'patrimoine_passifs_estates_revenus_fiscal',  isset($estates) ? $estates->patr_passifs_revenus_fiscal : '','text'); ?> 
            <?php echo render_input('patr_passifs_taux', 'patrimoine_passifs_estates_taux',  isset($estates) ? $estates->patr_passifs_taux : '','number'); ?> 
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
      
      appValidateForm($('#estates-form'), {
        patr_passifs_designation: 'required',
        patr_passifs_valeur: {
          required: true,
          number: true
        },
        // patr_passifs_detenteur: 'required',
        // patr_passifs_revenus: 'required',
        // patr_passifs_revenus_fiscal: 'required',
        // patr_passifs_taux: {
        //   required: true,
        //   number: true
        // },
      }, patrimoine_form_handler);
      init_datepicker();
    });

  </script>
