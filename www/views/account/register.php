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
?><div id="body">
<code><?php echo validation_errors(); ?></code>
<?php echo form_open('account/register'); ?>
		<code>
		  <label>Nombre de Cuenta:
		    <input type="text" name="username" value="<?php echo set_value('username'); ?>">
	      </label>
	  </code>
		<code>
		<label>Contrase&ntilde;a: 
		    <input type="password" name="password" value="<?php echo set_value('password'); ?>">
	      </label>
		  </code>
		  <code>
		<label>Repetir Contrase&ntilde;a: 
		    <input type="password" name="repeat_password" value="<?php echo set_value('repeat_password'); ?>">
	      </label>
		  </code>
		  <code>
		<label>Email: 
		    <input type="text" name="email" value="<?php echo set_value('email'); ?>">
	      </label>
		  </code>
		  <code>
		<label>Repetir Email: 
		    <input type="text" name="repeat_email" value="<?php echo set_value('repeat_email'); ?>">
	      </label>
		  </code>
		  <code>
		<label>
		    <input type="submit" value="Crear Cuenta">
	      </label>
		  </code>
	</div>