<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-24 00:36:03 --> Severity: Notice --> Undefined variable: statuses D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 36
ERROR - 2021-05-24 00:36:03 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 36
ERROR - 2021-05-24 00:36:03 --> Severity: Notice --> Undefined variable: statuses D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 63
ERROR - 2021-05-24 00:36:03 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 63
ERROR - 2021-05-24 00:36:06 --> Query error: Column 'name' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    ORDER BY deadline IS NULL ASC, deadline ASC
    LIMIT 0, 25
    
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "marie"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "divorce"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "veuf"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 00:36:15 --> Could not find the language line "PACS"
ERROR - 2021-05-24 00:36:43 --> Query error: Column 'email' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, firstname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE  (tblclients.active = 1 OR tblclients.active=0 AND registration_confirmed = 0)
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2021-05-24 00:37:57 --> Query error: Column 'name' in field list is ambiguous - Invalid query: SELECT name as title, id, clientid, CASE WHEN deadline IS NULL THEN start_date ELSE deadline END as date, CASE company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company
FROM `tblprojects`
JOIN `tblclients` ON `tblclients`.`userid`=`tblprojects`.`clientid`
WHERE `status` != 4
AND `status` != 5
AND CASE WHEN deadline IS NULL THEN (start_date BETWEEN '2021-04-25' AND '2021-06-06') ELSE (deadline BETWEEN '2021-04-25' AND '2021-06-06') END
ERROR - 2021-05-24 00:39:11 --> Query error: Column 'email' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS firstname, lastname, email, company, tblcontacts.phonenumber as phonenumber, title, last_login, tblcontacts.active as active ,tblcontacts.id as id,tblcontacts.userid as userid,is_primary,(SELECT count(*) FROM tblcontacts c WHERE c.userid=tblcontacts.userid) as total_contacts,tblclients.registration_confirmed as registration_confirmed
    FROM tblcontacts
    JOIN tblclients ON tblclients.userid=tblcontacts.userid
    
    
    
    ORDER BY firstname ASC
    LIMIT 0, 25
    
ERROR - 2021-05-24 00:40:06 --> Query error: Column 'email' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, firstname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE  (tblclients.active = 1 OR tblclients.active=0 AND registration_confirmed = 0)
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2021-05-24 16:37:44 --> Query error: Column 'email' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tblclients.userid as userid, company, firstname, email, tblclients.phonenumber as phonenumber, `tblclients`.`active` AS `tblclients.active`, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tblcustomer_groups JOIN tblcustomers_groups ON tblcustomer_groups.groupid = tblcustomers_groups.id WHERE customer_id = tblclients.userid ORDER by name ASC) as customerGroups, tblclients.datecreated as datecreated ,tblcontacts.id as contact_id,lastname,tblclients.zip as zip,registration_confirmed
    FROM tblclients
    LEFT JOIN tblcontacts ON tblcontacts.userid=tblclients.userid AND tblcontacts.is_primary=1
    
    WHERE  (tblclients.active = 1 OR tblclients.active=0 AND registration_confirmed = 0)
    
    ORDER BY company ASC
    LIMIT 0, 25
    
ERROR - 2021-05-24 16:53:59 --> Severity: Notice --> Undefined variable: statuses D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 36
ERROR - 2021-05-24 16:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 36
ERROR - 2021-05-24 16:53:59 --> Severity: Notice --> Undefined variable: statuses D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 63
ERROR - 2021-05-24 16:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\views\manage.php 63
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "marie"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "divorce"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "veuf"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 17:08:20 --> Could not find the language line "PACS"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "marie"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "divorce"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "veuf"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 23:04:46 --> Could not find the language line "PACS"
ERROR - 2021-05-24 23:04:53 --> Severity: Notice --> Undefined property: Wealth_management::$patrimoines_model D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\controllers\Wealth_management.php 20
ERROR - 2021-05-24 23:04:53 --> Severity: error --> Exception: Call to a member function get_patrimoine_statuses() on null D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\controllers\Wealth_management.php 20
ERROR - 2021-05-24 23:20:12 --> Severity: Warning --> Use of undefined constant MODULE_SUPPLIER - assumed 'MODULE_SUPPLIER' (this will throw an Error in a future version of PHP) D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\controllers\Wealth_management.php 21
ERROR - 2021-05-24 23:20:13 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model D:\Program Files\xampp\htdocs\perfex_crm\system\core\Loader.php 348
ERROR - 2021-05-24 23:20:43 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model D:\Program Files\xampp\htdocs\perfex_crm\system\core\Loader.php 348
ERROR - 2021-05-24 23:21:28 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model D:\Program Files\xampp\htdocs\perfex_crm\system\core\Loader.php 348
ERROR - 2021-05-24 23:23:41 --> Severity: error --> Exception: Unable to locate the model you have specified: Patrimoines_model D:\Program Files\xampp\htdocs\perfex_crm\system\core\Loader.php 348
ERROR - 2021-05-24 23:26:49 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:26:49 --> Could not find the language line "patrimoine_status_1"
ERROR - 2021-05-24 23:26:49 --> Could not find the language line "patrimoine_status_2"
ERROR - 2021-05-24 23:26:49 --> Could not find the language line "patrimoine_status_3"
ERROR - 2021-05-24 23:26:49 --> Could not find the language line "patrimoine_status_4"
ERROR - 2021-05-24 23:26:49 --> Could not find the language line "patrimoine_status_5"
ERROR - 2021-05-24 23:26:53 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:26:57 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:27:03 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:28:00 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:29:09 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:32:55 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:33:00 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:33:48 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:34:39 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:34:55 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:34:55 --> Severity: Notice --> Undefined variable: project_sepatrimoine_settingsttings D:\Program Files\xampp\htdocs\perfex_crm\modules\wealth_management\models\Patrimoines_model.php 35
ERROR - 2021-05-24 23:38:52 --> Could not find the language line "patrimoine_status_1"
ERROR - 2021-05-24 23:38:52 --> Could not find the language line "patrimoine_status_2"
ERROR - 2021-05-24 23:38:52 --> Could not find the language line "patrimoine_status_3"
ERROR - 2021-05-24 23:38:52 --> Could not find the language line "patrimoine_status_4"
ERROR - 2021-05-24 23:38:52 --> Could not find the language line "patrimoine_status_5"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "marie"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "divorce"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "veuf"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 23:39:18 --> Could not find the language line "PACS"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "marie"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "divorce"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "veuf"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 23:41:24 --> Could not find the language line "PACS"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "marie"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "divorce"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "veuf"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 23:45:28 --> Could not find the language line "PACS"
ERROR - 2021-05-24 23:45:32 --> Could not find the language line "patrimoine_status_1"
ERROR - 2021-05-24 23:45:32 --> Could not find the language line "patrimoine_status_2"
ERROR - 2021-05-24 23:45:32 --> Could not find the language line "patrimoine_status_3"
ERROR - 2021-05-24 23:45:32 --> Could not find the language line "patrimoine_status_4"
ERROR - 2021-05-24 23:45:32 --> Could not find the language line "patrimoine_status_5"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "situation_familiale"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "marie"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "celibataire"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "divorce"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "veuf"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "union_libre"
ERROR - 2021-05-24 23:45:34 --> Could not find the language line "PACS"
