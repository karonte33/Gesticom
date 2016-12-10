<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function index()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('factura');
			$crud->set_relation('proveedor','proveedor','nombre');
			$crud->set_field_upload('documento','assets/uploads/files/facturas');
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function _example_output($output = null)
	{
		$data['title']='Factura';
		$this->load->view('vacio',$data);
		$this->load->view('example.php',$output);
	}

}

/* End of file Factura.php */
/* Location: ./application/controllers/Factura.php */