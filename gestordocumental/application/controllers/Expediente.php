<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expediente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$data['title']='Expediente';
		$this->load->view('vacio',$data);
		$this->load->view('example.php',$output);
	}

	public function index()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('expediente');
			$crud->columns('descripcion','proveedor','documento');
			$crud->set_relation('proveedor','proveedor','nombre');
			$crud->set_field_upload('documento','assets/uploads/files/expedientes');
			$output = $crud->render();
			$this->_example_output($output);
	}

}//fin de Expediente

/* End of file Expediente.php */
/* Location: ./application/controllers/Expediente.php */