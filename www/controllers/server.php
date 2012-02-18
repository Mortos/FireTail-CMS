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

class Server extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->url = $this->config->item('base_url');
		$data['path'] = $this->url;
		$data['title'] = $this->config->item('site_title');
		$this->template->title($data['title'], 'Servidor');
		$data['server_name'] = $this->config->item('server_name');
		$data['theme'] = $this->config->item('theme');
		$data['activo'] = 'server';
		$data['pagina'] = 'game-index';
		$data['logged_id'] = $this->session->userdata('id');
		$data['logged_in'] = $this->session->userdata('logged_in');
		$data['username'] = $this->session->userdata('username'); 
		$this->load->model('announces_model');
		$data['announce'] = $this->announces_model->announce();
		$this->template->prepend_metadata('
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/images/favicons/wow.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/css/common.css?v37" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/css/common-ie.css?v37" />
<![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/css/common-ie6.css?v37" />
<![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/css/common-ie7.css?v37" />
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/wow.css?v19" />
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/wiki/wiki.css?v19" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/wiki/wiki-ie.css?v19" />
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/game/game-index.css?v19" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/wow-ie.css?v19" />
<![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/wow-ie6.css?v19" />
<![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css?v19" />
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/css/locale/es-es.css?v37" />
<link rel="stylesheet" type="text/css" media="all" href="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/css/locale/es-es.css?v19" />
<script type="text/javascript" src="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/js/third-party/jquery.js?v37"></script>
<script type="text/javascript" src="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/js/core.js?v37"></script>
<script type="text/javascript" src="'.$data['path'].'/'.APPPATH.'themes/'.$data['theme'].'/static/local-common/js/tooltip.js?v37"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand(\'BackgroundImageCache\', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->');
$this->template->build('server', $data);
	}
}