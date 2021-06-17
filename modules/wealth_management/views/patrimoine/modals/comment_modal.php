<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo form_open(admin_url('wealth_management/addComment?id=' . $id . '&patremoine_id=&type='), array('id' => 'comment-form')); ?> <div
  class="modal _comment_modal fade<?php if (isset($comment)) { echo ' edit'; } ?>" id="_comment_modal" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel"
  <?php if ($this->input->get('opened_from_lead_id')) { echo 'data-lead-id=' . $this->input->get('opened_from_lead_id'); } ?>>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $title; ?> </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12"> 
            <?php echo form_hidden('patrimoineid',  isset($comment) ? $comment->patrimoineid : $patrimoine_id) ?>
            <?php echo form_hidden('id', isset($comment) ? $comment->id : '') ?>
            <?php echo form_hidden('patr_comment_type', isset($type) ? $type : (isset($comment) ? $comment->patr_comment_type : '')) ?>
            <?php
              // onclick and onfocus used for convert ticket to task too
              echo render_textarea('patr_comment_text', '', (isset($comment) ? $comment->patr_comment_text : ''), array('rows' => 8, 'placeholder' => _l('comment_add_description'))); 
            ?>
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
      appValidateForm($('#comment-form'), {
        patr_comment_text: 'required'
      }, comment_form_handler);
    });

  </script>
