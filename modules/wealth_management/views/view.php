<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
   <?php echo form_hidden('patrimoine_id', $patrimoine->id) ?>
   <div class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="panel_s patrimoine-top-panel panel-full">
               <div class="panel-body _buttons">
                  <div class="row">
                     <div class="col-md-7 patrimoine-heading">
                        <h3 class="hide patrimoine-name"><?php echo $patrimoine->name; ?></h3>

                        <div id="patrimoine_view_name" class="pull-left">
                           <select class="selectpicker" id="patrimoine_top" data-width="100%" <?php if (count($other_patrimoines) > 6) { ?> data-live-search="true" <?php } ?>>
                              <option value="<?php echo $patrimoine->id; ?>" selected data-content="<?php echo $patrimoine->name; ?> - <small><?php echo $patrimoine->client_data->company; ?></small>">
                                 <?php echo $patrimoine->client_data->company; ?> <?php echo $patrimoine->name; ?>
                              </option>
                              <?php foreach ($other_patrimoines as $op) { ?>
                                 <option value="<?php echo $op['id']; ?>" data-subtext="<?php echo $op['company']; ?>">#<?php echo $op['id']; ?> - <?php echo $op['name']; ?></option>
                              <?php } ?>
                           </select>
                        </div>

                        <div class="visible-xs">
                           <div class="clearfix"></div>
                        </div>

                        <?php echo '<div class="label pull-left mleft15 mtop8 p8 patrimoine-status-label-' . $patrimoine->status . '" style="background:' . $patrimoine_status['color'] . '">' . $patrimoine_status['name'] . '</div>'; ?>

                     </div>

                     <div class="col-md-5 text-right">
                        <?php if (has_permission('tasks', '', 'create')) { ?>
                           <a href="#" onclick="new_task_from_relation(undefined,'patrimoine',<?php echo $patrimoine->id; ?>); return false;" class="btn btn-info"><?php echo _l('new_task'); ?></a>
                        <?php } ?>
                        <?php
                        $invoice_func = 'pre_invoice_patrimoine';
                        ?>
                        <?php if (has_permission('invoices', '', 'create')) { ?>
                           <a href="#" onclick="<?php echo $invoice_func; ?>(<?php echo $patrimoine->id; ?>); return false;" class="invoice-patrimoine btn btn-info<?php if ($patrimoine->client_data->active == 0) {
                                                                                                                                                                        echo ' disabled';
                                                                                                                                                                     } ?>"><?php echo _l('invoice_patrimoine'); ?></a>
                        <?php } ?>
                        <?php
                        $patrimoine_pin_tooltip = _l('pin_patrimoine');
                        if (total_rows(db_prefix() . 'pinned_patrimoines', array('staff_id' => get_staff_user_id(), 'patrimoine_id' => $patrimoine->id)) > 0) {
                           $patrimoine_pin_tooltip = _l('unpin_patrimoine');
                        }
                        ?>
                        <div class="btn-group">
                           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo _l('more'); ?> <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-right width200 patrimoine-actions">
                              <li>
                                 <a href="<?php echo admin_url('wealth_management/pin_action/' . $patrimoine->id); ?>">
                                    <?php echo $patrimoine_pin_tooltip; ?>
                                 </a>
                              </li>
                              <?php if (has_permission('patrimoines', '', 'edit')) { ?>
                                 <li>
                                    <a href="<?php echo admin_url('wealth_management/patrimoine/' . $patrimoine->id); ?>">
                                       <?php echo _l('edit_patrimoine'); ?>
                                    </a>
                                 </li>
                              <?php } ?>
                              <?php if (has_permission('patrimoines', '', 'create')) { ?>
                                 <li>
                                    <a href="#" onclick="copy_patrimoine(); return false;">
                                       <?php echo _l('copy_patrimoine'); ?>
                                    </a>
                                 </li>
                              <?php } ?>
                              <?php if (has_permission('patrimoines', '', 'create') || has_permission('patrimoines', '', 'edit')) { ?>
                                 <li class="divider"></li>
                                 <?php foreach ($statuses as $status) {
                                    if ($status['id'] == $patrimoine->status) {
                                       continue;
                                    }
                                 ?>
                                    <li>
                                       <a href="#" data-name="<?php echo _l('patrimoine_status_' . $status['id']); ?>" onclick="patrimoine_mark_as_modal(<?php echo $status['id']; ?>,<?php echo $patrimoine->id; ?>, this); return false;"><?php echo _l('patrimoine_mark_as', $status['name']); ?></a>
                                    </li>
                                 <?php } ?>
                              <?php } ?>
                              <li class="divider"></li>
                              <?php if (has_permission('patrimoines', '', 'create')) { ?>
                                 <li>
                                    <a href="<?php echo admin_url('wealth_management/export_patrimoine_data/' . $patrimoine->id); ?>" target="_blank"><?php echo _l('export_patrimoine_data'); ?></a>
                                 </li>
                              <?php } ?>
                              <?php if (is_admin()) { ?>
                                 <li>
                                    <a href="<?php echo admin_url('wealth_management/view_patrimoine_as_client/' . $patrimoine->id . '/' . $patrimoine->clientid); ?>" target="_blank"><?php echo _l('patrimoine_view_as_client'); ?></a>
                                 </li>
                              <?php } ?>
                              <?php if (has_permission('patrimoines', '', 'delete')) { ?>
                                 <li>
                                    <a href="<?php echo admin_url('wealth_management/delete/' . $patrimoine->id); ?>" class="_delete">
                                       <span class="text-danger"><?php echo _l('delete_patrimoine'); ?></span>
                                    </a>
                                 </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>

                  </div>
               </div>
            </div>

            <div class="panel_s patrimoine-menu-panel">
               <div class="panel-body custom-panel">
                  <?php hooks()->do_action('before_render_patrimoine_view', $patrimoine->id); ?>
                  <?php $this->load->view('wealth_management/patrimoine_tabs'); ?>
               </div>
            </div>

            <?php
            if ((has_permission('patrimoines', '', 'create') || has_permission('patrimoines', '', 'edit'))
               && $patrimoine->status == 1
               && $this->patrimoines_model->timers_started_for_patrimoine($patrimoine->id)
               && $tab['slug'] != 'patrimoine_milestones'
            ) {
            ?>
               <div class="alert alert-warning patrimoine-no-started-timers-found mbot15">
                  <?php echo _l('patrimoine_not_started_status_tasks_timers_found'); ?>
               </div>
            <?php } ?>
            <?php
            if (
               $patrimoine->deadline && date('Y-m-d') > $patrimoine->deadline
               && $patrimoine->status == 2
               && $tab['slug'] != 'patrimoine_milestones'
            ) {
            ?>
               <div class="alert alert-warning bold patrimoine-due-notice mbot15">
                  <?php echo _l('patrimoine_due_notice', floor((abs(time() - strtotime($patrimoine->deadline))) / (60 * 60 * 24))); ?>
               </div>
            <?php } ?>
            <?php
            if (
               !has_contact_permission('patrimoines', get_primary_contact_user_id($patrimoine->clientid))
               && total_rows(db_prefix() . 'contacts', array('userid' => $patrimoine->clientid)) > 0
               && $tab['slug'] != 'patrimoine_milestones'
            ) {
            ?>
               <div class="alert alert-warning patrimoine-permissions-warning mbot15">
                  <?php echo _l('patrimoine_customer_permission_warning'); ?>
               </div>
            <?php } ?>

            <div class="panel_s">
               <div class="panel-body">
                  <?php $this->load->view(($tab ? $tab['view'] : 'wealth_management/patrimoine_overview')); ?>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
</div>
</div>
<?php if (isset($discussion)) {
   echo form_hidden('discussion_id', $discussion->id);
   echo form_hidden('discussion_user_profile_image_url', $discussion_user_profile_image_url);
   echo form_hidden('current_user_is_admin', $current_user_is_admin);
}
echo form_hidden('patrimoine_percent', $percent);
?>
<div id="invoice_patrimoine"></div>
<div id="pre_invoice_patrimoine"></div>

<?php $this->load->view('wealth_management/milestone'); ?>
<?php $this->load->view('wealth_management/copy_settings'); ?>
<?php $this->load->view('wealth_management/_mark_tasks_finished'); ?>

<?php init_tail(); ?>
<!-- For invoices table -->
<script>
   taskid = '<?php echo $this->input->get('taskid'); ?>';
</script>
<script>
   var gantt_data = {};
   <?php if (isset($gantt_data)) { ?>
      gantt_data = <?php echo json_encode($gantt_data); ?>;
   <?php } ?>
   var discussion_id = $('input[name="discussion_id"]').val();
   var discussion_user_profile_image_url = $('input[name="discussion_user_profile_image_url"]').val();
   var current_user_is_admin = $('input[name="current_user_is_admin"]').val();
   var patrimoine_id = $('input[name="patrimoine_id"]').val();
   if (typeof(discussion_id) != 'undefined') {
      discussion_comments('#discussion-comments', discussion_id, 'regular');
   }
   $(function() {
      var patrimoine_progress_color = '<?php echo hooks()->apply_filters('admin_patrimoine_progress_color', '#84c529'); ?>';
      var circle = $('.patrimoine-progress').circleProgress({
         fill: {
            gradient: [patrimoine_progress_color, patrimoine_progress_color]
         }
      }).on('circle-animation-progress', function(event, progress, stepValue) {
         $(this).find('strong.patrimoine-percent').html(parseInt(100 * stepValue) + '<i>%</i>');
      });
   });

   function discussion_comments(selector, discussion_id, discussion_type) {
      var defaults = _get_jquery_comments_default_config(<?php echo json_encode(get_patrimoine_discussions_language_array()); ?>);
      var options = {
         // https://github.com/Viima/jquery-comments/pull/169
         wysiwyg_editor: {
            opts: {
               enable: true,
               is_html: true,
               container_id: 'editor-container',
               comment_index: 0,
            },
            init: function(textarea, content) {
               var comment_index = textarea.data('comment_index');
               var editorConfig = _simple_editor_config();
               editorConfig.setup = function(ed) {
                  textarea.data('wysiwyg_editor', ed);

                  ed.on('change', function() {
                     var value = ed.getContent();
                     if (value !== ed._lastChange) {
                        ed._lastChange = value;
                        textarea.trigger('change');
                     }
                  });

                  ed.on('keyup', function() {
                     var value = ed.getContent();
                     if (value !== ed._lastChange) {
                        ed._lastChange = value;
                        textarea.trigger('change');
                     }
                  });

                  ed.on('Focus', function(e) {
                     setTimeout(function() {
                        textarea.trigger('click');
                     }, 500)
                  });

                  ed.on('init', function() {
                     if (content) ed.setContent(content);

                     if ($('#mention-autocomplete-css').length === 0) {
                        $('<link>').appendTo('head').attr({
                           id: 'mention-autocomplete-css',
                           type: 'text/css',
                           rel: 'stylesheet',
                           href: site_url + 'assets/plugins/tinymce/plugins/mention/autocomplete.css'
                        });
                     }

                     if ($('#mention-css').length === 0) {
                        $('<link>').appendTo('head').attr({
                           type: 'text/css',
                           id: 'mention-css',
                           rel: 'stylesheet',
                           href: site_url + 'assets/plugins/tinymce/plugins/mention/rte-content.css'
                        });
                     }
                  })
               }

               editorConfig.plugins[0] += ' mention';
               editorConfig.content_style = 'span.mention {\
                     background-color: #eeeeee;\
                     padding: 3px;\
                  }';
               var patrimoineUserMentions = [];
               editorConfig.mentions = {
                  source: function(query, process, delimiter) {
                     if (patrimoineUserMentions.length < 1) {
                        $.getJSON(admin_url + 'wealth_management/get_staff_names_for_mentions/' + patrimoine_id, function(data) {
                           patrimoineUserMentions = data;
                           process(data)
                        });
                     } else {
                        process(patrimoineUserMentions)
                     }
                  },
                  insert: function(item) {
                     return '<span class="mention" contenteditable="false" data-mention-id="' + item.id + '">@' +
                        item.name + '</span>&nbsp;';
                  }
               };

               var containerId = this.get_container_id(comment_index);
               tinyMCE.remove('#' + containerId);

               setTimeout(function() {
                  init_editor('#' + containerId, editorConfig)
               }, 100)
            },
            get_container: function(textarea) {
               if (!textarea.data('comment_index')) {
                  textarea.data('comment_index', ++this.opts.comment_index);
               }

               return $('<div/>', {
                  'id': this.get_container_id(this.opts.comment_index)
               });
            },
            get_contents: function(editor) {
               return editor.getContent();
            },
            on_post_comment: function(editor, evt) {
               editor.setContent('');
            },
            get_container_id: function(comment_index) {
               var container_id = this.opts.container_id;
               if (comment_index) container_id = container_id + "-" + comment_index;
               return container_id;
            }
         },
         currentUserIsAdmin: current_user_is_admin,
         getComments: function(success, error) {
            $.get(admin_url + 'wealth_management/get_discussion_comments/' + discussion_id + '/' + discussion_type, function(response) {
               success(response);
            }, 'json');
         },
         postComment: function(commentJSON, success, error) {
            $.ajax({
               type: 'post',
               url: admin_url + 'wealth_management/add_discussion_comment/' + discussion_id + '/' + discussion_type,
               data: commentJSON,
               success: function(comment) {
                  comment = JSON.parse(comment);
                  success(comment)
               },
               error: error
            });
         },
         putComment: function(commentJSON, success, error) {
            $.ajax({
               type: 'post',
               url: admin_url + 'wealth_management/update_discussion_comment',
               data: commentJSON,
               success: function(comment) {
                  comment = JSON.parse(comment);
                  success(comment)
               },
               error: error
            });
         },
         deleteComment: function(commentJSON, success, error) {
            $.ajax({
               type: 'post',
               url: admin_url + 'wealth_management/delete_discussion_comment/' + commentJSON.id,
               success: success,
               error: error
            });
         },
         uploadAttachments: function(commentArray, success, error) {
            var responses = 0;
            var successfulUploads = [];
            var serverResponded = function() {
               responses++;
               // Check if all requests have finished
               if (responses == commentArray.length) {
                  // Case: all failed
                  if (successfulUploads.length == 0) {
                     error();
                     // Case: some succeeded
                  } else {
                     successfulUploads = JSON.parse(successfulUploads);
                     success(successfulUploads)
                  }
               }
            }
            $(commentArray).each(function(index, commentJSON) {
               // Create form data
               var formData = new FormData();
               if (commentJSON.file.size && commentJSON.file.size > app.max_php_ini_upload_size_bytes) {
                  alert_float('danger', "<?php echo _l("file_exceeds_max_filesize"); ?>");
                  serverResponded();
               } else {
                  $(Object.keys(commentJSON)).each(function(index, key) {
                     var value = commentJSON[key];
                     if (value) formData.append(key, value);
                  });

                  if (typeof(csrfData) !== 'undefined') {
                     formData.append(csrfData['token_name'], csrfData['hash']);
                  }
                  $.ajax({
                     url: admin_url + 'wealth_management/add_discussion_comment/' + discussion_id + '/' + discussion_type,
                     type: 'POST',
                     data: formData,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function(commentJSON) {
                        successfulUploads.push(commentJSON);
                        serverResponded();
                     },
                     error: function(data) {
                        var error = JSON.parse(data.responseText);
                        alert_float('danger', error.message);
                        serverResponded();
                     },
                  });
               }
            });
         }
      }
      var settings = $.extend({}, defaults, options);
      $(selector).comments(settings);
   }
</script>
</body>

</html>
