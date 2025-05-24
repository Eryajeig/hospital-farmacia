<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {

	public function getServicios(){
		$this->db->where("status","1");
		$resultados = $this->db->get("servicio");
			return $resultados->result();
		}

	public function guardar($data){
		return $this->db->insert('servicio',$data);
		}

	public function getServicio($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("servicio");
		return $resultado->row();
		}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("servicio",$data);
		}
}
