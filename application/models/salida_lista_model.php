<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida_lista_model extends CI_Model {

	public function getSalidas(){
		$resultados = $this->db->get("salida");
		return $resultados->result();
	}
}
