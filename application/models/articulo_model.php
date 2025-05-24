<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo_model extends CI_Model {

	public function getArticulos(){
		$this->db->where("status","1");
		$resultados = $this->db->get("articulos");
		return $resultados->result();
	}
		public function guardar($data){
		return $this->db->insert('articulos',$data);
		}
		public function getArticulo($id){
			$this->db->where("id",$id);
			$resultado = $this->db->get("articulos");
			return $resultado->row();
		}

		public function update($id,$data){
			$this->db->where("id",$id);
			return $this->db->update("articulos",$data);
		}
}
