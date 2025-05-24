<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitante extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("solicitante_model");
	}

	public function index()
	{
		$data = array(
			'solicitantes' => $this->solicitante_model->getSolicitantes(),
		);

		$this->load->view('solicitante',$data);
	}

	public function registro()
	{
		$idsolicitante = $this->input->post('idsolicitante');
		$nomsolicitante = $this->input->post('nomsolicitante');
		$cedula = $this->input->post('cedula');
		$cedulall = $this->input->post('cedulall');
		$institucion = $this->input->post('institucion');

		$data = array(
			'idsolicitante' => $idsolicitante,
			'nomsolicitante' => $nomsolicitante,
			'cedula' => $cedula,
			'cedulall' => $cedulall,
			'institucion' => $institucion,
			'estado' => '1'
		);
		if ($this->solicitante_model->guardar($data))
		{
			redirect(base_url().'solicitante');
		}
		else {
			redirect(base_url().'home');
		}
	}

	public function editar($idsolicitante){
		$data = array(
			'solicitante' => $this->solicitante_model->getSolicitante($idsolicitante),
			);
		$this->load->view('editar_solicitante',$data);
	}

	public function update(){

		$idsoli = $this->input->post('idsoli');
		$nomsolicitante = $this->input->post('nomsolicitante');
		$cedula = $this->input->post('cedula');
		$cedulall = $this->input->post('cedulall');
		$institucion = $this->input->post('institucion');

			$data = array(
				'nomsolicitante' => $nomsolicitante,
				'cedula' => $cedula,
				'cedulall' => $cedulall,
				'institucion' => $institucion
			);
				if ($this->solicitante_model->update($idsoli,$data)) {
					redirect(base_url().'solicitante');
				}
				else {
					redirect(base_url().'editar_solicitante'.$idsoli);
				}
		}
		public function borrar($idsolicitante){
			$data = array(
				'estado' => "0",
			);
			$this->solicitante_model->update($idsolicitante,$data);
			echo "solicitante";
		}
}
