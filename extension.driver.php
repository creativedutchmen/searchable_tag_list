<?php

class extension_searchable_tag_list extends extension{
	public function install(){
		return Symphony::Database()->query(
			'CREATE TABLE IF NOT EXISTS `sym_fields_searchabletaglist` (
				`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
				`field_id` int(11) unsigned NOT NULL,
				`validator` varchar(255) DEFAULT NULL,
				`pre_populate_source` varchar(15) DEFAULT NULL,
				PRIMARY KEY (`id`),
				KEY `field_id` (`field_id`),
				KEY `pre_populate_source` (`pre_populate_source`)
			)
			ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;'
		);
	}
}