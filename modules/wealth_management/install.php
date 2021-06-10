<?php

defined('BASEPATH') or exit('No direct script access allowed');
$clients = db_prefix() . 'clients';
if (!$CI->db->field_exists('pr_name', $clients)) {
  $CI->db->query("ALTER TABLE `" . $clients . "` ADD `pr_name` varchar(191)  AFTER `company`;");
}
$clients = db_prefix() . 'clients';
if (!$CI->db->field_exists('pr_surname', $clients)) {
  $CI->db->query("ALTER TABLE `" . $clients . "` ADD `pr_surname` varchar(191)  AFTER `pr_name`;");
}
$clients = db_prefix() . 'clients';
if (!$CI->db->field_exists('pr_birth_date', $clients)) {
  $CI->db->query("ALTER TABLE `" . $clients . "` ADD `pr_birth_date` varchar(191)  AFTER `pr_surname`;");
}

$clients = db_prefix() . 'clients';
if (!$CI->db->field_exists('pr_mobile', $clients)) {
  $CI->db->query("ALTER TABLE `" . $clients . "` ADD `pr_mobile` varchar(191) AFTER `pr_birth_date`;");
}

$clients = db_prefix() . 'clients';
if (!$CI->db->field_exists('pr_email', $clients)) {
  $CI->db->query("ALTER TABLE `" . $clients . "` ADD `pr_email` varchar(191) AFTER `pr_mobile`;");
}

$vault = db_prefix() . 'vault';
if (!$CI->db->field_exists('share_in_patrimoines', $vault)) {
  $CI->db->query("ALTER TABLE `" . $vault . "` ADD `share_in_patrimoines` tinyint(1) NOT NULL AFTER `share_in_projects`;");
}

$expenses = db_prefix() . 'expenses';
if (!$CI->db->field_exists('patrimoine_id', $expenses)) {
  $CI->db->query("ALTER TABLE `" . $expenses . "` ADD `patrimoine_id` int(11) NOT NULL AFTER `project_id`;");
}

$milestones = db_prefix() . 'milestones';
if (!$CI->db->field_exists('patrimoine_id', $milestones)) {
  $CI->db->query("ALTER TABLE `" . $milestones . "` ADD `patrimoine_id` int(11) NOT NULL AFTER `project_id`;");
}

if (!$CI->db->table_exists(db_prefix() . 'patrimoines')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoines` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `resident` int(11) NOT NULL,
  `resident_from` date NOT NULL,
  `fiscally_from` date NOT NULL,
  `interview_date` date NOT NULL,
  `family_status_id` int(11) NOT NULL,
  `job` varchar(191) NOT NULL,
  `retirement_date` date,
  `social_security_number` varchar(191),
  `spouse_name` varchar(191) NOT NULL,
  `spouse_surname` varchar(191) NOT NULL,
  `spouse_birth_date` date NOT NULL,
  `spouse_social_security_number` varchar(191),
  `wedding_date` date,
  `matrimonial_regime` varchar(191),
  `donation_btw_spouses` int(11),
  `spouse_mobile` varchar(191),
  `spouse_email` varchar(191),
  `description` text,
  `status` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `billing_type` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `deadline` date DEFAULT NULL,
  `patrimoine_created` date NOT NULL,
  `date_finished` datetime DEFAULT NULL,
  `progress` int(11),
  `progress_from_tasks` int(11) NOT NULL,
  `patrimoine_cost` decimal(15,2) DEFAULT NULL,
  `patrimoine_rate_per_hour` decimal(15,2) DEFAULT NULL,
  `estimated_hours` decimal(15,2) DEFAULT NULL,
  `addedfrom` int(11) NOT NULL,
  `contact_notification` int(11),
  `notify_contacts` text
) ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoines`
  ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
}

if (!$CI->db->table_exists(db_prefix() . 'patrimoine_settings')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoine_settings` (
    `id` int(11) NOT NULL,
    `patrimoine_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `value` text
  )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_settings`
      ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_settings`
      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');


  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_settings`
ADD  KEY `patrimoine_id` (`patrimoine_id`);');
}


if (!$CI->db->table_exists(db_prefix() . 'patrimoine_members')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoine_members` (
    `id` int(11) NOT NULL,
    `patrimoine_id` int(11) NOT NULL,
    `staff_id` int(11) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_members`
  ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_members`
ADD  KEY `patrimoine_id` (`patrimoine_id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_members`
ADD  KEY `staff_id` (`staff_id`);');
}



if (!$CI->db->table_exists(db_prefix() . 'patrimoine_activity')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoine_activity` (
    `id` int(11) NOT NULL,
    `patrimoine_id` int(11) NOT NULL,
    `staff_id` int(11) NOT NULL ,
    `contact_id` int(11) NOT NULL  ,
    `fullname` varchar(100) DEFAULT NULL,
    `visible_to_customer` int(11) NOT NULL ,
    `description_key` varchar(191) NOT NULL ,
    `additional_data` text,
    `dateadded` datetime NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_activity`
  ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
}

if (!$CI->db->table_exists(db_prefix() . 'pinned_patrimoines')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'pinned_patrimoines` (
  `id` int(11) NOT NULL,
  `patrimoine_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'pinned_patrimoines`
ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'pinned_patrimoines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'pinned_patrimoines`
ADD  KEY `patrimoine_id` (`patrimoine_id`);');
}


if (!$CI->db->table_exists(db_prefix() . 'patrimoine_files')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoine_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `filetype` varchar(50) DEFAULT NULL,
  `dateadded` datetime NOT NULL,
  `last_activity` datetime DEFAULT NULL,
  `patrimoine_id` int(11) NOT NULL,
  `visible_to_customer` tinyint(1),
  `staffid` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL ,
  `external` varchar(40) DEFAULT NULL,
  `external_link` text DEFAULT NULL,
  `thumbnail_link` text DEFAULT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');


  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_files`
ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_files`
ADD  KEY `patrimoine_id` (`patrimoine_id`);');
}


if (!$CI->db->table_exists(db_prefix() . 'patrimoinediscussioncomments')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoinediscussioncomments` (
  `id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `discussion_type` varchar(10) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `content` text NOT NULL,
  `staff_id` int(11) NOT NULL,
  `contact_id` int(11),
  `fullname` varchar(191) DEFAULT NULL,
  `file_name` varchar(191) DEFAULT NULL,
  `file_mime_type` varchar(70) DEFAULT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoinediscussioncomments`
ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoinediscussioncomments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
}


if (!$CI->db->table_exists(db_prefix() . 'patrimoinediscussions')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoinediscussions` (
  `id` int(11) NOT NULL,
  `patrimoine_id` int(11) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `show_to_customer` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL,
  `last_activity` datetime DEFAULT NULL,
  `staff_id` int(11) NOT NULL DEFAULT 0,
  `contact_id` int(11) NOT NULL DEFAULT 0
  )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');
  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoinediscussions`
  ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoinediscussions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT , AUTO_INCREMENT=2 ;');
}

if (!$CI->db->table_exists(db_prefix() . 'patrimoine_notes')) {
  $CI->db->query('CREATE TABLE `' . db_prefix() . 'patrimoine_notes` (
    `id` int(11) NOT NULL,
    `patrimoine_id` int(11) NOT NULL,
    `content` text NOT NULL,
    `staff_id` int(11) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');
  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_notes`
  ADD PRIMARY KEY (`id`);');

  $CI->db->query('ALTER TABLE `' . db_prefix() . 'patrimoine_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT , AUTO_INCREMENT=2 ;');
}
