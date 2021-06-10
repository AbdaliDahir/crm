<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<p><?php echo _l('patrimoine_note_private'); ?></p>
<hr />
<?php echo form_open(admin_url('wealth_management/save_note/'.$patrimoine->id)); ?>
<?php echo render_textarea('content','',$staff_notes,array(),array(),'','tinymce'); ?>
<button type="submit" class="btn btn-info"><?php echo _l('patrimoine_save_note'); ?></button>
<?php echo form_close(); ?>
