<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-11 10:21:34 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/perfex_crm/application/language/french/french_lang.php 3798
ERROR - 2021-06-11 10:21:57 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/perfex_crm/application/language/french/french_lang.php 3798
ERROR - 2021-06-11 10:22:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:19 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 10:22:19 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 10:22:19 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:22:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:22:26 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:22:31 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:22:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:22:32 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:22:32 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:22:32 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:22:32 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623403352-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 10:26:47 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:26:47 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:47 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:47 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:47 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623403607-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:26:50 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:26:52 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:26:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:26:54 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:54 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:54 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:26:54 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623403614-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 10:30:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:30:30 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:30:30 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:30:30 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:30:30 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623403830-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 10:35:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:35:37 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:35:37 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:35:37 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:35:37 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623404137-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:35:38 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:35:40 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:36:03 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 09:36:05 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Patrimonial/add
ERROR - 2021-06-11 10:36:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:36:12 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:36:12 --> Severity: Notice --> Trying to get property 'available_features' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:36:12 --> Severity: Warning --> Attempt to modify property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 113
ERROR - 2021-06-11 10:36:12 --> Query error: Unknown column 'patrimonial' in 'where clause' - Invalid query: 
            SELECT SUM(CASE
                WHEN end_time is NULL THEN 1623404172-start_time
                ELSE end_time-start_time
                END) as total_logged_time
            FROM tbltaskstimers
            WHERE task_id IN (SELECT id FROM tbltasks WHERE rel_type="patrimoine" AND rel_id=patrimonial)
ERROR - 2021-06-11 09:36:57 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:37:37 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:37:44 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:37:46 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:27 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:29 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:33 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:38 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:40 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 09:41:41 --> 404 Page Not Found: ../../modules/wealth_management/controllers/Wealth_management/view
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 10:44:02 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 10:44:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:44:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 10:44:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:03:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:03:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:03:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:03:18 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:04:36 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:05:22 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:05:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:24 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 6
ERROR - 2021-06-11 11:05:24 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 6
ERROR - 2021-06-11 11:05:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 2
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 2
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 3
ERROR - 2021-06-11 11:05:51 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 3
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:05:53 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:05:55 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:05:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 2
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 2
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 3
ERROR - 2021-06-11 11:05:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 3
ERROR - 2021-06-11 11:06:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:22 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:22 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:07:22 --> Severity: Notice --> Undefined variable: staff /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 63
ERROR - 2021-06-11 11:07:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 63
ERROR - 2021-06-11 11:07:22 --> Severity: Notice --> Undefined variable: services /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 78
ERROR - 2021-06-11 11:07:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:07:22 --> Severity: Notice --> Undefined variable: predefined_replies /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 119
ERROR - 2021-06-11 11:07:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 119
ERROR - 2021-06-11 11:07:40 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:40 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 11:07:40 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 11:07:40 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:07:41 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:07:44 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 11:07:46 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 11:07:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:07:49 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:49 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 11:07:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:07:49 --> Severity: Notice --> Undefined variable: staff /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 63
ERROR - 2021-06-11 11:07:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 63
ERROR - 2021-06-11 11:07:49 --> Severity: Notice --> Undefined variable: services /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 78
ERROR - 2021-06-11 11:07:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:07:49 --> Severity: Notice --> Undefined variable: predefined_replies /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 119
ERROR - 2021-06-11 11:07:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 119
ERROR - 2021-06-11 11:12:01 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:12:01 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:01 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:12:01 --> Severity: Notice --> Undefined variable: staff /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 11:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 11:12:01 --> Severity: Notice --> Undefined variable: services /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 69
ERROR - 2021-06-11 11:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:12:01 --> Severity: Notice --> Undefined variable: predefined_replies /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 112
ERROR - 2021-06-11 11:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 112
ERROR - 2021-06-11 11:12:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:12:28 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:28 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:12:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:12:28 --> Severity: Notice --> Undefined variable: staff /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 11:12:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 11:12:28 --> Severity: Notice --> Undefined variable: services /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 69
ERROR - 2021-06-11 11:12:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:13:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:13:28 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:13:28 --> Severity: Notice --> Undefined variable: departments /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:13:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 35
ERROR - 2021-06-11 11:13:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 11:13:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:14:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:15:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:15:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:16:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:20:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:22:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:22:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:22:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:22:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:22:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:22:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:22:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:22:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:23:01 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 11:26:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:28:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:32:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:33:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:35:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:35:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:35:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:35:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:37:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:38:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:38:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:39:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:39:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:39:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:40:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 11:40:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:03:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:03:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:04:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:04:07 --> Could not find the language line "patrimonial_conjoint"
ERROR - 2021-06-11 12:14:29 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:14:29 --> Could not find the language line "patrimonial_conjoint"
ERROR - 2021-06-11 12:14:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:15:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:17:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:19:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:22:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:25:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:25:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:26:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:40:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:40:10 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 12:40:10 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 12:40:10 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 12:40:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 12:40:30 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 12:40:36 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 12:40:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 12:44:11 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 12:44:14 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 13:31:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:33:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:33:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:33:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 13:36:51 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 13:36:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:37:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:37:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 13:38:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:05:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:05:46 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 15:05:46 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 15:05:46 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:05:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:07:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:10:46 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:10:59 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:12:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:12:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:12:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:22 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 15:13:22 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 15:13:22 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:13:26 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:13:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:35 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 15:13:35 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 15:13:35 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:13:38 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:13:42 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:13:44 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:13:48 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:14:57 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:14:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:02 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:11 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:15 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:21 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:22 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:24 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 15:15:27 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 15:15:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:15:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:22:01 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:22:39 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:23:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:24:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:24:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:26:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:27:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:28:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:28:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:28:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:29:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:30:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:30:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 58
ERROR - 2021-06-11 15:30:42 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /var/www/html/perfex_crm/application/helpers/fields_helper.php 68
ERROR - 2021-06-11 15:30:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 70
ERROR - 2021-06-11 15:31:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:31:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:31:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:33:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 15:33:07 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /var/www/html/perfex_crm/application/helpers/fields_helper.php 236
ERROR - 2021-06-11 15:33:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 238
ERROR - 2021-06-11 15:33:07 --> Severity: Warning --> trim() expects parameter 1 to be string, array given /var/www/html/perfex_crm/application/helpers/template_helper.php 98
ERROR - 2021-06-11 15:33:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:15:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:17:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:17:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:20:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:20:29 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:21:05 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:21:05 --> Severity: Warning --> A non-numeric value encountered /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1251
ERROR - 2021-06-11 16:21:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:21:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:24:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:24:56 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:24:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:26:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:26:34 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:26:34 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:27:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:27:03 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:27:03 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:27:03 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:27:03 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 16:30:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:30:04 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:30:04 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:31:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:31:38 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 16:31:38 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 16:31:38 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:31:39 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 16:31:41 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 16:31:44 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 16:31:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:31:46 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:31:46 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 5
ERROR - 2021-06-11 16:32:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:37:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:37:19 --> Severity: error --> Exception: Too few arguments to function Wealth_management::add(), 0 passed in /var/www/html/perfex_crm/system/core/CodeIgniter.php on line 532 and exactly 1 expected /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1249
ERROR - 2021-06-11 16:39:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:39:07 --> Severity: error --> Exception: Too few arguments to function Wealth_management::add(), 0 passed in /var/www/html/perfex_crm/system/core/CodeIgniter.php on line 532 and exactly 1 expected /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1249
ERROR - 2021-06-11 16:40:05 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:40:05 --> Severity: error --> Exception: Too few arguments to function Wealth_management::add(), 0 passed in /var/www/html/perfex_crm/system/core/CodeIgniter.php on line 532 and exactly 1 expected /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1249
ERROR - 2021-06-11 16:40:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:40:15 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:40:15 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:40:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:40:34 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:40:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:40:49 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:41:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:48:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:49:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:49:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:49:20 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1254
ERROR - 2021-06-11 16:53:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:53:00 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:53:00 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:53:02 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:53:02 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:53:02 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:53:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:53:34 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:53:34 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 16:54:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:54:12 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 16:54:12 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 16:54:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:54:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 16:54:17 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 16:59:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:59:20 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 16:59:20 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 16:59:20 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:59:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 16:59:23 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 16:59:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 16:59:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 16:59:26 --> Severity: error --> Exception: Too few arguments to function Wealth_management::add(), 0 passed in /var/www/html/perfex_crm/system/core/CodeIgniter.php on line 532 and exactly 1 expected /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1249
ERROR - 2021-06-11 17:00:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:00:23 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:00:23 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:00:23 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:00:23 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:01:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:01:23 --> Severity: Warning --> print_r() expects at most 2 parameters, 3 given /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1260
ERROR - 2021-06-11 17:01:23 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:01:23 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:01:23 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:01:23 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:01:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:01:44 --> Severity: Warning --> print_r() expects at most 2 parameters, 3 given /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1260
ERROR - 2021-06-11 17:02:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:02:04 --> Severity: Warning --> A non-numeric value encountered /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1260
ERROR - 2021-06-11 17:02:04 --> Severity: Warning --> A non-numeric value encountered /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1260
ERROR - 2021-06-11 17:02:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:02:25 --> Severity: Warning --> A non-numeric value encountered /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1260
ERROR - 2021-06-11 17:02:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:03:47 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:03:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:03:56 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:03:56 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:03:56 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:03:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:04:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:04:37 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 17:04:37 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:04:37 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:05:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:05:19 --> Severity: Notice --> Undefined variable: patrimoine /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:05:19 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 19
ERROR - 2021-06-11 17:05:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:05:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 17:26:06 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 17:26:08 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 17:26:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:14 --> Severity: Notice --> Undefined property: Wealth_management::$Patrimoines_info_model /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1254
ERROR - 2021-06-11 17:26:14 --> Severity: error --> Exception: Call to a member function add() on null /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1254
ERROR - 2021-06-11 17:26:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:26:51 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:28:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:28:33 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:28:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:28:35 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:28:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:28:37 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:30:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:30:46 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:34:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:34:09 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:35:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:39:05 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:39:07 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:39:09 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_info_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-11 17:40:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:40:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:40:09 --> Severity: Notice --> Undefined property: Wealth_management::$Patrimoines_info_model /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1255
ERROR - 2021-06-11 17:40:09 --> Severity: error --> Exception: Call to a member function add() on null /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1255
ERROR - 2021-06-11 17:41:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:41:09 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1262
ERROR - 2021-06-11 17:41:09 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1271
ERROR - 2021-06-11 17:41:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:41:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:41:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:41:20 --> Severity: Notice --> Undefined property: Wealth_management::$Patrimoines_info_model /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1255
ERROR - 2021-06-11 17:41:20 --> Severity: error --> Exception: Call to a member function add() on null /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1255
ERROR - 2021-06-11 17:43:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:43:10 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1262
ERROR - 2021-06-11 17:43:10 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1271
ERROR - 2021-06-11 17:43:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:43:12 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1262
ERROR - 2021-06-11 17:43:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1271
ERROR - 2021-06-11 17:43:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:43:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:43:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 17:43:17 --> Severity: Notice --> Undefined property: Wealth_management::$piping /var/www/html/perfex_crm/system/core/Model.php 73
ERROR - 2021-06-11 17:43:17 --> Query error: Unknown column 'patrimoine_id' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoine_id`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `message`, `date`) VALUES ('2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-11 17:43:17')
ERROR - 2021-06-11 18:56:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:56:41 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:56:41 --> Severity: Notice --> Undefined property: Wealth_management::$piping /var/www/html/perfex_crm/system/core/Model.php 73
ERROR - 2021-06-11 18:56:41 --> Query error: Unknown column 'date' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `date`, `created_date`, `updated_date`) VALUES ('2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-11 18:56:41', '2021-06-11 18:56:41', '2021-06-11 18:56:41')
ERROR - 2021-06-11 18:57:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:57:31 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1261
ERROR - 2021-06-11 18:57:31 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1270
ERROR - 2021-06-11 18:57:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:57:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:57:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:57:42 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1261
ERROR - 2021-06-11 18:57:42 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1270
ERROR - 2021-06-11 18:57:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:57:56 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1261
ERROR - 2021-06-11 18:57:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1270
ERROR - 2021-06-11 18:59:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 18:59:46 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1261
ERROR - 2021-06-11 18:59:46 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1270
ERROR - 2021-06-11 19:00:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:00:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:00:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:00:24 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1262
ERROR - 2021-06-11 19:00:24 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1271
ERROR - 2021-06-11 19:01:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:01:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:01:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:01:54 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1263
ERROR - 2021-06-11 19:01:54 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1272
ERROR - 2021-06-11 19:03:41 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:03:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:03:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:03:48 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1263
ERROR - 2021-06-11 19:03:48 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1272
ERROR - 2021-06-11 19:04:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:04:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:04:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:04:54 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1263
ERROR - 2021-06-11 19:04:54 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1272
ERROR - 2021-06-11 19:16:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:16:40 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:16:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:16:44 --> Query error: Unknown column 'created_date' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`) VALUES ('2', 'abdali', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-11 19:16:44', '2021-06-11 19:16:44')
ERROR - 2021-06-11 19:19:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:19:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:19:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:19:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:19:19 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 19:19:19 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 19:19:19 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:19:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:20 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 19:21:20 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 19:21:20 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:21:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:21:23 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:21:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:21:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:21:32 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:22:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:28:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:28:32 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 19:28:32 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 19:28:32 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:28:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:28:35 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:29:51 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:29:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:30:04 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:30:13 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: chosen_ticket_status /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 17
ERROR - 2021-06-11 19:31:00 --> Severity: Notice --> Undefined variable: default_tickets_list_statuses /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given /var/www/html/perfex_crm/application/views/admin/tickets/summary.php 22
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:31:00 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:31:07 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:31:13 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:34 --> 404 Page Not Found: 
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:31:36 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:31:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:33:48 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:33:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:34:51 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:35:31 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:46:48 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:47:46 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimoine_about.php 6
ERROR - 2021-06-11 19:47:46 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 3
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:47:46 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:48:21 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimoine_about.php 7
ERROR - 2021-06-11 19:48:21 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 3
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:48:21 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:48:34 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimoine_about.php 3
ERROR - 2021-06-11 19:48:34 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimoine_about.php 7
ERROR - 2021-06-11 19:48:34 --> Severity: Notice --> Undefined variable: data /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 3
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:48:34 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:49:56 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:50:12 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:50:45 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 19:50:51 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 19:50:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:51:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 19:51:08 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 19:51:08 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`) VALUES ('3', 'wow', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', Array, '', '', '', '', '2021-06-11 19:51:08', '2021-06-11 19:51:08')
ERROR - 2021-06-11 20:20:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:20:06 --> Severity: Notice --> Undefined variable: info /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 20:21:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:24:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:24:20 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 20:24:41 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:29:45 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:30:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:30:14 --> Could not find the language line "0"
ERROR - 2021-06-11 20:32:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:34:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:34:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:34:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:36:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:38:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:39:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:42:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:42:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:47:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 20:50:54 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 20:51:30 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 20:51:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:51:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:51:43 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:51:43 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`) VALUES ('3', 'abdali', 'dahir', '2021-06-01 00:00:00', 'something', '2021-06-23 00:00:00', '123151382', 'Well organized and easy to understand Web building .', '06231548798', '0625498461', '0516684394', 'example@example.com', 'example2@example.com', 'abdali2', 'dahir2', '2021-06-02 00:00:00', 'something2', '2021-06-23 00:00:00', '615813816', '2021-06-05 00:00:00', 'aehkzcez', Array, '0000-00-00 00:00:00', '1235', 'fzaekfzenu', 'xeadraf', '2021-06-11 20:51:43', '2021-06-11 20:51:43')
ERROR - 2021-06-11 20:53:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:53:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:53:34 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:53:34 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`) VALUES ('3', 'abdali', 'dahir', '2021-06-01 00:00:00', 'something', '2021-06-23 00:00:00', '123151382', 'Well organized and easy to understand Web building .', '06231548798', '0625498461', '0516684394', 'example@example.com', 'example2@example.com', 'abdali2', 'dahir2', '2021-06-02 00:00:00', 'something2', '2021-06-23 00:00:00', '615813816', '2021-06-05 00:00:00', 'aehkzcez', Array, '0000-00-00 00:00:00', '1235', 'fzaekfzenu', 'xeadraf', '2021-06-11 20:53:34', '2021-06-11 20:53:34')
ERROR - 2021-06-11 20:55:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:55:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:00 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:00 --> Severity: Notice --> Undefined offset: 0 /var/www/html/perfex_crm/modules/wealth_management/models/Patrimoines_info_model.php 29
ERROR - 2021-06-11 20:56:00 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:56:00 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', '2021-06-01 00:00:00', 'something', '2021-06-23 00:00:00', '123151382', 'Well organized and easy to understand Web building .', '06231548798', '0625498461', '0516684394', 'example@example.com', 'example2@example.com', 'abdali2', 'dahir2', '2021-06-02 00:00:00', 'something2', '2021-06-23 00:00:00', '615813816', '2021-06-05 00:00:00', 'aehkzcez', Array, '0000-00-00 00:00:00', '1235', 'fzaekfzenu', 'xeadraf', '2021-06-11 20:56:00', '2021-06-11 20:56:00', NULL)
ERROR - 2021-06-11 20:56:38 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Undefined index: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1266
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/perfex_crm/modules/wealth_management/controllers/Wealth_management.php 1277
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 8
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 20:56:38 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 20:56:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:56:49 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:56:49 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:56:49 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', '2021-06-01 00:00:00', 'something', '2021-06-23 00:00:00', '123151382', 'Well organized and easy to understand Web building .', '06231548798', '0625498461', '0516684394', 'example@example.com', 'example2@example.com', 'abdali2', 'dahir2', '2021-06-02 00:00:00', 'something2', '2021-06-23 00:00:00', '615813816', '2021-06-05 00:00:00', 'aehkzcez', Array, '0000-00-00 00:00:00', '1235', 'fzaekfzenu', 'xeadraf', '2021-06-11 20:56:49', '2021-06-11 20:56:49', Array)
ERROR - 2021-06-11 20:57:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:57:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:57:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 20:57:12 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 20:57:12 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_address`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', '2021-06-01 00:00:00', 'something', '2021-06-23 00:00:00', '123151382', 'Well organized and easy to understand Web building .', '06231548798', '0625498461', '0516684394', 'example@example.com', 'example2@example.com', 'abdali2', 'dahir2', '2021-06-02 00:00:00', 'something2', '2021-06-23 00:00:00', '615813816', '2021-06-05 00:00:00', 'aehkzcez', Array, '0000-00-00 00:00:00', '1235', 'fzaekfzenu', 'xeadraf', '2021-06-11 20:57:12', '2021-06-11 20:57:12', '0')
ERROR - 2021-06-11 21:01:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:01:47 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:02:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:09:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:02 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:02 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:46 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:10:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:11:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:11:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:11 --> Severity: Notice --> Undefined variable: stripe_tax_rates /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 146
ERROR - 2021-06-11 21:12:11 --> Severity: Notice --> Trying to get property 'data' of non-object /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 146
ERROR - 2021-06-11 21:12:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 146
ERROR - 2021-06-11 21:12:11 --> Severity: Notice --> Undefined variable: stripe_tax_rates /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 176
ERROR - 2021-06-11 21:12:11 --> Severity: Notice --> Trying to get property 'data' of non-object /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 176
ERROR - 2021-06-11 21:12:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/views/admin/subscriptions/form.php 176
ERROR - 2021-06-11 21:12:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:22 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:12:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:01 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:04 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 21:13:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:17:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:17:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:18:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:18:08 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 22:18:08 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 22:18:08 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:18:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:18:11 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:18:13 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:18:14 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:18:15 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:20 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 22:19:20 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 22:19:20 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:19:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:19:23 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:19:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:19:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:19:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:07 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:30 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:43 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:45 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:45 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:48 --> Severity: Notice --> Undefined variable: categories /var/www/html/perfex_crm/application/views/admin/expenses/_bulk_actions_modal.php 21
ERROR - 2021-06-11 22:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 22:20:48 --> Severity: Notice --> Undefined variable: payment_modes /var/www/html/perfex_crm/application/views/admin/expenses/_bulk_actions_modal.php 23
ERROR - 2021-06-11 22:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/perfex_crm/application/helpers/fields_helper.php 332
ERROR - 2021-06-11 22:20:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:20:56 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:05 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:06 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:09 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:11 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:17 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:26 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:26 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 22:21:26 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 22:21:26 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:21:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:21:29 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:21:32 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:21:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:21:59 --> Could not find the language line "home_my_patrimoines"
ERROR - 2021-06-11 22:21:59 --> Could not find the language line "patrimoines_summary"
ERROR - 2021-06-11 22:21:59 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:21:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:23:16 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:18 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:23:18 --> Severity: error --> Exception: syntax error, unexpected '<', expecting end of file /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 3
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'type' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 431
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 459
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Severity: Notice --> Trying to get property 'label' of non-object /var/www/html/perfex_crm/application/helpers/fields_helper.php 460
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:23:33 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:24:12 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:24:33 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:25:28 --> Severity: Notice --> Undefined variable: patrimoine_id /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 6
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:25:28 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:25:44 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:35:33 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimonial_vous_firstname"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:36:12 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:36:23 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:36:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:36:59 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:37:19 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:37:45 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:37:57 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:38:16 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:39:03 --> Severity: Notice --> Undefined property: stdClass::$patr_me_date_birth /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 19
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:39:03 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:39:33 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:40:24 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:46:47 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:49:50 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:50:37 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:12 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:29 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:34 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:36 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:58:59 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 22:59:54 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:00:35 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:02:57 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:04:12 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:15:54 --> Severity: Notice --> Undefined property: stdClass::$patr_partner_date_mariage /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 88
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:15:54 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:16:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:16:58 --> Severity: Notice --> Undefined property: stdClass::$patr_partner_date_mariage /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:17:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:17:24 --> Severity: Notice --> Undefined property: stdClass::$patr_partner_date_mariage /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:21:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:21:53 --> Query error: Table 'perfex_284.tblpatrimoines_info' doesn't exist - Invalid query: SELECT *
FROM `tblpatrimoines_info`
WHERE `patrimoineid` = '3'
ERROR - 2021-06-11 23:22:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 23:22:21 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 23:29:31 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 23:29:31 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 23:29:33 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 23:29:33 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 23:29:44 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 20
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 23:29:44 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 23:30:27 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 21
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 22
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 24
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 25
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 26
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 27
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 29
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 30
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 31
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 32
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 33
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 39
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 40
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 41
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 43
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 44
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 45
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 46
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 47
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 48
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 51
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 52
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 53
ERROR - 2021-06-11 23:30:27 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/add.php 54
ERROR - 2021-06-11 23:32:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:33:24 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:39:55 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:39:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:41:18 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:41:18 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 23:41:18 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', '2021-06-11', 'something', '2021-06-11', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '2021-06-11', 'something2', '2021-06-10', 'kùlaev2rv834are6verv', '2021-06-09', 'aehkzcez', Array, '2021-06-03', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:41:18', '2021-06-11 23:41:18', '1')
ERROR - 2021-06-11 23:42:34 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:21 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:21 --> Severity: Notice --> Trying to get property 'settings' of non-object /var/www/html/perfex_crm/modules/wealth_management/models/Patrimoines_info_model.php 21
ERROR - 2021-06-11 23:43:21 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 23:43:21 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '', 'aehkzcez', Array, '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:43:21', '2021-06-11 23:43:21', '1')
ERROR - 2021-06-11 23:43:37 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:39 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:39 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 23:43:39 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '', 'aehkzcez', Array, '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:43:39', '2021-06-11 23:43:39', '1')
ERROR - 2021-06-11 23:43:54 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:43:58 --> Severity: Notice --> Array to string conversion /var/www/html/perfex_crm/system/database/DB_driver.php 1471
ERROR - 2021-06-11 23:43:58 --> Query error: Unknown column 'settings' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `settings`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '', 'aehkzcez', Array, '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:43:58', '2021-06-11 23:43:58', '1')
ERROR - 2021-06-11 23:45:42 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:45:49 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:45:49 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/models/Patrimoines_info_model.php 21
ERROR - 2021-06-11 23:45:49 --> Query error: Unknown column 'patr_partner_marriage_date' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '', 'aehkzcez', '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:45:49', '2021-06-11 23:45:49', '1')
ERROR - 2021-06-11 23:46:48 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:46:51 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:46:51 --> Query error: Unknown column 'patr_partner_marriage_date' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '', 'aehkzcez', '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:46:51', '2021-06-11 23:46:51', '1')
ERROR - 2021-06-11 23:48:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:48:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:48:23 --> Query error: Unknown column 'patr_partner_marriage_date' in 'field list' - Invalid query: INSERT INTO `tblpatrimoines_info` (`patrimoineid`, `patr_me_firstname`, `patr_me_lastname`, `patr_me_birthday`, `patr_me_profession`, `patr_me_depart`, `patr_me_nss`, `patr_me_address`, `patr_me_tele_perso`, `patr_me_tele_m`, `patr_me_tele_mme`, `patr_me_email_one`, `patr_me_email_two`, `patr_partner_firstname`, `patr_partner_lastname`, `patr_partner_birthday`, `patr_partner_profession`, `patr_partner_depart`, `patr_partner_nss`, `patr_partner_precedent_marriage_date`, `patr_partner_regime`, `patr_partner_marriage_date`, `patr_partner_marriage_duration`, `patr_partner_situtation`, `patr_partner_finance`, `created_date`, `updated_date`, `patr_partner_donation`) VALUES ('3', 'abdali', 'dahir', NULL, 'something', '', 'kezlczeac13ez8c1ez3', 'czaecaez ezc4ezc5a e56 d3 6e 85ae3 55fe6 ae56', '06231548798', '0625498461', '0516684394', 'example@example.com', '', 'abdali2', 'dahir2', '', 'something2', '', 'kùlaev2rv834are6verv', '2021-06-10', 'aehkzcez', '', '123', 'fzaekfzenu', 'xeadraf', '2021-06-11 23:48:23', '2021-06-11 23:48:23', '1')
ERROR - 2021-06-11 23:50:58 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:51:28 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:52:23 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:52:52 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:56:03 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:56:10 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 8
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 12
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 16
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 20
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 24
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 28
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_address' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 32
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_tele_perso' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 36
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_tele_m' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 40
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_tele_mme' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 44
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_email_one' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 48
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_me_email_two' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 52
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_firstname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 61
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_lastname' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 65
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_birthday' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 69
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_profession' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 73
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_depart' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 77
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_nss' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 81
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_precedent_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 85
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_regime' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 89
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_donation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 93
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_date' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 99
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_marriage_duration' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 103
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_situtation' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 107
ERROR - 2021-06-11 23:56:50 --> Severity: Notice --> Trying to get property 'patr_partner_finance' of non-object /var/www/html/perfex_crm/modules/wealth_management/views/patrimonial/show/information.php 111
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:56:50 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:57:53 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_progress_text"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "no_description_patrimoine"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_logged_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_billable_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_billed_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_unbilled_hours"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_expenses"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_expenses_billable"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_expenses_billed"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_overview_expenses_unbilled"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:58:08 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:58:14 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:58:20 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_tickets"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "pin_patrimoine"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_mark_as"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "export_patrimoine_data"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "copy_patrimoine_tasks_status"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "notify_patrimoine_members_status_change"
ERROR - 2021-06-11 23:58:25 --> Could not find the language line "patrimoine_mark_tasks_finished_confirm"
