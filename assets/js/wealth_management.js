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

    var $taskSingleModal = $('#proche-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_proche_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_proche_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_proches_from_relation(patrimoine_id) {
    // if (typeof (rel_id) == 'undefined') {
    //   rel_id = $(table).data('new-rel-id');
    // }
    var url = admin_url + 'wealth_management/addProches?patrimoine_id=' + patrimoine_id;
    new_proche(url);
}

// Go to edit view
function edit_proche(proche_id) {
    requestGet('wealth_management/addProches/' + proche_id).done(function (response) { 
        $('#_task').html(response);
        $('#proche-modal').modal('hide');
        $("body").find('#_proche_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function proche_form_handler(form) {
    console.log('from inside from');

    // Disable the save button in cases od duplicate clicks
    $('#_proche_modal').find('button[type="submit"]').prop('disabled', true);

    var formURL = form.action;
    var formData = new FormData($(form)[0]);

    $.ajax({
        type: $(form).attr('method'),
        data: formData,
        mimeType: $(form).attr('enctype'),
        contentType: false,
        cache: false,
        processData: false,
        url: formURL
    }).done(function (response) {
        response = JSON.parse(response);

        if (response.success === true || response.success == 'true') {
            alert_float('success', response.message);
            form.reset();
            $('#_proche_modal').modal('hide');
            $('.btn-dt-reload').click();
        }

        // echo "hello world now ";
        // set_alert('success', _l('patrimoines_information_updated_success'), $id);
        // redirect(admin_url('wealth_management/view/'.$data['patrimoineid'].'?group=patrimoine_proches'));

        // if (window._timer_id) {
        //     requestGet(admin_url + '/tasks/get_task_by_id/' + response.id).done(function (response) {
        //         $('[data-timer-id="' + window._timer_id + '"').click();
        //         response = JSON.parse(response);
        //         var option = '<option value="' + response.id + '" title="' + response.name + '" selected>' + response.name + '</option>';
        //         $('#timer_add_task_id').append(option);
        //         $('#timer_add_task_id').trigger('change').data('AjaxBootstrapSelect').list.cache = {};
        //         $('#timer_add_task_id').selectpicker('refresh')
        //         delete window._timer_id;
        //     });
        //     $('#_task_modal').modal('hide');
        //     $('#task-modal').modal('hide');
        //     return false;
        // }

        // if (!$("body").hasClass('project')) {
        //     $('#_task_modal').attr('data-task-created', true);
        //     $('#_task_modal').modal('hide');
        //     init_task_modal(response.id);
        //     reload_tasks_tables();
        //     if ($('body').hasClass('kan-ban-body') && $('body').hasClass('tasks')) {
        //         tasks_kanban();
        //     }
        // } else {
        //     // reload page on project area
            // var location = window.location.href;
            // var params = [];
            // location = location.split('?');
            // window.location.href = buildUrl(location[0], params);
        // }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}
