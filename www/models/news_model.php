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

class News_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	public function get_news($Id = NULL)
	{
		if ($Id === NULL)
		{
			$query = $this->db->query("SELECT * FROM `drak_news` ORDER BY `id` DESC LIMIT 5");
			return $query->result_array();
			
		}
		else
		{
			$query = $this->db->get_where('drak_news', array('id' => $Id));
			return $query->row_array();
		}
	
	}
	public function get_news_date($id)
	{
			$query = $this->db->query("SELECT * FROM `drak_news` ORDER BY `id` DESC LIMIT 5");
			$query = $this->db->get_where('drak_news', array('id' => $id));
			return $query->result_array();
			
		}
	public function get_top_min_news()
	{
			$query = $this->db->query("SELECT * FROM `drak_news` ORDER BY `id` DESC LIMIT 4");
			return $query->result_array();
	
	}
	public function get_index_comments_on_news($ID)
	{
		$query = $this->db->get_where('drak_news_comments', array('id_news' => $ID));
		return $query->num_rows();
	}
	public function set_news()
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);
		
		return $this->db->insert('drak_news', $data);
	}
	
	public function get_total_comments($Id = NULL)
	{
		if($Id === NULL)
		{
			return FALSE;
		}
		else
		{
			$query = $this->db->get_where('drak_news_comments', array('id_news' => $Id));
			return $query->num_rows();
		}
	}
	
	public function get_comments($Id)
	{
		if($Id === NULL)
		{
			return FALSE;
		}
		else
		{
			$query = $this->db->where('id_news', $Id);
			$query = $this->db->get('drak_news_comments');
			return $query->result_array();
		}
	}
	public function set_comments($Id)
	{
	if($Id === NULL)
		{
			return FALSE;
		}
		else
		{
	$datestring = "%d-%m-%Y | %h:%i %a";
	$time = time();
	$set_date = mdate($datestring, $time);
	$data = array(
			'id_news' => $Id,
			'user' => $this->session->userdata('username'),
			'date' => $set_date,
			'comment' => $this->input->post('comment')
		);
	return $this->db->insert('drak_news_comments', $data);
		}
	}
}
