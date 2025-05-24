<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model {

	public function getProveedores(){
		$this->db->where("status","1");
		$resultados = $this->db->get("proveedor");
		return $resultados->result();
	}

	public function guardar($data){
		return $this->db->insert('proveedor',$data);
	}

	public function getProveedor($id){
		$this->db->where("id",$idr);
		$resultado = $this->db->get("proveedor");
		return $resultado->row();
		}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("proveedor",$data);
		}
}
