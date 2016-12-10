<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function filtro_centro($centro) {
 		$this->db->where('centro',$centro);
		$query= $this->db->get('gestion');
		return $query;
	}

	public function filtro_expediente(){
		$query = $this->db->get('expediente');
		return $query;
	}

	public function filtro_prioridad($prioridad){
		//TODO
	}

}

/* End of file gestion_model.php */
/* Location: ./application/models/gestion_model.php */
