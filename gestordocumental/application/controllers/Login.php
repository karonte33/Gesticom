<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
	}

	public function index(){
		$data['title']='Login';
		$this->load->view('login/login',$data);
	}

	public function log()
	{
		
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$usuario=$this->usuario_model->login($user,md5($pass));
		if ($usuario) {
			redirect('inicio','refresh');
		}
		else{	redirect('login','refresh')	;
		
		}

	}//fin log

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */