<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addInfo?id=' . $id . '&patrimoine_id=&type=budget'), array('id' => 'budget-form')); ?> <div
  class="modal _info_modal fade<?php if (isset($budget)) { echo ' edit'; } ?>" id="_info_modal" tabindex="-1" role="dialog"
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
            <?php echo form_hidden('patrimoineid',  isset($budget) ? $budget->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', $budget ? $budget->id : '') ?>
            <?php echo render_input('patr_budget_designation', 'patrimoine_budget_designation', isset($budget) ? $budget->patr_budget_designation : '','text'); ?>
            <?php echo render_input('patr_budget_montant', 'patrimoine_budget_montant', isset($budget) ? $budget->patr_budget_montant : '','number'); ?>
            <div class="type">
              <h6> <?php echo _l('patrimoine_budget_type') ?> </h6>
              <select name="patr_budget_type" class="selectpicker">
                <option value="0" <?php echo isset($budget) ? ($budget->patr_budget_type == 0 ? 'selected' : '') : ''?>> <?php echo _l('patrimoine_budget_type_revenus') ?> </option>
                <option value="1" <?php echo isset($budget) ? ($budget->patr_budget_type == 1 ? 'selected' : '') : ''?>> <?php echo _l('patrimoine_budget_type_retraite') ?> </option>
              </select>
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
      
      appValidateForm($('#budget-form'), {
        patr_bien_designation: 'required',
        patr_bien_montant: {
          required: true,
          number: true
        },
        patr_budget_type: 'required'
      }, patrimoine_form_handler);
      init_selectpicker();
    });

  </script>
