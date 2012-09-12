<?php

if(!defined('__IN_SYMPHONY__')) die('<h2>Symphony Error</h2><p>You cannot directly access this file</p>');

require_once TOOLKIT . '/fields/field.taglist.php';

class FieldSearchableTagList extends FieldTagList{

	public function __construct(){
		parent::__construct();
		$this->_name = __('Searchable Tag List');
	}

}