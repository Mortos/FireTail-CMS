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

class Sidebar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function sotd()
	{
		$this->load->model('news_model');
		$data['news'] = $this->news_model->get_news();
		$this->load->view('/sidebar/sotd', $data);
	}
	public function related_articles()
	{
		$this->load->model('news_model');
		$data['news'] = $this->news_model->get_news();
		$this->load->view('/sidebar/related-articles', $data);
	}
	public function recent_articles()
	{
		$this->load->model('news_model');
		$data['news'] = $this->news_model->get_news();
		$this->load->view('/sidebar/recent-articles', $data);
	}
	public function forums()
	{
		$this->load->model('news_model');
		$data['news'] = $this->news_model->get_news();
		$this->load->view('/sidebar/forums', $data);
	}
}