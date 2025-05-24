<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitante_model extends CI_Model {

	public function getSolicitantes(){
			$this->db->where("estado","1");
			$resultados = $this->db->get("solicitante");
			return $resultados->result();
		}

	public function guardar($data){
		return $this->db->insert('solicitante',$data);
		}


	public function getSolicitante($idsolicitante){
		$this->db->where("idsolicitante",$idsolicitante);
		$resultado = $this->db->get("solicitante");
		return $resultado->row();
		}

	public function update($idsolicitante,$data){
		$this->db->where("idsolicitante",$idsolicitante);
		return $this->db->update("solicitante",$data);
		}
	}

