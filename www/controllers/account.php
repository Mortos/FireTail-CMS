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

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
		$this->load->library('SHA_Hash');
		$website_path = $this->config->item('base_url');
	}
	public function index()
	{
	}
	public function management()
	{
	$this->url = $this->config->item('base_url');
	$info = array(
	'path' => $this->url,
	'title' => $this->config->item('site_title'),
	'server_name' => $this->config->item('server_name'),
	'theme' => $this->config->item('theme'),
	'logged_in' => $this->session->userdata('logged_in'),
	'logged_id' => $this->session->userdata('id'),
	'id' => $this->account_model->get_info('id', $this->session->userdata('username')),
	'username' => $this->account_model->get_info('username', $this->session->userdata('username')),
	'email' => $this->account_model->get_info('email', $this->session->userdata('username')),
	'joindate' => $this->account_model->get_info('joindate', $this->session->userdata('username')),
	'expansion' => $this->account_model->get_info('expansion', $this->session->userdata('username')),
	'banned' => $this->account_model->get_info('locked', $this->session->userdata('username')),
	'coins' => $this->account_model->get_drakinfo('coins', $this->session->userdata('username')),
	'points' => $this->account_model->get_drakinfo('points', $this->session->userdata('username'))
	);
	if($this->session->userdata('logged_in') == TRUE)
	{ 
	$this->load->view('account', $info);
	$this->load->view('account/footer', $info);
	}
	else {
	redirect('account/login', 'refresh');
	}
	}
	public function change_password()
	{
	$this->url = $this->config->item('base_url');
	$info = array(
	'path' => $this->url,
	'title' => $this->config->item('site_title'),
	'server_name' => $this->config->item('server_name'),
	'theme' => $this->config->item('theme'),
	'logged_in' => $this->session->userdata('logged_in'),
	'logged_id' => $this->session->userdata('id'),
	'id' => $this->account_model->get_info('id', $this->session->userdata('username')),
	'username' => $this->account_model->get_info('username', $this->session->userdata('username')),
	'email' => $this->account_model->get_info('email', $this->session->userdata('username')),
	'coins' => $this->account_model->get_drakinfo('coins', $this->session->userdata('username'))
	);
	$this->form_validation->set_rules('oldPassword', 'Username', 'required');
	$this->form_validation->set_rules('newPassword', 'Password', 'required');
	$this->form_validation->set_rules('newPasswordVerify', 'Password Confirmation', 'required');
	$username = $this->account_model->get_info('username', $this->session->userdata('username'));
	$password_hash_db = $this->account_model->get_info('sha_pass_hash', $username);
	$old_hash = $this->sha_hash->sha_password($username, $this->input->post('oldPassword'));
	$hash = $this->sha_hash->sha_password($username, $this->input->post('newPassword'));
	if($this->form_validation->run() == FALSE)
	{
	$this->load->view('account/change_pass', $info);
	$this->load->view('account/footer', $info);
	}
	elseif($password_hash_db != $old_hash)
	{
		$info['suceso'] = "La contrase&ntilde;a actual es incorrecta.";
		$this->load->view('account/change_pass', $info);
		$this->load->view('account/footer', $info);
	}
	elseif($this->input->post('newPassword') != $this->input->post('newPasswordVerify'))
	{
		$info['suceso'] = "La contrase&ntilde;a nueva debe coincidir con su confirmaci&oacute;n.";
		$this->load->view('account/change_pass', $info);
		$this->load->view('account/footer', $info);
	}
	else {
	$info['suceso'] = "Se ha cambiado la Contrase&ntilde;a";
	$this->account_model->change('sha_pass_hash', $hash, $username);
	$this->load->view('account/change_pass', $info);
	$this->load->view('account/footer', $info);
	}
	}
	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'is_unique[account.username]|trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[repeat_password]|xss_clean');
		$this->form_validation->set_rules('repeat_password', 'Password Confirmation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'is_unique[account.email]|trim|required|matches[repeat_email]|valid_email|xss_clean');
		$this->form_validation->set_rules('repeat_email', 'Email Confirmation', 'trim|required|valid_email|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->build('account/register');
		}
		else
		{
			$this->account_model->register_account();
			$this->template->build('account/register_sucess');
		}
	}
	public function login($idioma = NULL)
   {
  		$data['path'] = $this->config->item('base_url');
		$data['server_name'] = $this->config->item('server_name');
		$data['theme'] = $this->config->item('theme');
      if(!isset($_POST['username'])){  
      $this->load->view('account/login', $data);
      }
      else{
         $this->form_validation->set_rules('username','Username','required');
         $this->form_validation->set_rules('password','Password','required');
         if(($this->form_validation->run() == FALSE)){
            $this->load->view('account/login', $data);
         }
         else{
            $this->load->model('account_model');
			$username = $this->input->post('username');
			$password = $this->sha_hash->sha_password($username, $this->input->post('password'));
            $Load_data = $this->account_model->login($username, $password);
            $id = $this->account_model->get_info('id', $username);
            if($Load_data){
			   $login_data = array(
			   	   'id' => $id,
                   'username'  => $this->input->post('username'),
                   'logged_in' => TRUE
               );
			   $this->session->set_userdata($login_data);
               $this->load->view('account/login_success', $data);
            }
            else{
				$data['username_empty_error']="Por favor, rellena el campo de nombre de usuario";
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
			  $this->load->view('account/login', $data);
            }
         }
      }
   }
	public function logout()
	{
	if($this->session->userdata('logged_in') == TRUE)
	{
	$this->session->sess_destroy();
	$this->template->build('account/logout');
	}
	else {
	redirect('/', 'refresh');
	}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */