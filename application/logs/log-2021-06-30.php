<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-30 16:19:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'perfex_284.tbltaskstimers.staff_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staff_id, name as name, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltaskstimers.id and rel_type="timesheet" ORDER by tag_order ASC) as tags, start_time, end_time, note as note, (CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#",tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#",tblprojects.id)," - ",tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (',tblexpenses.expense_name,')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name, SUM(end_time - start_time) as time_h, SUM(end_time - start_time) as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  task_id != 0  AND start_time BETWEEN 1625007600 AND 1625093999
    GROUP BY task_id
    ORDER BY start_time DESC
    LIMIT 0, 25
    
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "suppliers"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "new_supplier"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "import_suppliers"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "suppliers_assigned_to_me"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "suppliers_summary_total"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "active_suppliers"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "inactive_active_supplier"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "bulk_action_suppliers_groups_warning"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "suppliers"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "supplier"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "preffered_supplier"
ERROR - 2021-06-30 16:24:33 --> Could not find the language line "supplier_summary"
ERROR - 2021-06-30 16:24:33 --> Severity: Warning --> Use of undefined constant MODULE_SUPPLIER - assumed 'MODULE_SUPPLIER' (this will throw an Error in a future version of PHP) /var/www/html/perfex_crm/modules/supplier/controllers/Supplier.php 61
ERROR - 2021-06-30 16:24:33 --> Severity: Warning --> include_once(/var/www/html/perfex_crm/modules/MODULE_SUPPLIER/views/tables/suppliers.php): failed to open stream: No such file or directory /var/www/html/perfex_crm/application/libraries/App.php 212
ERROR - 2021-06-30 16:24:33 --> Severity: Warning --> include_once(): Failed opening '/var/www/html/perfex_crm/modules/MODULE_SUPPLIER/views/tables/suppliers.php' for inclusion (include_path='.:/usr/share/php') /var/www/html/perfex_crm/application/libraries/App.php 212
ERROR - 2021-06-30 16:24:33 --> Severity: Notice --> Undefined variable: output /var/www/html/perfex_crm/application/libraries/App.php 214
ERROR - 2021-06-30 16:24:51 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model /var/www/html/perfex_crm/system/core/Loader.php 348
ERROR - 2021-06-30 16:28:46 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model /var/www/html/perfex_crm/system/core/Loader.php 348
