<?php
/* Database settings for Glossword */
define('GW_DB_HOST', 'localhost');
define('GW_DB_DATABASE', 'sans_dict');
define('GW_DB_USER', 'root');
define('GW_DB_PASSWORD', 'password');
$sys['tbl_prefix'] = 'gw_';
$sys['db_type'] = 'mysql';
/* Path names for Glossword */
$sys['server_proto'] = 'http://';
$sys['server_host'] = 'localhost';
$sys['server_dir'] = '/dictionary';
/* Path to sources */
$sys['server_url'] = $sys['server_proto'].$sys['server_host'].$sys['server_dir'];
$sys['file_login'] = 'gw_login.php';
$sys['file_admin'] = 'gw_admin.php';
$sys['path_addon'] = 'gw_addon';
$sys['path_admin'] = 'gw_admin';
$sys['path_gwlib'] = 'lib';
$sys['path_img'] = 'img';
$sys['path_include'] = 'inc';
$sys['path_include_local'] = 'inc';
$sys['path_locale'] = 'gw_locale';
$sys['path_tpl'] = 'templates';
$sys['path_css_script'] = $sys['server_dir'];
$sys['page_admin'] = $sys['server_dir'] .'/'. $sys['file_admin'];
$sys['page_login'] = $sys['server_dir'] .'/'. $sys['file_login'];
$sys['token'] = 'dc437acf';
$sys['is_allow_tech_support'] = 0;
?>