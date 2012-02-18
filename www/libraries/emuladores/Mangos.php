<?php
if (!defined('BASEPATH')) exit('<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Acceso prohibido!</title><style type="text/css"><!--/*--><![CDATA[/*><!--*/body{color:#000000;background-color:#FFFFFF;}a:link{color:#0000CC;}p,address{margin-left:3em;}span{font-size: smaller;}/*]]>*/--></style></head><body><h1>Acceso prohibido!</h1><h2>Error 403</h2><p>Usted no tiene permiso de accesar al objeto solicitado. El objeto est&aacute; protegido contra lectura, o no puede ser leido por el servidor.</p></body></html>');
class Mangos {

    public function __construct()
    {
    }
	public function register_dates($user,$pass)
	{
	$hash = $this->encryption_model->sha_password($this->input->post('username'), $this->input->post('password'));
	$register_info = array(
		'username' => $this->input->post('username'),
		'sha_pass_hash' => $hash,
		'email' => $this->input->post('email'),
		'expansion' => 2
	);
	$register_info_website = array(
		'username' => $this->input->post('username'),
		'points' => 0,
		'coins' => 0,
		'email' => $this->input->post('email'),
		'level' => 1
	);
	}
}