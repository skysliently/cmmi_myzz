<?php
return array(
	//'配置项'=>'配置值'
	
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD'  => '123456',
	'DB_NAME' => 'cmmi',
	'DB_PREFIX' => 'cmmi_',



	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',

	// 'SHOW_PAGE_TRACE' => true,

	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' =>array(
		// '/^c_(\d+)$' => 'Index/List/index?id=1',
		// 'c/:id' => 'Index/List/index',
		// ':id' => 'Index/Show/index'
		)

	// 'TMPL_PARSE_STRING' => array(
	// 	'__LOGIN__' => __ROOT__ . '/' . APP_NAME . '/Modules/' . 'Admin' . '/Tpl/Login',
	// 	'__INDEX__' => __ROOT__ . '/' . APP_NAME . '/Modules/' . 'Admin' . '/Tpl/Index'
	// ),
	// 'URL_HTML_SUFFIX' => '',
		
	
);
?>