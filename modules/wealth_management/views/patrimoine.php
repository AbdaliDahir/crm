<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php echo form_open($this->uri->uri_string(), array('id' => 'patrimoine_form')); ?>
            
            <!-- added --> 
            <div class="col-xs-12 mtop30">
                <div class="panel_s">
                    <div class="panel-body" id="patrimoine-settings-area">
                        <h4 class="no-margin">
                            <?php echo _l('patrimoine_information_title'); ?>
                        </h4>
                        <hr class="hr-panel-heading" />
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo form_hidden('info_id', isset($patrimoine->info) ? $patrimoine->info->id : '') ?>
                                <h6 class="text-primary h5"> vous </h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php echo render_input('patr_me_firstname','patrimoine_me_firstname', isset($patrimoine->info) ? $patrimoine->info->patr_me_firstname : '','text'); ?>
                                    </div>
                                    <div class="col-md-4"> 
                                        <?php echo render_input('patr_me_lastname','patrimoine_me_lastname', isset($patrimoine->info) ? $patrimoine->info->patr_me_lastname : '','text'); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?php echo render_date_input('patr_me_birthday','patrimoine_me_date_birth',  isset($patrimoine->info) ? _d($patrimoine->info->patr_me_birthday) : ''); ?>
                                    </div>
                                </div>
                                
                                <?php echo render_input('patr_me_profession','patrimoine_conjoint_profession',  isset($patrimoine->info) ? $patrimoine->info->patr_me_profession: '','text'); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo render_date_input('patr_me_depart','patrimoine_conjoint_date_depart',  isset($patrimoine->info) ? _d($patrimoine->info->patr_me_depart) : ''); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_nss','patrimoine_conjoint_NSS',  isset($patrimoine->info) ? $patrimoine->info->patr_me_nss : '','text'); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary h5"> Votre conjoint </h6>
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <?php echo render_input('patr_partner_firstname','patrimoine_me_firstname',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_firstname : '','text'); ?>
                                    </div>
                                    <div class="col-md-4">  
                                        <?php echo render_input('patr_partner_lastname','patrimoine_me_lastname',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_lastname : '','text'); ?>
                                    </div>
                                    <div class="col-md-4"> 
                                        <?php echo render_date_input('patr_partner_birthday','patrimoine_me_date_birth',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_birthday : ''); ?> 
                                    </div>
                                </div>
    
                                <?php echo render_input('patr_partner_profession','patrimoine_conjoint_profession',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_profession : '','text'); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo render_date_input('patr_partner_depart','patrimoine_conjoint_date_depart',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_depart : ''); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_partner_nss','patrimoine_conjoint_NSS',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_nss : '','text'); ?> 
                                    </div> 
                                </div>
                            </div> 
                        </div> 
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo render_textarea('patr_me_address','patrimoine_conjoint_adresse',  isset($patrimoine->info) ? $patrimoine->info->patr_me_address : ''); ?> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_tele_perso','patrimoine_conjoint_tel_perso',  isset($patrimoine->info) ? $patrimoine->info->patr_me_tele_perso : '', 'text'); ?> 
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_tele_mme','patrimoine_conjoint_tel_mobile_mme',  isset($patrimoine->info) ? $patrimoine->info->patr_me_tele_mme : '', 'text'); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo render_date_input('patr_partner_precedent_marriage_date','patrimoine_conjoint_date_mariage',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_precedent_marriage_date : ''); ?> 
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_partner_regime','patrimoine_conjoint_regime', isset($patrimoine->info) ? $patrimoine->info->patr_partner_regime : '','text'); ?> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <h6><?php echo _l('patrimoine_conjoint_donation'); ?></h6>
                                            <div class="form-inline">
                                                <div class="radio">
                                                    <input type="radio" name="patr_partner_donation" id="patr_partner_donation_no"
                                                    value="<?php echo isset($patrimoine->info) ? $patrimoine->info->patr_partner_donation : 0 ?>"
                                                    <?php if (isset($patrimoine->info)) { echo $patrimoine->info->patr_partner_donation == 0 ? 'checked' : ''; } ?> />
                                                    <label for="patr_partner_donation_no"><?php echo _l('settings_no'); ?></label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="patr_partner_donation" id="patr_partner_donation_yes"
                                                    value="<?php echo isset($patrimoine->info) ? $patrimoine->info->patr_partner_donation : 1 ?>"
                                                    <?php if (isset($patrimoine->info)) { echo $patrimoine->info->patr_partner_donation == 1 ? 'checked' : ''; } ?> />
                                                    <label
                                                    for="patr_partner_donation_yes"><?php echo _l('settings_yes'); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_tele_m','patrimoine_conjoint_tel_mobile_m',  isset($patrimoine->info) ? $patrimoine->info->patr_me_tele_m : '', 'text'); ?> 
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_email_one','patrimoine_conjoint_email_one',  isset($patrimoine->info) ? $patrimoine->info->patr_me_email_one : '', 'email'); ?> 
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo render_input('patr_me_email_two','patrimoine_conjoint_email_two',  isset($patrimoine->info) ? $patrimoine->info->patr_me_email_two : '', 'email'); ?> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12">
                                <h6 class="font-weight-bold mbot15"><?php echo _l('patrimoine_conjoint_more_question'); ?> </h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php echo render_date_input('patr_partner_marriage_date','patrimoine_conjoint_more_question_mariage_date',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_marriage_date : ''); ?> 
                                    </div>
                                    <div class="col-md-4">
                                        <?php echo render_input('patr_partner_marriage_duration','patrimoine_conjoint_more_question_mariage_durée',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_marriage_duration : '','number'); ?> 
                                    </div>
                                    <div class="col-md-4">
                                        <?php echo render_input('patr_partner_situtation','patrimoine_conjoint_more_question_situation',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_situtation : '','text'); ?> 
                                    </div>
                                </div>
                                <div> 
                                    <?php echo render_input('patr_partner_finance','patrimoine_conjoint_more_question_finance',  isset($patrimoine->info) ? $patrimoine->info->patr_partner_finance : '','text'); ?> 
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ./END:: ADDEDD --> 
            
            <div class="col-md-6">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin">
                            <?php echo $title; ?>
                        </h4>
                        <hr class="hr-panel-heading" />
                        <?php
                            $disable_type_edit = '';
                            if (isset($patrimoine)) {
                                if ($patrimoine->billing_type != 1) {
                                    if (total_rows(db_prefix() . 'tasks', array('rel_id' => $patrimoine->id, 'rel_type' => 'patrimoine', 'billable' => 1, 'billed' => 1)) > 0) {
                                        $disable_type_edit = 'disabled';
                                    }
                                }
                            }
                        ?>
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <?php
                                $disable_type_edit = '';
                                if (isset($patrimoine)) {
                                    if ($patrimoine->billing_type != 1) {
                                        if (total_rows(db_prefix() . 'tasks', array('rel_id' => $patrimoine->id, 'rel_type' => 'patrimoine', 'billable' => 1, 'billed' => 1)) > 0) {
                                            $disable_type_edit = 'disabled';
                                        }
                                    }
                                }
                                ?>
                                <?php $value = (isset($patrimoine) ? $patrimoine->name : ''); ?>
                                <?php echo render_input('name', 'patrimoine_name', $value); ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group select-placeholder">
                                    <label for="clientid" class="control-label"><?php echo _l('patrimoine_customer'); ?></label>
                                    <select id="clientid" name="clientid" data-live-search="true" data-width="100%" class="ajax-search" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                        <?php $selected = (isset($patrimoine) ? $patrimoine->clientid : '');
                                        if ($selected == '') {
                                            $selected = (isset($customer_id) ? $customer_id : '');
                                        }
                                        if ($selected != '') {
                                            $rel_data = get_relation_data('customer', $selected);
                                            $rel_val = get_relation_values($rel_data, 'customer');
                                            echo '<option value="' . $rel_val['id'] . '" selected>' . $rel_val['name'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" <?php if ((isset($patrimoine) && $patrimoine->progress_from_tasks == 1) || !isset($patrimoine)) {
                                                                    echo 'checked';
                                                                } ?> name="progress_from_tasks" id="progress_from_tasks">
                                        <label for="progress_from_tasks"><?php echo _l('calculate_progress_through_tasks'); ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if (isset($patrimoine) && $patrimoine->progress_from_tasks == 1) {
                                    $value = $this->patrimoines_model->calc_progress_by_tasks($patrimoine->id);
                                } else if (isset($patrimoine) && $patrimoine->progress_from_tasks == 0) {
                                    $value = $patrimoine->progress;
                                } else {
                                    $value = 0;
                                }
                                ?>
                                <label for=""><?php echo _l('patrimoine_progress'); ?> <span class="label_progress"><?php echo $value; ?>%</span></label>
                                <?php echo form_hidden('progress', $value); ?>
                                <div class="patrimoine_progress_slider patrimoine_progress_slider_horizontal mbot15"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group select-placeholder">
                                    <label for="billing_type"><?php echo _l('patrimoine_billing_type'); ?></label>
                                    <div class="clearfix"></div>
                                    <select name="billing_type" class="selectpicker" id="billing_type" data-width="100%" <?php echo $disable_type_edit; ?> data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                        <option value=""></option>
                                        <option value="1" <?php if (isset($patrimoine) && $patrimoine->billing_type == 1 || !isset($patrimoine) && $auto_select_billing_type && $auto_select_billing_type->billing_type == 1) {
                                                                echo 'selected';
                                                            } ?>><?php echo _l('patrimoine_billing_type_fixed_cost'); ?></option>
                                        <option value="2" <?php if (isset($patrimoine) && $patrimoine->billing_type == 2 || !isset($patrimoine) && $auto_select_billing_type && $auto_select_billing_type->billing_type == 2) {
                                                                echo 'selected';
                                                            } ?>><?php echo _l('patrimoine_billing_type_patrimoine_hours'); ?></option>
                                        <option value="3" data-subtext="<?php echo _l('patrimoine_billing_type_patrimoine_task_hours_hourly_rate'); ?>" <?php if (isset($patrimoine) && $patrimoine->billing_type == 3 || !isset($patrimoine) && $auto_select_billing_type && $auto_select_billing_type->billing_type == 3) {
                                                                                                                                                            echo 'selected';
                                                                                                                                                        } ?>><?php echo _l('patrimoine_billing_type_patrimoine_task_hours'); ?></option>
                                    </select>
                                    <?php if ($disable_type_edit != '') {
                                        echo '<p class="text-danger">' . _l('cant_change_billing_type_billed_tasks_found') . '</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group select-placeholder">
                                    <label for="status"><?php echo _l('patrimoine_status'); ?></label>
                                    <div class="clearfix"></div>
                                    <select name="status" id="status" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                        <?php foreach ($statuses as $status) { ?>
                                            <option value="<?php echo $status['id']; ?>" <?php if (!isset($patrimoine) && $status['id'] == 2 || (isset($patrimoine) && $patrimoine->status == $status['id'])) {
                                                                                                echo 'selected';
                                                                                            } ?>><?php echo $status['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($patrimoine) && patrimoine_has_recurring_tasks($patrimoine->id)) { ?>
                            <div class="alert alert-warning recurring-tasks-notice hide"></div>
                        <?php } ?>
                        <?php if (is_email_template_active('patrimoine-finished-to-customer')) { ?>
                            <div class="form-group patrimoine_marked_as_finished hide">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="patrimoine_marked_as_finished_email_to_contacts" id="patrimoine_marked_as_finished_email_to_contacts">
                                    <label for="patrimoine_marked_as_finished_email_to_contacts"><?php echo _l('patrimoine_marked_as_finished_to_contacts'); ?></label>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($patrimoine)) { ?>
                            <div class="form-group mark_all_tasks_as_completed hide">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="mark_all_tasks_as_completed" id="mark_all_tasks_as_completed">
                                    <label for="mark_all_tasks_as_completed"><?php echo _l('patrimoine_mark_all_tasks_as_completed'); ?></label>
                                </div>
                            </div>
                            <div class="notify_patrimoine_members_status_change hide">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="notify_patrimoine_members_status_change" id="notify_patrimoine_members_status_change">
                                    <label for="notify_patrimoine_members_status_change"><?php echo _l('notify_patrimoine_members_status_change'); ?></label>
                                </div>
                                <hr />
                            </div>
                        <?php } ?>
                        <?php
                        $input_field_hide_class_total_cost = '';
                        if (!isset($patrimoine)) {
                            if ($auto_select_billing_type && $auto_select_billing_type->billing_type != 1 || !$auto_select_billing_type) {
                                $input_field_hide_class_total_cost = 'hide';
                            }
                        } else if (isset($patrimoine) && $patrimoine->billing_type != 1) {
                            $input_field_hide_class_total_cost = 'hide';
                        }
                        ?>
                        <div id="patrimoine_cost" class="<?php echo $input_field_hide_class_total_cost; ?>">
                            <?php $value = (isset($patrimoine) ? $patrimoine->patrimoine_cost : ''); ?>
                            <?php echo render_input('patrimoine_cost', 'patrimoine_total_cost', $value, 'number'); ?>
                        </div>
                        <?php
                        $input_field_hide_class_rate_per_hour = '';
                        if (!isset($patrimoine)) {
                            if ($auto_select_billing_type && $auto_select_billing_type->billing_type != 2 || !$auto_select_billing_type) {
                                $input_field_hide_class_rate_per_hour = 'hide';
                            }
                        } else if (isset($patrimoine) && $patrimoine->billing_type != 2) {
                            $input_field_hide_class_rate_per_hour = 'hide';
                        }
                        ?>
                        <div id="patrimoine_rate_per_hour" class="<?php echo $input_field_hide_class_rate_per_hour; ?>">
                            <?php $value = (isset($patrimoine) ? $patrimoine->patrimoine_rate_per_hour : ''); ?>
                            <?php
                            $input_disable = array();
                            if ($disable_type_edit != '') {
                                $input_disable['disabled'] = true;
                            }
                            ?>
                            <?php echo render_input('patrimoine_rate_per_hour', 'patrimoine_rate_per_hour', $value, 'number', $input_disable); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo render_input('estimated_hours', 'estimated_hours', isset($patrimoine) ? $patrimoine->estimated_hours : '', 'number'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $selected = array();
                                if (isset($patrimoine_members)) {
                                    foreach ($patrimoine_members as $member) {
                                        array_push($selected, $member['staff_id']);
                                    }
                                } else {
                                    array_push($selected, get_staff_user_id());
                                }
                                echo render_select('patrimoine_members[]', $staff, array('staffid', array('firstname', 'lastname')), 'patrimoine_members', $selected, array('multiple' => true, 'data-actions-box' => true), array(), '', '', false);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php $value = (isset($patrimoine) ? _d($patrimoine->start_date) : _d(date('Y-m-d'))); ?>
                                <?php echo render_date_input('start_date', 'patrimoine_start_date', $value); ?>
                            </div>
                            <div class="col-md-6">
                                <?php $value = (isset($patrimoine) ? _d($patrimoine->deadline) : ''); ?>
                                <?php echo render_date_input('deadline', 'patrimoine_deadline', $value); ?>
                            </div>
                        </div>
                        <?php if (isset($patrimoine) && $patrimoine->date_finished != null && $patrimoine->status == 4) { ?>
                            <?php echo render_datetime_input('date_finished', 'patrimoine_completed_date', _dt($patrimoine->date_finished)); ?>
                        <?php } ?>
                        <div class="form-group">
                            <label for="tags" class="control-label"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo _l('tags'); ?></label>
                            <input type="text" class="tagsinput" id="tags" name="tags" value="<?php echo (isset($patrimoine) ? prep_tags_input(get_tags_in($patrimoine->id, 'patrimoine')) : ''); ?>" data-role="tagsinput">
                        </div>
                        <?php $rel_id_custom_field = (isset($patrimoine) ? $patrimoine->id : false); ?>
                        <?php echo render_custom_fields('patrimoines', $rel_id_custom_field); ?>
                        <p class="bold"><?php echo _l('patrimoine_description'); ?></p>
                        <?php $contents = '';
                        if (isset($patrimoine)) {
                            $contents = $patrimoine->description;
                        } ?>
                        <?php echo render_textarea('description', '', $contents, array(), array(), '', 'tinymce'); ?>

                        <?php if (isset($estimate)) { ?>
                            <hr class="hr-panel-heading" />
                            <h5 class="font-medium"><?php echo _l('estimate_items_convert_to_tasks') ?></h5>
                            <input type="hidden" name="estimate_id" value="<?php echo $estimate->id ?>">
                            <div class="row">
                                <?php foreach ($estimate->items as $item) { ?>
                                    <div class="col-md-8 border-right">
                                        <div class="checkbox mbot15">
                                            <input type="checkbox" name="items[]" value="<?php echo $item['id'] ?>" checked id="item-<?php echo $item['id'] ?>">
                                            <label for="item-<?php echo $item['id'] ?>">
                                                <h5 class="no-mbot no-mtop text-uppercase"><?php echo $item['description'] ?></h5>
                                                <span class="text-muted"><?php echo $item['long_description'] ?></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div data-toggle="tooltip" title="<?php echo _l('task_single_assignees_select_title'); ?>">
                                            <?php echo render_select('items_assignee[]', $staff, array('staffid', array('firstname', 'lastname')), '', get_staff_user_id(), array('data-actions-box' => true), array(), '', 'clean-select', false); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- <hr class="hr-panel-heading" /> -->

                        <?php if (is_email_template_active('assigned-to-patrimoine')) { ?>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="send_created_email" id="send_created_email">
                                <label for="send_created_email"><?php echo _l('patrimoine_send_created_email'); ?></label>
                            </div>
                        <?php } ?>
                        <div class="btn-bottom-toolbar text-right">
                            <button type="submit" data-form="#patrimoine_form" class="btn btn-info" autocomplete="off" data-loading-text="<?php echo _l('wait_text'); ?>"><?php echo _l('submit'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel_s">
                    <div class="panel-body" id="patrimoine-settings-area">
                        <h4 class="no-margin">
                            <?php echo _l('patrimoine_settings'); ?>
                        </h4>
                        <hr class="hr-panel-heading" />
                        <div class="form-group select-placeholder">
                            <label for="contact_notification" class="control-label">
                                <span class="text-danger">*</span>
                                <?php echo _l('patrimoines_send_contact_notification'); ?>
                            </label>
                            <select name="contact_notification" id="contact_notification" class="form-control selectpicker" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" required>
                                <?php
                                $options = [
                                    ['id' => 1, 'name' => _l('patrimoine_send_all_contacts_with_notifications_enabled')],
                                    ['id' => 2, 'name' => _l('patrimoine_send_specific_contacts_with_notification')],
                                    ['id' => 0, 'name' => _l('patrimoine_do_not_send_contacts_notifications')]
                                ];
                                foreach ($options as $option) { ?>
                                    <option value="<?php echo $option['id']; ?>" <?php if ((isset($patrimoine) && $patrimoine->contact_notification == $option['id'])) {
                                                                                        echo ' selected';
                                                                                    } ?>><?php echo $option['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- hide class -->
                        <div class="form-group select-placeholder <?php echo (isset($patrimoine) && $patrimoine->contact_notification == 2) ? '' : 'hide' ?>" id="notify_contacts_wrapper">
                            <label for="notify_contacts" class="control-label"><span class="text-danger">*</span> <?php echo _l('patrimoine_contacts_to_notify') ?></label>
                            <select name="notify_contacts[]" data-id="notify_contacts" id="notify_contacts" class="ajax-search" data-width="100%" data-live-search="true" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" multiple>
                                <?php
                                $notify_contact_ids = isset($patrimoine) ? unserialize($patrimoine->notify_contacts) : [];
                                foreach ($notify_contact_ids as $contact_id) {
                                    $rel_data = get_relation_data('contact', $contact_id);
                                    $rel_val = get_relation_values($rel_data, 'contact');
                                    echo '<option value="' . $rel_val['id'] . '" selected>' . $rel_val['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row">
                        <?php foreach ($settings as $setting) {

                            $checked = ' checked';
                            if (isset($patrimoine)) {
                                if ($patrimoine->settings->{$setting} == 0) {
                                    $checked = '';
                                }
                            } else {
                                foreach ($last_patrimoine_settings as $last_setting) {
                                    if ($setting == $last_setting['name']) {
                                        // hide_tasks_on_main_tasks_table is not applied on most used settings to prevent confusions
                                        if ($last_setting['value'] == 0 || $last_setting['name'] == 'hide_tasks_on_main_tasks_table') {
                                            $checked = '';
                                        }
                                    }
                                }
                                if (count($last_patrimoine_settings) == 0 && $setting == 'hide_tasks_on_main_tasks_table') {
                                    $checked = '';
                                }
                            } ?>
                            <?php if ($setting != 'available_features') { ?>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <input type="checkbox" name="settings[<?php echo $setting; ?>]" <?php echo $checked; ?> id="<?php echo $setting; ?>">
                                    <label for="<?php echo $setting; ?>">
                                        <?php if ($setting == 'hide_tasks_on_main_tasks_table') { ?>
                                            <?php echo _l('hide_tasks_on_main_tasks_table'); ?>
                                        <?php } else { ?>
                                            <?php echo _l('patrimoine_allow_client_to', _l('patrimoine_setting_' . $setting)); ?>
                                        <?php } ?>
                                    </label>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="col-md-12">
                                <div class="form-group mtop15 select-placeholder patrimoine-available-features">
                                    <label for="available_features"><?php echo _l('visible_tabs'); ?></label>
                                    <select name="settings[<?php echo $setting; ?>][]" id="<?php echo $setting; ?>" multiple="true" class="selectpicker" id="available_features" data-width="100%" data-actions-box="true" data-hide-disabled="true">
                                        <?php foreach (get_patrimoine_tabs_admin() as $tab) {
                                            $selected = '';
                                            if (isset($tab['collapse'])) { ?>
                                                <optgroup label="<?php echo $tab['name']; ?>">
                                                    <?php foreach ($tab['children'] as $tab_dropdown) {
                                                        $selected = '';
                                                        if (isset($patrimoine) && (
                                                            (isset($patrimoine->settings->available_features[$tab_dropdown['slug']])
                                                                && $patrimoine->settings->available_features[$tab_dropdown['slug']] == 1)
                                                            || !isset($patrimoine->settings->available_features[$tab_dropdown['slug']]))) {
                                                            $selected = ' selected';
                                                        } else if (!isset($patrimoine) && count($last_patrimoine_settings) > 0) {
                                                            foreach ($last_patrimoine_settings as $last_patrimoine_setting) {
                                                                if ($last_patrimoine_setting['name'] == $setting) {
                                                                    if (
                                                                        isset($last_patrimoine_setting['value'][$tab_dropdown['slug']])
                                                                        && $last_patrimoine_setting['value'][$tab_dropdown['slug']] == 1
                                                                    ) {
                                                                        $selected = ' selected';
                                                                    }
                                                                }
                                                            }
                                                        } else if (!isset($patrimoine)) {
                                                            $selected = ' selected';
                                                        }
                                                    ?>
                                                        <option value="<?php echo $tab_dropdown['slug']; ?>" <?php echo $selected; ?><?php if (isset($tab_dropdown['linked_to_customer_option']) && is_array($tab_dropdown['linked_to_customer_option']) && count($tab_dropdown['linked_to_customer_option']) > 0) { ?> data-linked-customer-option="<?php echo implode(',', $tab_dropdown['linked_to_customer_option']); ?>" <?php } ?>><?php echo $tab_dropdown['name']; ?></option>
                                                    <?php } ?>
                                                </optgroup>
                                            <?php } else {
                                                if (isset($patrimoine) && (
                                                    (isset($patrimoine->settings->available_features[$tab['slug']])
                                                        && $patrimoine->settings->available_features[$tab['slug']] == 1)
                                                    || !isset($patrimoine->settings->available_features[$tab['slug']]))) {
                                                    $selected = ' selected';
                                                } else if (!isset($patrimoine) && count($last_patrimoine_settings) > 0) {
                                                    foreach ($last_patrimoine_settings as $last_patrimoine_setting) {
                                                        if ($last_patrimoine_setting['name'] == $setting) {
                                                            if (
                                                                isset($last_patrimoine_setting['value'][$tab['slug']])
                                                                && $last_patrimoine_setting['value'][$tab['slug']] == 1
                                                            ) {
                                                                $selected = ' selected';
                                                            }
                                                        }
                                                    }
                                                } else if (!isset($patrimoine)) {
                                                    $selected = ' selected';
                                                }
                                            ?>
                                                <option value="<?php echo $tab['slug']; ?>" <?php if ($tab['slug'] == 'patrimoine_overview') {
                                                                                                echo ' disabled selected';
                                                                                            } ?> <?php echo $selected; ?> <?php if (isset($tab['linked_to_customer_option']) && is_array($tab['linked_to_customer_option']) && count($tab['linked_to_customer_option']) > 0) { ?> data-linked-customer-option="<?php echo implode(',', $tab['linked_to_customer_option']); ?>" <?php } ?>>
                                                    <?php echo $tab['name']; ?>
                                                </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <?php } ?> 
                            <!-- <hr class="no-margin" /> -->
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
        <div class="btn-bottom-pusher"></div>
    </div>
</div>
<?php init_tail(); ?>
<script>
    <?php if (isset($patrimoine)) { ?>
        var original_patrimoine_status = '<?php echo $patrimoine->status; ?>';
    <?php } ?>

    $(function() {

        $contacts_select = $('#notify_contacts'),
            $contacts_wrapper = $('#notify_contacts_wrapper'),
            $clientSelect = $('#clientid'),
            $contact_notification_select = $('#contact_notification');

        init_ajax_search('contacts', $contacts_select, {
            rel_id: $contacts_select.val(),
            type: 'contacts',
            extra: {
                client_id: function() {
                    return $clientSelect.val();
                }
            }
        });

        if ($clientSelect.val() == '') {
            $contacts_select.prop('disabled', true);
            $contacts_select.selectpicker('refresh');
        } else {
            $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
        }

        $clientSelect.on('changed.bs.select', function() {
            if ($clientSelect.selectpicker('val') == '') {
                $contacts_select.prop('disabled', true);
            } else {
                $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
                $contacts_select.prop('disabled', false);
            }
            deselect_ajax_search($contacts_select[0]);
            $contacts_select.find('option').remove();
            $contacts_select.selectpicker('refresh');
        });

        $contact_notification_select.on('changed.bs.select', function() {
            if ($contact_notification_select.selectpicker('val') == 2) {
                $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
                $contacts_wrapper.removeClass('hide');
            } else {
                $contacts_wrapper.addClass('hide');
                deselect_ajax_search($contacts_select[0]);
            }
        });

        $('select[name="billing_type"]').on('change', function() {
            var type = $(this).val();
            if (type == 1) {
                $('#patrimoine_cost').removeClass('hide');
                $('#patrimoine_rate_per_hour').addClass('hide');
            } else if (type == 2) {
                $('#patrimoine_cost').addClass('hide');
                $('#patrimoine_rate_per_hour').removeClass('hide');
            } else {
                $('#patrimoine_cost').addClass('hide');
                $('#patrimoine_rate_per_hour').addClass('hide');
            }
        });

        appValidateForm($('form'), {
            name: 'required',
            clientid: 'required',
            start_date: 'required',
            billing_type: 'required',
            patr_me_firstname: 'required',
            patr_me_lastname: 'required',
            patr_me_birthday: 'required',
            'notify_contacts[]': {
                required: {
                    depends: function() {
                        return !$contacts_wrapper.hasClass('hide');
                    }
                }
            },
        });

        $('select[name="status"]').on('change', function() {
            var status = $(this).val();
            var mark_all_tasks_completed = $('.mark_all_tasks_as_completed');
            var notify_patrimoine_members_status_change = $('.notify_patrimoine_members_status_change');
            mark_all_tasks_completed.removeClass('hide');
            if (typeof(original_patrimoine_status) != 'undefined') {
                if (original_patrimoine_status != status) {

                    mark_all_tasks_completed.removeClass('hide');
                    notify_patrimoine_members_status_change.removeClass('hide');

                    if (status == 4 || status == 5 || status == 3) {
                        $('.recurring-tasks-notice').removeClass('hide');
                        var notice = "<?php echo _l('patrimoine_changing_status_recurring_tasks_notice'); ?>";
                        notice = notice.replace('{0}', $(this).find('option[value="' + status + '"]').text().trim());
                        $('.recurring-tasks-notice').html(notice);
                        $('.recurring-tasks-notice').append('<input type="hidden" name="cancel_recurring_tasks" value="true">');
                        mark_all_tasks_completed.find('input').prop('checked', true);
                    } else {
                        $('.recurring-tasks-notice').html('').addClass('hide');
                        mark_all_tasks_completed.find('input').prop('checked', false);
                    }
                } else {
                    mark_all_tasks_completed.addClass('hide');
                    mark_all_tasks_completed.find('input').prop('checked', false);
                    notify_patrimoine_members_status_change.addClass('hide');
                    $('.recurring-tasks-notice').html('').addClass('hide');
                }
            }

            if (status == 4) {
                $('.patrimoine_marked_as_finished').removeClass('hide');
            } else {
                $('.patrimoine_marked_as_finished').addClass('hide');
                $('.patrimoine_marked_as_finished').prop('checked', false);
            }
        });

        $('form').on('submit', function() {
            $('select[name="billing_type"]').prop('disabled', false);
            $('#available_features,#available_features option').prop('disabled', false);
            $('input[name="patrimoine_rate_per_hour"]').prop('disabled', false);
        });

        var progress_input = $('input[name="progress"]');
        var progress_from_tasks = $('#progress_from_tasks');
        var progress = progress_input.val();

        $('.patrimoine_progress_slider').slider({
            min: 0,
            max: 100,
            value: progress,
            disabled: progress_from_tasks.prop('checked'),
            slide: function(event, ui) {
                progress_input.val(ui.value);
                $('.label_progress').html(ui.value + '%');
            }
        });

        progress_from_tasks.on('change', function() {
            var _checked = $(this).prop('checked');
            $('.patrimoine_progress_slider').slider({
                disabled: _checked
            });
        });

        $('#patrimoine-settings-area input').on('change', function() {
            if ($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == false) {
                $('#create_tasks').prop('checked', false).prop('disabled', true);
                $('#edit_tasks').prop('checked', false).prop('disabled', true);
                $('#view_task_comments').prop('checked', false).prop('disabled', true);
                $('#comment_on_tasks').prop('checked', false).prop('disabled', true);
                $('#view_task_attachments').prop('checked', false).prop('disabled', true);
                $('#view_task_checklist_items').prop('checked', false).prop('disabled', true);
                $('#upload_on_tasks').prop('checked', false).prop('disabled', true);
                $('#view_task_total_logged_time').prop('checked', false).prop('disabled', true);
            } else if ($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == true) {
                $('#create_tasks').prop('disabled', false);
                $('#edit_tasks').prop('disabled', false);
                $('#view_task_comments').prop('disabled', false);
                $('#comment_on_tasks').prop('disabled', false);
                $('#view_task_attachments').prop('disabled', false);
                $('#view_task_checklist_items').prop('disabled', false);
                $('#upload_on_tasks').prop('disabled', false);
                $('#view_task_total_logged_time').prop('disabled', false);
            }
        });

        // Auto adjust customer permissions based on selected patrimoine visible tabs
        // Eq patrimoine creator disable TASKS tab, then this function will auto turn off customer patrimoine option Allow customer to view tasks

        $('#available_features').on('change', function() {
            $("#available_features option").each(function() {
                if ($(this).data('linked-customer-option') && !$(this).is(':selected')) {
                    var opts = $(this).data('linked-customer-option').split(',');
                    for (var i = 0; i < opts.length; i++) {
                        var patrimoine_option = $('#' + opts[i]);
                        patrimoine_option.prop('checked', false);
                        if (opts[i] == 'view_tasks') {
                            patrimoine_option.trigger('change');
                        }
                    }
                }
            });
        });
        $("#view_tasks").trigger('change');
        <?php if (!isset($patrimoine)) { ?>
            $('#available_features').trigger('change');
        <?php } ?>
    });
</script>
</body>

</html>
