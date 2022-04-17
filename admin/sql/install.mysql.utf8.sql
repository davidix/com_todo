CREATE TABLE IF NOT EXISTS `#__todo_category` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`asset_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
	`name` VARCHAR(200) NOT NULL COMMENT 'Category Name',
	`description` VARCHAR(500) NOT NULL,
	`icon` VARCHAR(20) NOT NULL COMMENT 'category icon',
	`color` VARCHAR(20) NOT NULL,
	`ordering` int(11) NOT NULL DEFAULT '0',
	`published` tinyint(3) NOT NULL DEFAULT '0',
	`checked_out` int(11) unsigned NOT NULL DEFAULT '0',
	`checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int(11) unsigned NOT NULL DEFAULT '0',
	`created_by_alias` varchar(255) NOT NULL DEFAULT '',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int(11) unsigned NOT NULL DEFAULT '0',
	`publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`images` text NOT NULL,
	`version` int(11) unsigned NOT NULL DEFAULT '1',
	`hits` int(11) NOT NULL DEFAULT '0',
	`access` int(11) unsigned NOT NULL DEFAULT '0',
	`params` text NOT NULL,
	`metadata` text NOT NULL,
	`metakey` text NOT NULL,
	`metadesc` text NOT NULL,
	PRIMARY KEY (id)
)
CHARACTER SET utf8
COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS `#__todo_task` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`asset_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
	`category` int(10) unsigned NOT NULL DEFAULT '0',
	`name` VARCHAR(200) NOT NULL COMMENT 'name',
	`description` VARCHAR(500) NOT NULL COMMENT 'Description
',
	`date_done` VARCHAR(20) NOT NULL COMMENT 'Date Done',
	`status` VARCHAR(10) NOT NULL COMMENT 'status',
	`ordering` int(11) NOT NULL DEFAULT '0',
	`published` tinyint(3) NOT NULL DEFAULT '0',
	`checked_out` int(11) unsigned NOT NULL DEFAULT '0',
	`checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int(11) unsigned NOT NULL DEFAULT '0',
	`created_by_alias` varchar(255) NOT NULL DEFAULT '',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int(11) unsigned NOT NULL DEFAULT '0',
	`publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`images` text NOT NULL,
	`version` int(11) unsigned NOT NULL DEFAULT '1',
	`hits` int(11) NOT NULL DEFAULT '0',
	`access` int(11) unsigned NOT NULL DEFAULT '0',
	`params` text NOT NULL,
	`metadata` text NOT NULL,
	`metakey` text NOT NULL,
	`metadesc` text NOT NULL,
	PRIMARY KEY (id)
)
CHARACTER SET utf8
COLLATE utf8_general_ci;
