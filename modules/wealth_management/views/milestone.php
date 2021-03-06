<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Miles Stones -->
<div class="modal fade" id="milestone" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open(admin_url('wealth_management/milestone'), array('id' => 'milestone_form')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('edit_milestone'); ?></span>
                    <span class="add-title"><?php echo _l('new_milestone'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo form_hidden('patrimoine_id', $patrimoine->id); ?>
                        <div id="additional_milestone"></div>
                        <?php echo render_input('name', 'milestone_name'); ?>
                        <?php echo render_date_input('due_date', 'milestone_due_date', '', ($patrimoine->deadline) ? array('data-date-end-date' => $patrimoine->deadline) : array()); ?>
                        <?php echo render_textarea('description', 'milestone_description'); ?>
                        <div class="checkbox">
                            <input type="checkbox" id="description_visible_to_customer" name="description_visible_to_customer">
                            <label for="description_visible_to_customer"><?php echo _l('description_visible_to_customer'); ?></label>
                        </div>
                        <?php echo render_input('milestone_order', 'patrimoine_milestone_order', total_rows(db_prefix() . 'milestones', array('patrimoine_id' => $patrimoine->id)) + 1, 'number'); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
            </div>
        </div><!-- /.modal-content -->
        <?php echo form_close(); ?>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Mile stones end -->