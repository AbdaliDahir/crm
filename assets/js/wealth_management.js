/******************************************** */
/***************| PROCHE |****************** */
/****************************************** */

// New task function, various actions performed
function new_patremoine(url, type) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addInfo?id=&patrimoine_id=&type=' + type;

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#'+type+'-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('._info_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }
console.log("nothing");
    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('._info_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_patremoione_info_from_relation(patrimoine_id, type) {
    // if (typeof (rel_id) == 'undefined') {
    //   rel_id = $(table).data('new-rel-id');
    // }
    var url = admin_url + 'wealth_management/addInfo?id=&patrimoine_id='+patrimoine_id+'&type='+type; 
    new_patremoine(url, type);
}

// Go to edit view
function edit_info_patremoine(id, type) {
    console.log("we are here");
    requestGet('wealth_management/addInfo?id='+id+'&patrimoine_id=&type='+type).done(function (response) { 
        console.log('nothing clear');
        $('#_task').html(response);
        $('#'+type+'-modal').modal('hide');
        $("body").find('._info_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal. -- proche
function patremoine_form_handler(form) {
    // Disable the save button in cases od duplicate clicks
    $('._info_modal').find('button[type="submit"]').prop('disabled', true);
    
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
            $('._info_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}
