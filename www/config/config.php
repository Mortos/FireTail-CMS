<?php  
if (!defined('BASEPATH')) exit('No se permite el acceso a este script.');
/**********************************************************************************
*	
*		FireTail CMS
* 		-------------------------------------------------------------------
*		Autor		:	Frozen Team
*		Copyright	: 	Copyright (C) 2012, Frozen Team
*		Licencia	:	GNU GPL v3
*		Link		: 	http://github.com/FrozenTeam/
*		--------------------------------------------------------------------
*
**********************************************************************************/

$config['base_url']	= ''; //URL del Sitio, tienes que ser de la siguiente manera: http://tudominio.ejemplo o https://tudominio.ejemplo
$config['site_title'] = '';
$config['server_name'] = '';
$config['path_for_use_htaccess'] = FALSE;
	/* 
	Si $config['path_for_use_htaccess'] se deja en true es porque el sitio esta localizado en "htdocs/" o en "www/", pero
	si esta en una carpeta como "htdocs/una_carpeta/otra_carpeta", "htdocs/una_carpeta/", "www/una_carpeta/otra_carpeta"
	o "www/una_carpeta/" se debe poner FALSE. 
	*/
$config['user_htaccess'] = 0;
$config['index_page'] = 'index.php';
$config['emulator'] = 'Mangos'; // Mangos = MaNGOS, TrinityCore (Trinitycore), Arcemu (ArCemu)
$config['uri_protocol']	= 'AUTO';
$config['url_suffix'] = '';
$config['language']	= 'spanish';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = '';
$config['encryption_key'] = 'b6k2l9of6nw09327fbd1�d7bjwucurkb';
$config['sess_cookie_name']		= 'Drak_sessions';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= FALSE;
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'ci_sessions';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;
$config['global_xss_filtering'] = TRUE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';


/* End of file config.php */
/* Location: ./application/config/config.php */
