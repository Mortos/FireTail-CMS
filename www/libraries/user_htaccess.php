<?php
if (!defined('BASEPATH')) exit('<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Acceso prohibido!</title><style type="text/css"><!--/*--><![CDATA[/*><!--*/body{color:#000000;background-color:#FFFFFF;}a:link{color:#0000CC;}p,address{margin-left:3em;}span{font-size: smaller;}/*]]>*/--></style></head><body><h1>Acceso prohibido!</h1><h2>Error 403</h2><p>Usted no tiene permiso de accesar al objeto solicitado. El objeto est&aacute; protegido contra lectura, o no puede ser leido por el servidor.</p></body></html>');
class User_htaccess {

    public function __construct()
    {
    }
	public function user_of_htaccess(){
	if($user_htaccess === 1)
	{
		return "index.php";
	}
	elseif($user_htaccess === 0)
	{
		return "";
	}
	elseif($user_htaccess > 2)
	{
		return "ERROR['1']:<br />Se ha dado un valor equivocado en la configuración sobre el uso del archivo '.htaccess'.";
		exit ();
	} else {
		return "ERROR['2']:<br />No se ha determinado si el sitio usa el archivo '.htaccess'.";
		exit ();
	}
	}
}