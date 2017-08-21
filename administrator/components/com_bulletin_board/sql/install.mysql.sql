CREATE TABLE IF NOT EXISTS `#__bulletin_board_categories`(
`id` int(5) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`parent_id` int(5) NOT NULL DEFAULT 0,
`alias` varchar(255) NOT NULL,
`state` tinyint(1) NOT NULL DEFAULT 1,
PRIMARY KEY (`id`)
)
DEFAULT CHARSET='utf8'
ENGINE=InnoDB ;

CREATE TABLE IF NOT EXISTS `#__bulletin_board_posts`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`introtext` text NOT NULL,
`fulltext` text NOT NULL,
`title` varchar(255) NOT NULL,
`text` text NOT NULL,
`user_id` int(11) NOT NULL,
`category_id` int(5) NOT NULL,
`type_id` int(5) NOT NULL,
`town` varchar(255) NOT NULL,
`images` text NOT NULL,
`confirm` enum ('0','1') NOT NULL DEFAULT '0',
`price` decimal (10,0) NULL,
`created` datetime NOT NULL,
`publish_up` datetime NOT NULL,
`publish_down` datetime NOT NULL,
`modified` datetime NOT NULL,
`ordering` int(11) NOT NULL DEFAULT '0',
`hits` int(11) NOT NULL DEFAULT '0',
`metadesc` varchar(255) NOT NULL,
`metakey` varchar(255) NOT NULL,
`alias` varchar(255) NOT NULL,
`state` tinyint(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
)
DEFAULT CHARSET='utf8'
ENGINE=InnoDB ;

CREATE TABLE IF NOT EXISTS `#__bulletin_board_types`(
`id` tinyint(3) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`alias` varchar(255) NOT NULL,
`state` tinyint(1) NOT NULL DEFAULT '1',
`asset_id` int(3) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) 
DEFAULT CHARSET='utf8'
ENGINE=InnoDB ;

