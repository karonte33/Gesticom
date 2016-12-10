<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {	

	public function __construct(){
		parent::__construct();
	}

	public function login($user,$pass){

		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		$query=$this->db->get('login');
		
		if ($query->num_rows()>0) {
			return TRUE;
		}else{
			return FALSE;
		}

	}
}//fin del model

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */