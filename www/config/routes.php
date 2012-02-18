<?php  
if(!defined('BASEPATH')) exit('No se permite el acceso directo a este script.');
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
$route['sidebar'] = 'sidebar';
$route['sidebar/sotd'] = 'sidebar/sotd';
$route['sidebar/related-articles'] = 'sidebar/related_articles';
$route['sidebar/recent-articles'] = 'sidebar/recent_articles';
$route['sidebar/forums'] = 'sidebar/forums';
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['server'] = 'server';
$route['server/realm-status'] = 'server/realm_satus';
$route['community'] = 'community';
$route['services'] = 'services';
$route['account'] = 'account';
$route['account/management'] = 'account/management';
$route['account/settings/change-password'] = 'account/change_password';
$route['account/register'] = 'account/register';
$route['account/login'] = 'account/login';
$route['account/logout'] = 'account/logout';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'news';


/* End of file routes.php */
/* Location: ./application/config/routes.php */