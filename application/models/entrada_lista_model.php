<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada_lista_model extends CI_Model {

	public function getEntradas(){
		$resultados = $this->db->get("entrada");
		return $resultados->result();
	}
}
