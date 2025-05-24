<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_general_model extends CI_Model {

	public function getInventarios(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("articulo");
		return $resultados->result();
	}
}
