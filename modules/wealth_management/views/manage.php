<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <div class="_buttons">
                            <?php if (has_permission('wealth_management', '', 'create')) { ?>
                                <a href="<?php echo admin_url('wealth_management/clientApp'); ?>" class="btn btn-info pull-left display-block mright5">
                                    <?php echo _l('new_patrimoine'); ?>
                                </a>
                            <?php } ?>
                            <a href="<?php echo admin_url('wealth_management/gantt'); ?>" data-toggle="tooltip" title="<?php echo _l('patrimoine_gant'); ?>" class="btn btn-default"><i class="fa fa-align-left" aria-hidden="true"></i></a>
                            <div class="btn-group pull-right mleft4 btn-with-tooltip-group _filter_data" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right width300">
                                    <li>
                                        <a href="#" data-cview="all" onclick="dt_custom_view('','.table-patrimoines',''); return false;">
                                            <?php echo _l('expenses_list_all'); ?>
                                        </a>
                                    </li>
                                    <?php
                                    // Only show this filter if user has permission for patrimoines view otherwise wont need this becuase by default this filter will be applied
                                    if (has_permission('patrimoines', '', 'view')) { ?>
                                        <li>
                                            <a href="#" data-cview="my_patrimoines" onclick="dt_custom_view('my_patrimoines','.table-patrimoines','my_patrimoines'); return false;">
                                                <?php echo _l('home_my_patrimoines'); ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li class="divider"></li>
                                    <?php foreach ($statuses as $status) { ?>
                                        <li class="<?php if ($status['filter_default'] == true && !$this->input->get('status') || $this->input->get('status') == $status['id']) {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#" data-cview="<?php echo 'patrimoine_status_' . $status['id']; ?>" onclick="dt_custom_view('patrimoine_status_<?php echo $status['id']; ?>','.table-patrimoines','patrimoine_status_<?php echo $status['id']; ?>'); return false;">
                                                <?php echo $status['name']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <hr class="hr-panel-heading" />
                        </div>
                        <div class="row mbot15">
                            <div class="col-md-12">
                                <h4 class="no-margin"><?php echo _l('patrimoines_summary'); ?></h4>
                                <?php
                                $_where = '';
                                if (!has_permission('patrimoines', '', 'view')) {
                                    $_where = 'id IN (SELECT patrimoine_id FROM ' . db_prefix() . 'patrimoine_members WHERE staff_id=' . get_staff_user_id() . ')';
                                }
                                ?>
                            </div>
                            <div class="_filters _hidden_inputs">
                                <?php
                                echo form_hidden('my_patrimoines');
                                foreach ($statuses as $status) {
                                    $value = $status['id'];
                                    if ($status['filter_default'] == false && !$this->input->get('status')) {
                                        $value = '';
                                    } else if ($this->input->get('status')) {
                                        $value = ($this->input->get('status') == $status['id'] ? $status['id'] : "");
                                    }
                                    echo form_hidden('patrimoine_status_' . $status['id'], $value);
                                ?>

                                    <div class="col-md-2 col-xs-6 border-right">
                                        <?php $where = ($_where == '' ? '' : $_where . ' AND ') . 'status = ' . $status['id']; ?>
                                        <a href="#" onclick="dt_custom_view('patrimoine_status_<?php echo $status['id']; ?>','.table-patrimoines','patrimoine_status_<?php echo $status['id']; ?>',true); return false;">
                                            <h3 class="bold"><?php echo total_rows(db_prefix() . 'patrimoines', $where); ?></h3>
                                            <span style="color:<?php echo $status['color']; ?>" patrimoine-status-<?php echo $status['id']; ?>">
                                                <?php echo $status['name']; ?>
                                            </span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr class="hr-panel-heading" />
                        <?php echo form_hidden('custom_view'); ?>
                        <?php $this->load->view('wealth_management/table_html'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('wealth_management/copy_settings'); ?>
<?php init_tail(); ?>
<script>
    $(function() {
        var PatrimoinesServerParams = {};

        $.each($('._hidden_inputs._filters input'), function() {
            PatrimoinesServerParams[$(this).attr('name')] = '[name="' + $(this).attr('name') + '"]';
        });

        initDataTable('.table-patrimoines', admin_url + 'wealth_management/table', undefined, undefined, PatrimoinesServerParams, <?php echo hooks()->apply_filters('patrimoines_table_default_order', json_encode(array(5, 'asc'))); ?>);

        init_ajax_search('customer', '#clientid_copy_patrimoine.ajax-search');
    });
</script>
</body>

</html>