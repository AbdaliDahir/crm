// New task function, various actions performed
function new_proche(url, timer_id) {
  url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addProches';

  var $leadModal = $('#lead-modal');

  if ($leadModal.is(':visible')) {
      url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
      if (url.indexOf('?') === -1) {
          url = url.replace('&', '?');
      }
      $leadModal.modal('hide');
  }

  var $taskSingleModal = $('#task-modal');
  if ($taskSingleModal.is(':visible')) {
      $taskSingleModal.modal('hide');
  }

  var $taskEditModal = $('#_task_modal');
  if ($taskEditModal.is(':visible')) {
      $taskEditModal.modal('hide');
  }

  requestGet(url).done(function (response) {
    $('#_task').html(response);
    $("body").find('#_task_modal').modal({
        show: true,
        backdrop: 'static'
    });

    var stopTimerPopover = $('#timer-select-task');
    if (stopTimerPopover.is(':visible')) {
        $('.system-popup-close').click();
        window._timer_id = timer_id;
    }
  }).fail(function (error) {
      alert_float('danger', error.responseText);
  })
}

function new_proches_from_relation(table, rel_id) {
  if (typeof (rel_id) == 'undefined') {
    rel_id = $(table).data('new-rel-id');
  }
  var url = admin_url + 'wealth_management/addProches?patrimoine_id=' + rel_id;
  new_proche(url);
  console.log('hello world from proches 22');
}
