<?php
if (!defined('BASEPATH')) exit('<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Acceso prohibido!</title><style type="text/css"><!--/*--><![CDATA[/*><!--*/body{color:#000000;background-color:#FFFFFF;}a:link{color:#0000CC;}p,address{margin-left:3em;}span{font-size: smaller;}/*]]>*/--></style></head><body><h1>Acceso prohibido!</h1><h2>Error 403</h2><p>Usted no tiene permiso de accesar al objeto solicitado. El objeto est&aacute; protegido contra lectura, o no puede ser leido por el servidor.</p></body></html>');
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