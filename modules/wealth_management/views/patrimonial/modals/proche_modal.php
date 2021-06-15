<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addProches/' . $id), array('id' => 'proches-form')); ?> <div
  class="modal fade<?php if (isset($proche)) { echo ' edit'; } ?>" id="_proche_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($proche) ? $proche->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $proche ? $proche->id : '') ?>
            <?php echo render_input('patr_proches_username','proches_username', $proche ? $proche->patr_proches_username : '','text'); ?>
            <?php echo render_date_input('patr_proches_birthday','proches_birthday',  $proche ? $proche->patr_proches_birthday: ''); ?>
            <?php echo render_input('patr_proches_charge','proches_charge',  $proche ? $proche->patr_proches_charge: '','text'); ?>
            <?php echo render_input('patr_proches_particularites','proches_particularité',  $proche ? $proche->patr_proches_particularites : '','text'); ?>
            <?php echo render_input('patr_proches_tele', 'proches_contact_tel',  $proche ? $proche->patr_proches_tele : '','text'); ?>
            <?php echo render_input('patr_proches_email', 'proches_contact_email',  $proche ? $proche->patr_proches_email : '','email'); ?>
            <?php echo render_textarea('patr_proches_address','proches_contact_address',  isset($proche) ? $proche->patr_proches_address : ''); ?> 
            <div class="input-group">
              <div class="radio">
                <input type="radio" name="patr_proches_lien_parente" id="patr_proches_lien_parente_enfant_petit"
                  value="<?php echo $proche ? $proche->patr_proches_lien_parente : 0 ?>"
                  <?php if (isset($proche)) { echo $proche->patr_proches_lien_parente == 0 ? 'checked' : ''; } ?> />
                <label for="patr_proches_lien_parente_enfant_petit"><?php echo _l('proches_parente_e_petit'); ?></label>
              </div>
              <div class="radio">
                <input type="radio" name="patr_proches_lien_parente" id="patr_proches_lien_parente_enfant_parent"
                  value="<?php echo $proche ? $proche->patr_proches_lien_parente : 1 ?>"
                  <?php if (isset($proche)) { echo $proche->patr_proches_lien_parente == 1 ? 'checked' : ''; } ?> />
                <label
                  for="patr_proches_lien_parente_enfant_parent"><?php echo _l('proches_parente_e_parent'); ?></label>
              </div>
            </div>
            <div class="input-group">
              <label for="contact_proche"> 
                <input id="contact_proche" type="checkbox" name="patr_proches_contact" value="yes" <?php if (isset($proche)) { echo $proche->patr_proches_contact == 1 ? 'checked' : ''; } ?> />
                peut-on les contacter ? oui/non 
              </label>
            </div>
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
      
      appValidateForm($('#proches-form'), {
        patr_proches_username: 'required',
        patr_proches_birthday: 'required',
        patr_proches_charge: 'required',
        patr_proches_particularites: 'required'
      }, proche_form_handler);
      init_datepicker();
      init_selectpicker();
    });

  </script>
