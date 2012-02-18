<?php defined('BASEPATH') OR exit('No direct script access allowed');

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