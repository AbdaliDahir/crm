<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=assurance'), array('id' => 'assurance-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($assurance)) { echo ' edit'; } ?>" id="_assurance_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($assurance) ? $assurance->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $assurance ? $assurance->id : '') ?>
            <?php echo render_input('patr_passifs_designation', 'patrimoine_passifs_assurance_designation', isset($assurance) ? $assurance->patr_passifs_designation : '','text'); ?>
            <?php echo render_input('patr_passifs_capital', 'patrimoine_passifs_assurance_capital', isset($assurance) ? $assurance->patr_passifs_capital : '','number'); ?>
            <?php echo render_input('patr_passifs_souscription', 'patrimoine_passifs_assurance_souscription',  isset($assurance) ? $assurance->patr_passifs_souscription : '','text'); ?>
            <?php echo render_input('patr_passifs_assure', 'patrimoine_passifs_assurance_assure',  isset($assurance) ? $assurance->patr_passifs_assure : '','text'); ?>
            <?php echo render_input('patr_passifs_benef', 'patrimoine_passifs_assurance_benef',  isset($assurance) ? $assurance->patr_passifs_benef : '','text'); ?>
            <?php echo render_input('patr_passifs_particularites', 'patrimoine_passifs_assurance_particularites',  isset($assurance) ? $assurance->patr_passifs_particularites : '','text'); ?>
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
      
      appValidateForm($('#assurance-form'), {
        patr_passifs_designation: 'required',
        // patr_passifs_capital: {
        //   required: true,
        //   number: true
        // },
        // patr_passifs_souscription: 'required',
        // patr_passifs_assure: 'required',
        // patr_passifs_benef: 'required',
        // patr_passifs_particularites: 'required',
      }, patrimoine_form_handler);
      init_datepicker();
    });

  </script>
