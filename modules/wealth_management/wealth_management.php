<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Wealth Management Perfex CRM Module
Description: Wealth Management module description.
Version: 2.8.4
Requires at least: 2.8.4
*/

if (!defined('MODULE_WEALTH_MANAGEMENT')) {
    define('MODULE_WEALTH_MANAGEMENT', basename(__DIR__));
}

define('WEALTH_MANAGEMENT_MODULE_NAME', 'wealth_management');

$CI = &get_instance();

hooks()->add_filter('module_wealth_management_action_links', 'module_wealth_management_action_links');
hooks()->add_action('admin_init', 'wealth_management_module_init_menu_items');
hooks()->add_action('admin_init', 'app_init_patrimoine_tabs');

/**
 * Load the module helper
 */
$CI->load->helper(WEALTH_MANAGEMENT_MODULE_NAME . '/wealth_management');


/**
 * Register activation module hook
 */
register_activation_hook(WEALTH_MANAGEMENT_MODULE_NAME, 'wealth_management_module_activation_hook');

function wealth_management_module_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
 * Register language files, must be registered if the module is using languages
 */
register_language_files(WEALTH_MANAGEMENT_MODULE_NAME, [WEALTH_MANAGEMENT_MODULE_NAME]);


function module_wealth_management_action_links($actions)
{
    $actions[] = '<a href="' . admin_url('wealth_management') . '"></a>';

    return $actions;
}

/**
 * Init FICHE_CLIENT module menu items in setup in admin_init hook
 * @return null
 */
function wealth_management_module_init_menu_items()
{
    if (is_admin()) {
        $CI = &get_instance();
        //$CI->load->model(MODULE_WEALTH_MANAGEMENT . '/patrimoines_model');
        $CI->load->model('wealth_management/patrimoines_model');
        $CI->load->model('wealth_management/patrimoines_info_model');

        $CI->app_menu->add_sidebar_menu_item('wealth-management', [
            'collapse' => true,
            'name'     => 'Wealth Management',
            'position' => 3,
        ]);

        $CI->app_menu->add_sidebar_children_item('wealth-management', [
            'slug'     => 'main-fiche-setup',
            'name'     =>  'Fiche Client',
            'href'     => admin_url('wealth_management'),
            'position' => 1,
        ]);
    }
}

/**
 * Init the default patrimoine tabs
 * @return null
 */
function app_init_patrimoine_tabs()
{
    $CI = &get_instance();

    $CI->app_tabs->add_patrimoine_tab('patrimoine_overview', [
        'name'     => _l('patrimoine_overview'),
        'icon'     => 'fa fa-th',
        'view'     => 'wealth_management/patrimoine_overview',
        'position' => 1,
    ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_about', [
    //     'name'     => _l('patrimonial_about'),
    //     'icon'     => 'fa fa-user',
    //     'view'     => 'wealth_management/patrimoine_about',
    //     'position' => 3,
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('about', [
    //     'name'     => _l('patrimonial_about'),
    //     'icon'     => 'fa fa-user',
    //     'position' => 50,
    //     'collapse' => true,
    //     'visible'  => ( has_permission('estimates', '', 'view') || 
    //                     has_permission('estimates', '', 'view_own') || 
    //                     (get_option('allow_staff_view_estimates_assigned') == 1 && staff_has_assigned_estimates())) || 
    //                     (has_permission('invoices', '', 'view') || 
    //                     has_permission('invoices', '', 'view_own') || 
    //                     (get_option('allow_staff_view_invoices_assigned') == 1 && staff_has_assigned_invoices())) || 
    //                     (has_permission('expenses', '', 'view') || has_permission('expenses', '', 'view_own')),
    // ]);

    // $CI->app_tabs->add_patrimoine_tab_children_item('about', [
    //     'slug'     => 'patrimoine_about_info',
    //     'name'     => _l('patrimonial_info'),
    //     'icon'     => 'fa fa-user',
    //     'view'     => 'wealth_management/patrimoine_about_info',
    //     'position' => 1,
    // ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_proches', [
        'name'     => _l('patrimonial_proches'),
        'slug'     => 'patrimoine_proches',
        'icon'     => 'fa fa-users',
        'view'     => 'wealth_management/patrimoine_proches',
        'position' => 2,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_votre', [
        'slug'     => 'patrimoine_votre',
        'name'     => _l('patrimonial_votre'),
        'icon'     => 'fa fa-user-plus',
        'view'     => 'wealth_management/patrimoine_votre_patrimoine',
        'position' => 3,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_passif', [
        'slug'     => 'patrimoine_passif',
        'name'     => _l('patrimonial_passif'),
        'icon'     => 'fa fa-handshake-o',
        'view'     => 'wealth_management/patrimoine_passif',
        'position' => 4,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_budget', [
        'slug'     => 'patrimoine_budget',
        'name'     => _l('patrimonial_budget'),
        'icon'     => 'fa fa-exchange',
        'view'     => 'wealth_management/patrimoine_budget',
        'position' => 5,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_fiscale', [
        'slug'     => 'patrimoine_fiscale',
        'name'     => _l('patrimonial_fiscale'),
        'icon'     => 'fa fa-bank',
        'view'     => 'wealth_management/patrimoine_fiscale',
        'position' => 6,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_administrative', [
        'slug'     => 'patrimoine_administrative',
        'name'     => _l('patrimonial_administrative'),
        'icon'     => 'fa fa-gavel',
        'view'     => 'wealth_management/patrimoine_administrative',
        'position' => 7,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimonial_taches', [
        'slug'     => 'patrimoine_taches',
        'name'     => _l('patrimonial_taches'),
        'icon'     => 'fa fa-tasks',
        'view'     => 'wealth_management/patrimoine_taches',
        'position' => 8,
    ]);

    // $CI->app_tabs->add_patrimoine_tab_children_item('about', [
    //     'name'                      => _l('tasks'),
    //     'icon'                      => 'fa fa-check-circle',
    //     'slug'     => 'patrimoine_childs',
    //     'name'     => _l('patrimonial_childs'),
    //     'view'     => 'wealth_management/patrimoine_childs',
    //     'position' => 9,
        
    //     'linked_to_customer_option' => ['view_childs'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_tasks', [
    //     'name'                      => _l('tasks'),
    //     'icon'                      => 'fa fa-check-circle',
    //     'view'                      => 'wealth_management/patrimoine_tasks',
    //     'position'                  => 10,
    //     'linked_to_customer_option' => ['view_tasks'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_timesheets', [
    //     'name'                      => _l('patrimoine_timesheets'),
    //     'icon'                      => 'fa fa-clock-o',
    //     'view'                      => 'wealth_management/patrimoine_timesheets',
    //     'position'                  => 15,
    //     'linked_to_customer_option' => ['view_timesheets'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_milestones', [
    //     'name'                      => _l('patrimoine_milestones'),
    //     'icon'                      => 'fa fa-rocket',
    //     'view'                      => 'wealth_management/patrimoine_milestones',
    //     'position'                  => 20,
    //     'linked_to_customer_option' => ['view_milestones'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_files', [
    //     'name'                      => _l('patrimoine_files'),
    //     'icon'                      => 'fa fa-files-o',
    //     'view'                      => 'wealth_management/patrimoine_files',
    //     'position'                  => 25,
    //     'linked_to_customer_option' => ['upload_files'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_discussions', [
    //     'name'                      => _l('patrimoine_discussions'),
    //     'icon'                      => 'fa fa-commenting',
    //     'view'                      => 'wealth_management/patrimoine_discussions',
    //     'position'                  => 30,
    //     'linked_to_customer_option' => ['open_discussions'],
    // ]);

    // $CI->app_tabs->add_patrimoine_tab('patrimoine_gantt', [
    //     'name'                      => _l('patrimoine_gant'),
    //     'icon'                      => 'fa fa-align-left',
    //     'view'                      => 'wealth_management/patrimoine_gantt',
    //     'position'                  => 35,
    //     'linked_to_customer_option' => ['view_gantt'],
    // ]);

    $CI->app_tabs->add_patrimoine_tab('patrimoine_tickets', [
        'name'     => _l('patrimoine_tickets'),
        'icon'     => 'fa fa-life-ring',
        'view'     => 'wealth_management/patrimoine_tickets',
        'position' => 40,
        'visible'  => (get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member(),
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimoine_contracts', [
        'name'     => _l('contracts'),
        'icon'     => 'fa fa-file',
        'view'     => 'wealth_management/patrimoine_contracts',
        'position' => 45,
        'visible'  => has_permission('contracts', '', 'view') || has_permission('contracts', '', 'view_own'),
    ]);

    $CI->app_tabs->add_patrimoine_tab('sales', [
        'name'     => _l('sales_string'),
        'icon'     => 'fa fa-balance-scale',
        'position' => 50,
        'collapse' => true,
        'visible'  => (has_permission('estimates', '', 'view') || has_permission('estimates', '', 'view_own') || (get_option('allow_staff_view_estimates_assigned') == 1 && staff_has_assigned_estimates()))
            || (has_permission('invoices', '', 'view') || has_permission('invoices', '', 'view_own') || (get_option('allow_staff_view_invoices_assigned') == 1 && staff_has_assigned_invoices()))
            || (has_permission('expenses', '', 'view') || has_permission('expenses', '', 'view_own')),
    ]);

    $CI->app_tabs->add_patrimoine_tab_children_item('sales', [
        'slug'     => 'patrimoine_invoices',
        'name'     => _l('patrimoine_invoices'),
        'view'     => 'wealth_management/patrimoine_invoices',
        'position' => 5,
        'visible'  => (has_permission('invoices', '', 'view') || has_permission('invoices', '', 'view_own') || (get_option('allow_staff_view_invoices_assigned') == 1 && staff_has_assigned_invoices())),
    ]);

    $CI->app_tabs->add_patrimoine_tab_children_item('sales', [
        'slug'     => 'patrimoine_estimates',
        'name'     => _l('estimates'),
        'view'     => 'wealth_management/patrimoine_estimates',
        'position' => 10,
        'visible'  => (has_permission('estimates', '', 'view') || has_permission('estimates', '', 'view_own') || (get_option('allow_staff_view_estimates_assigned') == 1 && staff_has_assigned_estimates())),
    ]);

    $CI->app_tabs->add_patrimoine_tab_children_item('sales', [
        'slug'     => 'patrimoine_expenses',
        'name'     => _l('patrimoine_expenses'),
        'view'     => 'wealth_management/patrimoine_expenses',
        'position' => 15,
        'visible'   => has_permission('expenses', '', 'view') || has_permission('expenses', '', 'view_own'),
    ]);

    $CI->app_tabs->add_patrimoine_tab_children_item('sales', [
        'slug'     => 'patrimoine_credit_notes',
        'name'     => _l('credit_notes'),
        'view'     => 'wealth_management/patrimoine_credit_notes',
        'position' => 20,
        'visible'  => has_permission('credit_notes', '', 'view') || has_permission('credit_notes', '', 'view_own'),
    ]);

    $CI->app_tabs->add_patrimoine_tab_children_item('sales', [
        'slug'     => 'patrimoine_subscriptions',
        'name'     => _l('subscriptions'),
        'view'     => 'wealth_management/patrimoine_subscriptions',
        'position' => 25,
        'visible'  => has_permission('subscriptions', '', 'view') || has_permission('subscriptions', '', 'view_own'),
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimoine_notes', [
        'name'     => _l('patrimoine_notes'),
        'icon'     => 'fa fa-file-o',
        'view'     => 'wealth_management/patrimoine_notes',
        'position' => 55,
    ]);

    $CI->app_tabs->add_patrimoine_tab('patrimoine_activity', [
        'name'                      => _l('patrimoine_activity'),
        'icon'                      => 'fa fa-exclamation',
        'view'                      => 'wealth_management/patrimoine_activity',
        'position'                  => 60,
        'linked_to_customer_option' => ['view_activity_log'],
    ]);

    // auto create custom js file
    if (!file_exists(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/js')) {
        mkdir(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/js', 0755, true);
        file_put_contents(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/js/' . MODULE_WEALTH_MANAGEMENT . '.js', '');
    }
    //  auto create custom css file
    if (!file_exists(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/css')) {
        mkdir(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/css', 0755, true);
        file_put_contents(APP_MODULES_PATH . MODULE_WEALTH_MANAGEMENT . '/assets/css/' . MODULE_WEALTH_MANAGEMENT . '.css', '');
    }
    //$CI->app_css->add(MODULE_WEALTH_MANAGEMENT.'-css', base_url('modules/'.MODULE_WEALTH_MANAGEMENT.'/assets/css/'.MODULE_WEALTH_MANAGEMENT.'.css'));
    //$CI->app_scripts->add(MODULE_WEALTH_MANAGEMENT.'-js', base_url('modules/'.MODULE_WEALTH_MANAGEMENT.'/assets/js/'.MODULE_WEALTH_MANAGEMENT.'.js'));


}
