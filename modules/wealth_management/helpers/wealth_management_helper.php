<?php

use app\services\utilities\Arr;

defined('BASEPATH') or exit('No direct script access allowed');

hooks()->add_action('app_admin_assets', '_maybe_init_admin_patrimoine_assets', 5);


function _maybe_init_admin_patrimoine_assets()
{
    $CI = &get_instance();
    if (
        strpos($_SERVER['REQUEST_URI'], get_admin_uri() . '/wealth_management/view') !== false
        || strpos($_SERVER['REQUEST_URI'], get_admin_uri() . '/wealth_management/gantt') !== false
    ) {
        $CI = &get_instance();

        $CI->app_scripts->add('jquery-comments-js', 'assets/plugins/jquery-comments/js/jquery-comments.min.js', 'admin', ['vendor-js']);
        $CI->app_scripts->add('frappe-gantt-js', 'assets/plugins/frappe/frappe-gantt-es2015.js', 'admin', ['vendor-js']);

        $CI->app_css->add('frappe-gantt-js', 'assets/plugins//frappe/frappe-gantt.css', 'admin', ['vendor-css']);
        $CI->app_css->add('jquery-comments-css', 'assets/plugins/jquery-comments/css/jquery-comments.css', 'admin', ['reset-css']);

        // WEALTH MANAGEMENT.
        $CI->app_css->add('wealth_management_css', 'modules/wealth_management/assets/css/wealth_management.css', 'admin', ['app-css']);
        $CI->app_scripts->add('wealth_management_js_first', 'modules/wealth_management/assets/js/wealth_management_first.min.js', 'admin', ['vendor-js']);
        $CI->app_scripts->add('wealth_management_js', 'modules/wealth_management/assets/js/wealth_management.min.js', 'admin', ['wealth_management_js_first']);
        
        $CI->app_scripts->add('additional-methods-js', 'assets/plugins/jquery-validation/additional-methods.min.js', 'admin', ['jquery-validation-js']);
        // $CI->app_scripts->add('test-js', 'modules/wealth_management/assets/js/test.js', 'admin', ['vendor-js']);
    }
}

/**
 * Default patrimoine tabs
 * @return array
 */

function get_patrimoine_tabs_admin()
{
    return get_instance()->app_tabs->get_patrimoine_tabs();
}

/**
 * Check if patrimoine has recurring tasks
 * @param  mixed $id patrimoine id
 * @return boolean
 */
function patrimoine_has_recurring_tasks($id)
{
    return total_rows(db_prefix() . 'tasks', 'recurring=1 AND rel_id="' . get_instance()->db->escape_str($id) . '" AND rel_type="patrimoine"') > 0;
}



/**
 * Get patrimoine status by passed patrimoine id
 * @param  mixed $id patrimoine id
 * @return array
 */
function get_patrimoine_status_by_id($id)
{
    $CI = &get_instance();
    if (!class_exists('patrimoines_model')) {
        $CI->load->model('patrimoines_model');
    }

    $statuses = $CI->patrimoines_model->get_patrimoine_statuses();

    $status = [
        'id'    => 0,
        'color' => '#333',
        'name'  => '[Status Not Found]',
        'order' => 1,
    ];

    foreach ($statuses as $s) {
        if ($s['id'] == $id) {
            $status = $s;

            break;
        }
    }

    return $status;
}

/**
 * Get patrimoine client id by passed patrimoine id
 * @param  mixed $id patrimoine id
 * @return mixed
 */
function get_client_id_by_patrimoine_id($id)
{
    $CI = &get_instance();
    $CI->db->select('clientid');
    $CI->db->where('id', $id);
    $patrimoine = $CI->db->get(db_prefix() . 'patrimoines')->row();
    if ($patrimoine) {
        return $patrimoine->clientid;
    }

    return false;
}


/**
 * Get patrimoine billing type
 * @param  mixed $patrimoine_id
 * @return mixed
 */
function get_patrimoine_billing_type($patrimoine_id)
{
    $CI = &get_instance();
    $CI->db->select('billing_type');
    $CI->db->where('id', $patrimoine_id);
    $patrimoine = $CI->db->get(db_prefix() . 'patrimoines')->row();
    if ($patrimoine) {
        return $patrimoine->billing_type;
    }

    return false;
}

/**
 * Filter only visible tabs selected from patrimoine settings
 * @param  array $tabs available tabs
 * @param  array $applied_settings current applied patrimoine visible tabs
 * @return array
 */
function filter_patrimoine_visible_tabs($tabs, $applied_settings)
{
    $newTabs = [];
    foreach ($tabs as $key => $tab) {
        $dropdown = isset($tab['collapse']) ? true : false;

        if ($dropdown) {
            $totalChildTabsHidden = 0;
            $newChild             = [];

            foreach ($tab['children'] as $d) {
                if ((isset($applied_settings[$d['slug']]) && $applied_settings[$d['slug']] == 0)) {
                    $totalChildTabsHidden++;
                } else {
                    $newChild[] = $d;
                }
            }

            if ($totalChildTabsHidden == count($tab['children'])) {
                continue;
            }

            if (count($newChild) > 0) {
                $tab['children'] = $newChild;
            }

            $newTabs[$tab['slug']] = $tab;
        } else {
            if (isset($applied_settings[$key]) && $applied_settings[$key] == 0) {
                continue;
            }

            $newTabs[$tab['slug']] = $tab;
        }
    }

    return hooks()->apply_filters('patrimoine_filtered_visible_tabs', $newTabs);
}

/**
 * Translated jquery-comment language based on app languages
 * This feature is used on both admin and customer area
 * @return array
 */
function get_patrimoine_discussions_language_array()
{
    $lang = [
        'discussion_add_comment'      => _l('discussion_add_comment'),
        'discussion_newest'           => _l('discussion_newest'),
        'discussion_oldest'           => _l('discussion_oldest'),
        'discussion_attachments'      => _l('discussion_attachments'),
        'discussion_send'             => _l('discussion_send'),
        'discussion_reply'            => _l('discussion_reply'),
        'discussion_edit'             => _l('discussion_edit'),
        'discussion_edited'           => _l('discussion_edited'),
        'discussion_you'              => _l('discussion_you'),
        'discussion_save'             => _l('discussion_save'),
        'discussion_delete'           => _l('discussion_delete'),
        'discussion_view_all_replies' => _l('discussion_view_all_replies'),
        'discussion_hide_replies'     => _l('discussion_hide_replies'),
        'discussion_no_comments'      => _l('discussion_no_comments'),
        'discussion_no_attachments'   => _l('discussion_no_attachments'),
        'discussion_attachments_drop' => _l('discussion_attachments_drop'),
    ];

    return $lang;
}

/**
 * Get patrimoine name by passed id
 * @param  mixed $id
 * @return string
 */
function get_patrimoine_name_by_id($id)
{
    $CI      = &get_instance();
    $patrimoine = $CI->app_object_cache->get('patrimoine-name-data-' . $id);

    if (!$patrimoine) {
        $CI->db->select('name');
        $CI->db->where('id', $id);
        $patrimoine = $CI->db->get(db_prefix() . 'patrimoines')->row();
        $CI->app_object_cache->add('patrimoine-name-data-' . $id, $patrimoine);
    }

    if ($patrimoine) {
        return $patrimoine->name;
    }

    return '';
}
