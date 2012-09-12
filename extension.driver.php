<?php

class extension_searchable_tag_list extends extension{
	public function getSubscribedDelegates(){
		return array(
			array(
				'page' => '/backend/',
				'delegate' => 'InitaliseAdminPageHead',
				'callback' => 'appendStylesAndScripts'
			)
		);
	}
	public function appendStylesAndScripts($context){
		$callback = Administration::instance()->getPageCallback();
		if(is_a(Symphony::Engine(),'Administration')){
			Symphony::Engine()->Page->addScriptToHead(URL . '/extensions/searchable_tag_list/assets/searchable_tag_list.admin.js', 70);
			Symphony::Engine()->Page->addScriptToHead(URL . '/extensions/searchable_tag_list/assets/select2/select2.js', 70);
			Symphony::Engine()->Page->addStylesheetToHead(URL . '/extensions/searchable_tag_list/assets/searchable_tag_list.admin.css', 'screen', 101);
			Symphony::Engine()->Page->addStylesheetToHead(URL . '/extensions/searchable_tag_list/assets/select2/select2.css', 'screen', 100);
		}
	}
}