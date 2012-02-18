<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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