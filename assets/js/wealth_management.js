/******************************************** */
/***************| PROCHE |****************** */
/****************************************** */
// New task function, various actions performed
function new_patrimoine(url, type) {
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
    new_patrimoine(url, type);
}

// Go to edit view
function edit_info_patrimoine(id, type) { 
    requestGet('wealth_management/addInfo?id='+id+'&patrimoine_id=&type='+type).done(function (response) {
        $('#_task').html(response);
        $('#'+type+'-modal').modal('hide');
        $("body").find('._info_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    });
}

// Handles task add/edit form modal. --proche
function patrimoine_form_handler(form) {
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
        } else {
            $errors = JSON.parse(response.message);
            $message = "<ul>"; 
            $.each($errors, function(key, value) {
                $message += "<li> - " + value + "</li>";
            })
            $message += "</ul>";  
            alert_float('danger', $message);
            console.log($message);
            $('._info_modal').find('button[type="submit"]').prop('disabled', false);
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************** */
/***************| Comment |****************** */
/****************************************** */

function new_patremoione_comment(patrimoine_id, type) {
    
}

function new_comment(url, type) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addComment?id=&patrimoine_id=&type=' + type;

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#comment-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('._comment_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    } 
    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('._comment_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function comment_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('._comment_modal').find('button[type="submit"]').prop('disabled', true);
    
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
            $('#'+response.type+'_comment_text').html(response.text);
            form.reset();
            $('._comment_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

// Go to edit view
function edit_comment_patrimoine(patrimoine_id, id, type) { 
    if(patrimoine_id) {
        var url = admin_url + 'wealth_management/addComment?id=&patrimoine_id='+patrimoine_id+'&type='+type; 
        new_comment(url, type);
    } else {
        requestGet('wealth_management/addComment?id='+id+'&patrimoine_id=&type='+type).done(function (response) {
            $('#_task').html(response);
            $('#comment-modal').modal('hide');
            $("body").find('._comment_modal').modal({
                show: true,
                backdrop: 'static'
            });
        }).fail(function (error) {
            alert_float('danger', error.responseText);
        });
    }
}

/******************************************** */
/**********| Bien QUESTION |**************** */
/****************************************** */
function new_patremoione_bien_qst(patrimoine_id) {
    var url = admin_url + 'wealth_management/addBienQst?id=&patrimoine_id='+patrimoine_id; 
    new_bien_qst(url);
}

function new_bien_qst(url) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addBienQst';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#bien_qst-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('._bien_qst_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    } 
    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('._bien_qst_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

// Go to edit view
function edit_bien_qst_patrimoine(id) { 
    requestGet('wealth_management/addBienQst/'+id).done(function (response) {
        $('#_task').html(response);
        $('#bien_qst-modal').modal('hide');
        $("body").find('._bien_qst_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    });
}
