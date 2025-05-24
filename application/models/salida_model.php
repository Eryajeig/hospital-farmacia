<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salida_model extends CI_Model {

	public function getarticulos($valor)
	{
		$this->db->select("idarticulos,clavecorta,nombarticulo as label,presentacion,stock");
		$this->db->from("articulo");
		$this->db->like("nombarticulo",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save($data){
		return $this->db->insert("salida",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function save_detalle($data){
		$this->db->insert("detallesalida",$data);
	}
}
