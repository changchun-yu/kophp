<?php 
defined('SYS_PATH') OR die('No direct access allowed.');

return array (
	'templates_ext'         => 'html',
	'template_path'         => APP_PATH. 'views/',
	'cache_path'            => DATA_PATH. 'cache/smarty_cache/',
	'compile_path'          => DATA_PATH. 'cache/smarty_compile/',
	'configs_path'          => DATA_PATH. 'config/',
	'left_delimiter'        => '<{',
	'right_delimiter'       => '}>',
);
