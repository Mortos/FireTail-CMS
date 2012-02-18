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

class Account_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
	public function get_info($column, $username)
    {
	$query = $this->db->query("SELECT ".$column." FROM account");
	$query = $this->db->where('username', $username);
	$query = $this->db->get('account');
	foreach ($query->result() as $row)
		{
		return $row->$column;
		}
    } 
	public function get_drakinfo($column, $username)
    {
	$query = $this->db->query("SELECT ".$column." FROM drak_users");
	$query = $this->db->where('username', $username);
	$query = $this->db->get('drak_users');
	foreach ($query->result() as $row)
		{
		return $row->$column;
		}
    } 
	public function register_account()
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
	$this->db->insert('account', $register_info);
	$this->db->insert('drak_users', $register_info_website);
}
	public function login_id($id, $username)
	{
	$query = $this->db->query("SELECT ".$id." FROM account");
	$query = $this->db->where('username', $username);
	$query = $this->db->get('account');
	foreach ($query->result() as $row)
	return $row->$id;
   }
   public function login($username, $password)
   {
      $query = $this->db->where('username', $username);
      $query = $this->db->where('sha_pass_hash', $password);
	  $query = $this->db->get('account');
      return $query->row();
   }
   public function change($columna, $hash, $username)
   {
	   $query = $this->db->query("UPDATE `account` SET `$columna`='$hash'");
	   $query = $this->db->where('username', $username);
	   return $query;
   }
}
