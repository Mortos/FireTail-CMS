<?php
if (!defined('BASEPATH')) exit('<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Acceso prohibido!</title><style type="text/css"><!--/*--><![CDATA[/*><!--*/body{color:#000000;background-color:#FFFFFF;}a:link{color:#0000CC;}p,address{margin-left:3em;}span{font-size: smaller;}/*]]>*/--></style></head><body><h1>Acceso prohibido!</h1><h2>Error 403</h2><p>Usted no tiene permiso de accesar al objeto solicitado. El objeto est&aacute; protegido contra lectura, o no puede ser leido por el servidor.</p></body></html>');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
*/
$active_group = 'general';
$active_record = TRUE;
/* Base de Datos - General */
$db['general']['hostname'] = ''; // HOST del MySQL
$db['general']['username'] = ''; // USUARIO del MySQL
$db['general']['password'] = ''; // CONTRASEÑA del MySQL
$db['general']['database'] = ''; // BASE DE DATOS DONDE SE ALMACENA EL SITIO Y EL AUTH(PUEDE SER AUTH O REALMD)
$db['general']['dbdriver'] = 'mysql';
$db['general']['dbprefix'] = '';
$db['general']['pconnect'] = FALSE;
$db['general']['db_debug'] = TRUE;
$db['general']['cache_on'] = FALSE;
$db['general']['cachedir'] = '';
$db['general']['char_set'] = 'utf8';
$db['general']['dbcollat'] = 'utf8_general_ci';
$db['general']['swap_pre'] = '';
$db['general']['autoinit'] = TRUE;
$db['general']['stricton'] = FALSE;
/* End of file database.php */
/* Location: ./application/config/database.php */