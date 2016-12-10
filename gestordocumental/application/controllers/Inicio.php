<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('gestion_model');
	}

	public function index()
	{
		$data['title']='inicio';
		$data['vista']='inicio/index';
		$data['filtro']=$this->gestion_model->filtro_centro(3);
		$data['expe']=$this->gestion_model->filtro_expediente();
		$this->load->view('vacio',$data);
		$this->load->view('template',$data);

	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */
