<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
   <div class="col-md-6 border-right patrimoine-overview-left">
      <div class="row">
         <div class="col-md-12">
            <p class="patrimoine-info bold font-size-14">
               <?php echo _l('overview'); ?>
            </p>
         </div>
         <?php if (count($patrimoine->shared_vault_entries) > 0) { ?>
            <?php $this->load->view('admin/clients/vault_confirm_password'); ?>
            <div class="col-md-12">
               <p class="bold">
                  <a href="#" onclick="slideToggle('#patrimoine_vault_entries'); return false;">
                     <i class="fa fa-cloud"></i> <?php echo _l('patrimoine_shared_vault_entry_login_details'); ?>
                  </a>
               </p>
               <div id="patrimoine_vault_entries" class="hide">
                  <?php foreach ($patrimoine->shared_vault_entries as $vault_entry) { ?>
                     <div class="row" id="<?php echo 'vaultEntry-' . $vault_entry['id']; ?>">
                        <div class="col-md-6">
                           <p class="mtop5">
                              <b><?php echo _l('server_address'); ?>: </b><?php echo $vault_entry['server_address']; ?>
                           </p>
                           <p>
                              <b><?php echo _l('port'); ?>: </b><?php echo !empty($vault_entry['port']) ? $vault_entry['port'] : _l('no_port_provided'); ?>
                           </p>
                           <p>
                              <b><?php echo _l('vault_username'); ?>: </b><?php echo $vault_entry['username']; ?>
                           </p>
                           <p class="no-margin">
                              <b><?php echo _l('vault_password'); ?>: </b><span class="vault-password-fake">
                                 <?php echo str_repeat('&bull;', 10); ?> </span><span class="vault-password-encrypted"></span> <a href="#" class="vault-view-password mleft10" data-toggle="tooltip" data-title="<?php echo _l('view_password'); ?>" onclick="vault_re_enter_password(<?php echo $vault_entry['id']; ?>,this); return false;"><i class="fa fa-lock" aria-hidden="true"></i></a>
                           </p>
                        </div>
                        <div class="col-md-6">
                           <?php if (!empty($vault_entry['description'])) { ?>
                              <p>
                                 <b><?php echo _l('vault_description'); ?>: </b><br /><?php echo $vault_entry['description']; ?>
                              </p>
                           <?php } ?>
                        </div>
                     </div>
                     <hr class="hr-10" />
                  <?php } ?>
               </div>
               <hr class="hr-panel-heading patrimoine-area-separation" />
            </div>
         <?php } ?>
         <div class="col-md-7">
            <table class="table no-margin patrimoine-overview-table">
               <tbody>
                  <tr class="patrimoine-overview-id">
                     <td class="bold"><?php echo _l('patrimoine'); ?> <?php echo _l('the_number_sign'); ?></td>
                     <td>
                        <?php echo $patrimoine->id; ?>
                     </td>
                  </tr>
                  <tr class="patrimoine-overview-customer">
                     <td class="bold"><?php echo _l('patrimoine_customer'); ?></td>
                     <td>
                        <a href="<?php echo admin_url(); ?>clients/client/<?php echo $patrimoine->clientid; ?>">
                           <?php echo $patrimoine->client_data->company; ?>
                        </a>
                     </td>
                  </tr>
                  <?php if (has_permission('patrimoines', '', 'edit')) { ?>
                     <tr class="patrimoine-overview-billing">
                        <td class="bold"><?php echo _l('patrimoine_billing_type'); ?></td>
                        <td>
                           <?php
                           if ($patrimoine->billing_type == 1) {
                              $type_name = 'patrimoine_billing_type_fixed_cost';
                           } else if ($patrimoine->billing_type == 2) {
                              $type_name = 'patrimoine_billing_type_patrimoine_hours';
                           } else {
                              $type_name = 'patrimoine_billing_type_patrimoine_task_hours';
                           }
                           echo _l($type_name);
                           ?>
                        </td>
                     <?php if ($patrimoine->billing_type == 1 || $patrimoine->billing_type == 2) {
                        echo '<tr class="patrimoine-overview-amount">';
                        if ($patrimoine->billing_type == 1) {
                           echo '<td class="bold">' . _l('patrimoine_total_cost') . '</td>';
                           echo '<td>' . app_format_money($patrimoine->patrimoine_cost, $currency) . '</td>';
                        } else {
                           echo '<td class="bold">' . _l('patrimoine_rate_per_hour') . '</td>';
                           echo '<td>' . app_format_money($patrimoine->patrimoine_rate_per_hour, $currency) . '</td>';
                        }
                        echo '<tr>';
                     }
                  }
                     ?>
                     <tr class="patrimoine-overview-status">
                        <td class="bold"><?php echo _l('patrimoine_status'); ?></td>
                        <td><?php echo $patrimoine_status['name']; ?></td>
                     </tr>
                     <tr class="patrimoine-overview-date-created">
                        <td class="bold"><?php echo _l('patrimoine_datecreated'); ?></td>
                        <td><?php echo _d($patrimoine->patrimoine_created); ?></td>
                     </tr>
                     <tr class="patrimoine-overview-start-date">
                        <td class="bold"><?php echo _l('patrimoine_start_date'); ?></td>
                        <td><?php echo _d($patrimoine->start_date); ?></td>
                     </tr>
                     <?php if ($patrimoine->deadline) { ?>
                        <tr class="patrimoine-overview-deadline">
                           <td class="bold"><?php echo _l('patrimoine_deadline'); ?></td>
                           <td><?php echo _d($patrimoine->deadline); ?></td>
                        </tr>
                     <?php } ?>
                     <?php if ($patrimoine->date_finished) { ?>
                        <tr class="patrimoine-overview-date-finished">
                           <td class="bold"><?php echo _l('patrimoine_completed_date'); ?></td>
                           <td class="text-success"><?php echo _dt($patrimoine->date_finished); ?></td>
                        </tr>
                     <?php } ?>
                     <?php if ($patrimoine->estimated_hours && $patrimoine->estimated_hours != '0') { ?>
                        <tr class="patrimoine-overview-estimated-hours">
                           <td class="bold<?php if (hours_to_seconds_format($patrimoine->estimated_hours) < (int)$patrimoine_total_logged_time) {
                                             echo ' text-warning';
                                          } ?>"><?php echo _l('estimated_hours'); ?></td>
                           <td><?php echo str_replace('.', ':', $patrimoine->estimated_hours); ?></td>
                        </tr>
                     <?php } ?>
                     <?php if (has_permission('patrimoines', '', 'create')) { ?>
                        <tr class="patrimoine-overview-total-logged-hours">
                           <td class="bold"><?php echo _l('patrimoine_overview_total_logged_hours'); ?></td>
                           <td><?php echo seconds_to_time_format($patrimoine_total_logged_time); ?></td>
                        </tr>
                     <?php } ?>
                     <?php $custom_fields = get_custom_fields('patrimoines');
                     if (count($custom_fields) > 0) { ?>
                        <?php foreach ($custom_fields as $field) { ?>
                           <?php $value = get_custom_field_value($patrimoine->id, $field['id'], 'patrimoines');
                           if ($value == '') {
                              continue;
                           } ?>
                           <tr>
                              <td class="bold"><?php echo ucfirst($field['name']); ?></td>
                              <td><?php echo $value; ?></td>
                           </tr>
                        <?php } ?>
                     <?php } ?>
               </tbody>
            </table>
         </div>
         <div class="col-md-5 text-center patrimoine-percent-col mtop10">
            <p class="bold"><?php echo _l('patrimoine_progress_text'); ?></p>
            <div class="patrimoine-progress relative mtop15" data-value="<?php echo $percent_circle; ?>" data-size="150" data-thickness="22" data-reverse="true">
               <strong class="patrimoine-percent"></strong>
            </div>
            <?php hooks()->do_action('admin_area_after_patrimoine_progress') ?>
         </div>
      </div>
      <?php $tags = get_tags_in($patrimoine->id, 'patrimoine'); ?>
      <?php if (count($tags) > 0) { ?>
         <div class="clearfix"></div>
         <div class="tags-read-only-custom patrimoine-overview-tags">
            <hr class="hr-panel-heading patrimoine-area-separation hr-10" />
            <?php echo '<p class="font-size-14"><b><i class="fa fa-tag" aria-hidden="true"></i> ' . _l('tags') . ':</b></p>'; ?>
            <input type="text" class="tagsinput read-only" id="tags" name="tags" value="<?php echo prep_tags_input($tags); ?>" data-role="tagsinput">
         </div>
         <div class="clearfix"></div>
      <?php } ?>
      <div class="tc-content patrimoine-overview-description">
         <hr class="hr-panel-heading patrimoine-area-separation" />
         <p class="bold font-size-14 patrimoine-info"><?php echo _l('patrimoine_description'); ?></p>
         <?php if (empty($patrimoine->description)) {
            echo '<p class="text-muted no-mbot mtop15">' . _l('no_description_patrimoine') . '</p>';
         }
         echo check_for_links($patrimoine->description); ?>
      </div>
      <div class="team-members patrimoine-overview-team-members">
         <hr class="hr-panel-heading patrimoine-area-separation" />
         <?php if (has_permission('patrimoines', '', 'edit')) { ?>
            <div class="inline-block pull-right mright10 patrimoine-member-settings" data-toggle="tooltip" data-title="<?php echo _l('add_edit_members'); ?>">
               <a href="#" data-toggle="modal" class="pull-right" data-target="#add-edit-members"><i class="fa fa-cog"></i></a>
            </div>
         <?php } ?>
         <p class="bold font-size-14 patrimoine-info">
            <?php echo _l('patrimoine_members'); ?>
         </p>
         <div class="clearfix"></div>
         <?php
         if (count($members) == 0) {
            echo '<p class="text-muted mtop10 no-mbot">' . _l('no_patrimoine_members') . '</p>';
         }
         foreach ($members as $member) { ?>
            <div class="media">
               <div class="media-left">
                  <a href="<?php echo admin_url('profile/' . $member["staff_id"]); ?>">
                     <?php echo staff_profile_image($member['staff_id'], array('staff-profile-image-small', 'media-object')); ?>
                  </a>
               </div>
               <div class="media-body">
                  <?php if (has_permission('patrimoines', '', 'edit')) { ?>
                     <a href="<?php echo admin_url('wealth_management/remove_team_member/' . $patrimoine->id . '/' . $member['staff_id']); ?>" class="pull-right text-danger _delete"><i class="fa fa fa-times"></i></a>
                  <?php } ?>
                  <h5 class="media-heading mtop5"><a href="<?php echo admin_url('profile/' . $member["staff_id"]); ?>"><?php echo get_staff_full_name($member['staff_id']); ?></a>
                     <?php if (has_permission('patrimoines', '', 'create') || $member['staff_id'] == get_staff_user_id()) { ?>
                        <br /><small class="text-muted"><?php echo _l('total_logged_hours_by_staff') . ': ' . seconds_to_time_format($member['total_logged_time']); ?></small>
                     <?php } ?>
                  </h5>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
   <div class="col-md-6 patrimoine-overview-right">
      <div class="row">
         <div class="col-md-<?php echo ($patrimoine->deadline ? 6 : 12); ?> patrimoine-progress-bars">
            <div class="row">
               <div class="patrimoine-overview-open-tasks">
                  <div class="col-md-9">
                     <p class="text-uppercase bold text-dark font-medium">
                        <span dir="ltr"><?php echo $tasks_not_completed; ?> / <?php echo $total_tasks; ?></span>
                        <?php echo _l('patrimoine_open_tasks'); ?>
                     </p>
                     <p class="text-muted bold"><?php echo $tasks_not_completed_progress; ?>%</p>
                  </div>
                  <div class="col-md-3 text-right">
                     <i class="fa fa-check-circle<?php if ($tasks_not_completed_progress >= 100) {
                                                      echo ' text-success';
                                                   } ?>" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-12 mtop5">
                     <div class="progress no-margin progress-bar-mini">
                        <div class="progress-bar progress-bar-success no-percent-text not-dynamic" role="progressbar" aria-valuenow="<?php echo $tasks_not_completed_progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%" data-percent="<?php echo $tasks_not_completed_progress; ?>">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php if ($patrimoine->deadline) { ?>
            <div class="col-md-6 patrimoine-progress-bars patrimoine-overview-days-left">
               <div class="row">
                  <div class="col-md-9">
                     <p class="text-uppercase bold text-dark font-medium">
                        <span dir="ltr"><?php echo $patrimoine_days_left; ?> / <?php echo $patrimoine_total_days; ?></span>
                        <?php echo _l('patrimoine_days_left'); ?>
                     </p>
                     <p class="text-muted bold"><?php echo $patrimoine_time_left_percent; ?>%</p>
                  </div>
                  <div class="col-md-3 text-right">
                     <i class="fa fa-calendar-check-o<?php if ($patrimoine_time_left_percent >= 100) {
                                                         echo ' text-success';
                                                      } ?>" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-12 mtop5">
                     <div class="progress no-margin progress-bar-mini">
                        <div class="progress-bar<?php if ($patrimoine_time_left_percent == 0) {
                                                   echo ' progress-bar-warning ';
                                                } else {
                                                   echo ' progress-bar-success ';
                                                } ?>no-percent-text not-dynamic" role="progressbar" aria-valuenow="<?php echo $patrimoine_time_left_percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%" data-percent="<?php echo $patrimoine_time_left_percent; ?>">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
      <hr class="hr-panel-heading" />

      <?php if (has_permission('patrimoines', '', 'create')) { ?>
         <div class="row">
            <?php if ($patrimoine->billing_type == 3 || $patrimoine->billing_type == 2) { ?>
               <div class="col-md-12 patrimoine-overview-logged-hours-finance">
                  <div class="col-md-3">
                     <?php
                     $data = $this->patrimoines_model->total_logged_time_by_billing_type($patrimoine->id);
                     ?>
                     <p class="text-uppercase text-muted"><?php echo _l('patrimoine_overview_logged_hours'); ?> <span class="bold"><?php echo $data['logged_time']; ?></span></p>
                     <p class="bold font-medium"><?php echo app_format_money($data['total_money'], $currency); ?></p>
                  </div>
                  <div class="col-md-3">
                     <?php
                     $data = $this->patrimoines_model->data_billable_time($patrimoine->id);
                     ?>
                     <p class="text-uppercase text-info"><?php echo _l('patrimoine_overview_billable_hours'); ?> <span class="bold"><?php echo $data['logged_time'] ?></span></p>
                     <p class="bold font-medium"><?php echo app_format_money($data['total_money'], $currency); ?></p>
                  </div>
                  <div class="col-md-3">
                     <?php
                     $data = $this->patrimoines_model->data_billed_time($patrimoine->id);
                     ?>
                     <p class="text-uppercase text-success"><?php echo _l('patrimoine_overview_billed_hours'); ?> <span class="bold"><?php echo $data['logged_time']; ?></span></p>
                     <p class="bold font-medium"><?php echo app_format_money($data['total_money'], $currency); ?></p>
                  </div>
                  <div class="col-md-3">
                     <?php
                     $data = $this->patrimoines_model->data_unbilled_time($patrimoine->id);
                     ?>
                     <p class="text-uppercase text-danger"><?php echo _l('patrimoine_overview_unbilled_hours'); ?> <span class="bold"><?php echo $data['logged_time']; ?></span></p>
                     <p class="bold font-medium"><?php echo app_format_money($data['total_money'], $currency); ?></p>
                  </div>
                  <div class="clearfix"></div>
                  <hr class="hr-panel-heading" />
               </div>
            <?php } ?>
         </div>
         <div class="row">
            <div class="col-md-12 patrimoine-overview-expenses-finance">
               <div class="col-md-3">
                  <p class="text-uppercase text-muted"><?php echo _l('patrimoine_overview_expenses'); ?></p>
                  <p class="bold font-medium"><?php echo app_format_money(sum_from_table(db_prefix() . 'expenses', array('where' => array('patrimoine_id' => $patrimoine->id), 'field' => 'amount')), $currency); ?></p>
               </div>
               <div class="col-md-3">
                  <p class="text-uppercase text-info"><?php echo _l('patrimoine_overview_expenses_billable'); ?></p>
                  <p class="bold font-medium"><?php echo app_format_money(sum_from_table(db_prefix() . 'expenses', array('where' => array('patrimoine_id' => $patrimoine->id, 'billable' => 1), 'field' => 'amount')), $currency); ?></p>
               </div>
               <div class="col-md-3">
                  <p class="text-uppercase text-success"><?php echo _l('patrimoine_overview_expenses_billed'); ?></p>
                  <p class="bold font-medium"><?php echo app_format_money(sum_from_table(db_prefix() . 'expenses', array('where' => array('patrimoine_id' => $patrimoine->id, 'invoiceid !=' => 'NULL', 'billable' => 1), 'field' => 'amount')), $currency); ?></p>
               </div>
               <div class="col-md-3">
                  <p class="text-uppercase text-danger"><?php echo _l('patrimoine_overview_expenses_unbilled'); ?></p>
                  <p class="bold font-medium"><?php echo app_format_money(sum_from_table(db_prefix() . 'expenses', array('where' => array('patrimoine_id' => $patrimoine->id, 'invoiceid IS NULL', 'billable' => 1), 'field' => 'amount')), $currency); ?></p>
               </div>
            </div>
         </div>
      <?php } ?>
      <div class="patrimoine-overview-timesheets-chart">
         <hr class="hr-panel-heading" />
         <div class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuPatrimoineLoggedTime" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <?php if (!$this->input->get('overview_chart')) {
                  echo _l('this_week');
               } else {
                  echo _l($this->input->get('overview_chart'));
               }
               ?>
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuPatrimoineLoggedTime">
               <li><a href="<?php echo admin_url('wealth_management/view/' . $patrimoine->id . '?group=patrimoine_overview&overview_chart=this_week'); ?>"><?php echo _l('this_week'); ?></a></li>
               <li><a href="<?php echo admin_url('wealth_management/view/' . $patrimoine->id . '?group=patrimoine_overview&overview_chart=last_week'); ?>"><?php echo _l('last_week'); ?></a></li>
               <li><a href="<?php echo admin_url('wealth_management/view/' . $patrimoine->id . '?group=patrimoine_overview&overview_chart=this_month'); ?>"><?php echo _l('this_month'); ?></a></li>
               <li><a href="<?php echo admin_url('wealth_management/view/' . $patrimoine->id . '?group=patrimoine_overview&overview_chart=last_month'); ?>"><?php echo _l('last_month'); ?></a></li>
            </ul>
         </div>
         <div class="clearfix"></div>
         <canvas id="timesheetsChart" style="max-height:300px;" width="300" height="300"></canvas>
      </div>

   </div>
</div>
<div class="modal fade" id="add-edit-members" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <?php echo form_open(admin_url('wealth_management/add_edit_members/' . $patrimoine->id)); ?>
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo _l('patrimoine_members'); ?></h4>
         </div>
         <div class="modal-body">
            <?php
            $selected = array();
            foreach ($members as $member) {
               array_push($selected, $member['staff_id']);
            }
            echo render_select('patrimoine_members[]', $staff, array('staffid', array('firstname', 'lastname')), 'patrimoine_members', $selected, array('multiple' => true, 'data-actions-box' => true), array(), '', '', false);
            ?>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
            <button type="submit" class="btn btn-info" autocomplete="off" data-loading-text="<?php echo _l('wait_text'); ?>"><?php echo _l('submit'); ?></button>
         </div>
      </div>
      <!-- /.modal-content -->
      <?php echo form_close(); ?>
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php if (isset($patrimoine_overview_chart)) { ?>
   <script>
      var patrimoine_overview_chart = <?php echo json_encode($patrimoine_overview_chart); ?>;
   </script>
<?php } ?>
