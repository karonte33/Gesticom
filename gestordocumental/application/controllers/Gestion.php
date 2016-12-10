<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$data['title']='Gestion';
		$this->load->view('vacio',$data);
		$this->load->view('example.php',$output);
	}

	public function index()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('gestion');
			$crud->columns('denominacion','proveedor','prioridad','porcentaje','estado');
			$crud->set_relation('proveedor','proveedor','nombre');
			$crud->set_relation('centro','centro','nombre');

			$crud->set_field_upload('documento1','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento2','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento3','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento4','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento5','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento6','assets/uploads/files/gestiones');
			$crud->set_field_upload('documento7','assets/uploads/files/gestiones');
			$output = $crud->render();
			$this->_example_output($output);
	}

}/* End of file Gestion.php */


/* Location: ./application/controllers/Gestion.php */
