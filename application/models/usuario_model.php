<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function login($username, $password){
		$this->db->where("usuario", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows() > 0){
			return $resultados->row();
		}
		else{
			return false;
		}
	}

		public function getUsuarios(){
		$this->db->where("status","1");
		$resultados = $this->db->get("usuario");
		return $resultados->result();
	}

		public function guardar($data){
		return $this->db->insert('usuario',$data);
		}

		public function getUsuario($id){
			$this->db->where("id",$id);
			$resultado = $this->db->get("usuario");
			return $resultado->row();
		}

		public function update($id,$data){
			$this->db->where("id",$id);
			return $this->db->update("usuario",$data);
	}
}
