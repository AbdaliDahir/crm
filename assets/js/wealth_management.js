/******************************************** */
/***************| PROCHE |****************** */
/****************************************** */

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
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| USAGE |****************** */
/**************************************** */

// New task function, various actions performed
function new_usage(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addUsage';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#usage-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_usage_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_usage_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_usage_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addUsage?patrimoine_id=' + patrimoine_id;
    new_usage(url);
}

// Go to edit view
function edit_usage(usage_id) {
    requestGet('wealth_management/addUsage/' + usage_id).done(function (response) { 
        $('#_task').html(response);
        $('#usage-modal').modal('hide');
        $("body").find('#_usage_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function usage_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_usage_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_usage_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Rapport |**************** */
/**************************************** */

function new_rapport(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addRapport';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#rapport-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_rapport_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_rapport_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_rapport_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addRapport?patrimoine_id=' + patrimoine_id;
    new_rapport(url);
}

// Go to edit view
function edit_rapport(rapport_id) {
    requestGet('wealth_management/addRapport/' + rapport_id).done(function (response) { 
        $('#_task').html(response);
        $('#rapport-modal').modal('hide');
        $("body").find('#_rapport_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function rapport_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_rapport_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_rapport_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Bien |****************** */
/**************************************** */

// New task function, various actions performed
function new_bien(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addBien';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#bien-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_bien_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_bien_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_bien_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addBien?patrimoine_id=' + patrimoine_id;
    new_bien(url);
}

// Go to edit view
function edit_bien(bien_id) {
    requestGet('wealth_management/addBien/' + bien_id).done(function (response) { 
        $('#_task').html(response);
        $('#bien-modal').modal('hide');
        $("body").find('#_bien_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function bien_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_bien_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_bien_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Assurance |*************** */
/**************************************** */

// New task function, various actions performed
function new_assurance(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addAssurance';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#assurance-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_assurance_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_assurance_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_assurance_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addAssurance?patrimoine_id=' + patrimoine_id;
    new_assurance(url);
}

// Go to edit view
function edit_assurance(assurance_id) {
    requestGet('wealth_management/addAssurance/' + assurance_id).done(function (response) { 
        $('#_task').html(response);
        $('#assurance-modal').modal('hide');
        $("body").find('#_assurance_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function assurance_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_assurance_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_assurance_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Availability |*************** */
/**************************************** */

// New task function, various actions performed
function new_availability(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addAvailability';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#availability-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_availability_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_availability_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_availability_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addAvailability?patrimoine_id=' + patrimoine_id;
    new_availability(url);
}

// Go to edit view
function edit_availability(availability_id) {
    requestGet('wealth_management/addAvailability/' + availability_id).done(function (response) { 
        $('#_task').html(response);
        $('#availability-modal').modal('hide');
        $("body").find('#_availability_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function availability_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_availability_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_availability_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Epargne |*************** */
/**************************************** */

// New task function, various actions performed
function new_epargne(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addEpargne';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#epargne-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_epargne_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_epargne_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_epargne_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addEpargne?patrimoine_id=' + patrimoine_id;
    new_epargne(url);
}

// Go to edit view
function edit_epargne(epargne_id) {
    requestGet('wealth_management/addEpargne/' + epargne_id).done(function (response) { 
        $('#_task').html(response);
        $('#epargne-modal').modal('hide');
        $("body").find('#_epargne_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function epargne_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_epargne_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_epargne_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Estates |*************** */
/**************************************** */

// New task function, various actions performed
function new_estates(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addEstates';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#estates-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_estates_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_estates_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_estates_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addEstates?patrimoine_id=' + patrimoine_id;
    new_estates(url);
}

// Go to edit view
function edit_estates(estates_id) {
    requestGet('wealth_management/addEstates/' + estates_id).done(function (response) { 
        $('#_task').html(response);
        $('#estates-modal').modal('hide');
        $("body").find('#_estates_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function estates_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_estates_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_estates_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}

/******************************************* */
/***************| Passif |*************** */
/**************************************** */

// New task function, various actions performed
function new_passif(url, timer_id) {
    url = typeof (url) != 'undefined' ? url : admin_url + 'wealth_management/addPassif';

    var $leadModal = $('#lead-modal');

    if ($leadModal.is(':visible')) {
        url += '&opened_from_lead_id=' + $leadModal.find('input[name="leadid"]').val();
        if (url.indexOf('?') === -1) {
            url = url.replace('&', '?');
        }
        $leadModal.modal('hide');
    }

    var $taskSingleModal = $('#passif-modal');
    if ($taskSingleModal.is(':visible')) {
        $taskSingleModal.modal('hide');
    }

    var $taskEditModal = $('#_passif_modal');
    if ($taskEditModal.is(':visible')) {
        $taskEditModal.modal('hide');
    }

    requestGet(url).done(function (response) {
        $('#_task').html(response);
        $("body").find('#_passif_modal').modal({
            show: true,
            backdrop: 'static'
        });
    }).fail(function (error) {
        alert_float('danger', error.responseText);
    })
}

function new_passif_from_relation(patrimoine_id) { 
    var url = admin_url + 'wealth_management/addPassif?patrimoine_id=' + patrimoine_id;
    new_passif(url);
}

// Go to edit view
function edit_passif(passif_id) {
    requestGet('wealth_management/addPassif/' + passif_id).done(function (response) { 
        $('#_task').html(response);
        $('#passif-modal').modal('hide');
        $("body").find('#_passif_modal').modal({
            show: true,
            backdrop: 'static'
        });
    });
}

// Handles task add/edit form modal.
function passif_form_handler(form) { 
    // Disable the save button in cases od duplicate clicks
    $('#_passif_modal').find('button[type="submit"]').prop('disabled', true);

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
            $('#_passif_modal').modal('hide');
            $('.btn-dt-reload').click();
        }
    }).fail(function (error) {
        alert_float('danger', JSON.parse(error.responseText));
    });

    return false;
}
