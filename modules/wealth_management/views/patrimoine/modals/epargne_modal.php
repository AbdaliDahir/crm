<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=epargne'), array('id' => 'epargne-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($epargne)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($epargne) ? $epargne->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $epargne ? $epargne->id : '') ?>
            <?php echo render_input('patr_passifs_designation', 'patrimoine_passifs_epargne_designation', isset($epargne) ? $epargne->patr_passifs_designation : '','text'); ?>
            <?php echo render_input('patr_passifs_valeur', 'patrimoine_passifs_epargne_valeur', isset($epargne) ? $epargne->patr_passifs_valeur : '','number'); ?>
            <?php echo render_input('patr_passifs_detenteur', 'patrimoine_passifs_epargne_detenteur',  isset($epargne) ? $epargne->patr_passifs_detenteur : '','text'); ?>
            <?php echo render_date_input('patr_passifs_date_ouverture','patrimoine_passifs_epargne_date_ouverture',  $epargne ? $epargne->patr_passifs_date_ouverture: ''); ?>
            <?php echo render_input('patr_passifs_associee', 'patrimoine_passifs_epargne_associee', isset($epargne) ? $epargne->patr_passifs_associee : '','text'); ?>
            <?php echo render_input('patr_passifs_particularites', 'patrimoine_passifs_epargne_particularites',  isset($epargne) ? $epargne->patr_passifs_particularites : '','text'); ?> 
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
      
      appValidateForm($('#epargne-form'), {
        patr_passifs_designation: 'required',
        patr_passifs_valeur: {
          required: true,
          number: true
        },
        // patr_passifs_detenteur: 'required',
        // patr_passifs_date_ouverture: 'required',
        // patr_passifs_associee: 'required',
        // patr_passifs_particularites: 'required',
      }, patrimoine_form_handler);
      init_datepicker();
    });

  </script>
