<?php
if (!defined('BASEPATH')) exit('No se permite el acceso a este script.');
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

class Community_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function get_slider()
	{
		$ejecutable = "SELECT * FROM drak_community_slider ORDER BY `id` DESC LIMIT 4";
		$query = $this->db->query($ejecutable);
		return $query->result_array();
	}
	public function get_leader_slider()
	{
		$query = $this->db->query("SELECT * FROM drak_community_slider ORDER BY `id` DESC LIMIT 1");
		return $query->result_array();
	}
	public function get_rows($categoria)
	{
		$query = $this->db->query("SELECT * FROM drak_".$categoria."");
		return $query->num_rows();
	}
}
