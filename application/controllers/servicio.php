<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("servicio_model");
	}

	public function index()
	{
		$data = array(
			'servicios' => $this->servicio_model->getServicios(),
		);

		$this->load->view('servicio',$data);
	}

	public function registro()
	{

		$nombre = $this->input->post('nombre');

		$data = array(

			'nombre' => $nombre,
			'status' => '1'
		);
		if ($this->servicio_model->guardar($data))
		{
			redirect(base_url().'servicio');
		}
		else {
			redirect(base_url().'home');
		}
	}

	public function editar($id){
			$data = array(
				'servicio' => $this->servicio_model->getServicio($id),
			);
			$this->load->view('editar_servicio',$data);
		}

	public function update(){

		$servicio = $this->input->post('servicio');

		$data = array(
			'nombre' => $nombre,
		);
				if ($this->servicio_model->update($id,$data)) {
					redirect(base_url().'servicio');
				}
				else {
					redirect(base_url().'editar_servicio'.$id);
				}
		}
	public function borrar($id){
		$data = array(
				'status' => "0",
			);
			$this->servicio_model->update($id,$data);
			echo "servicio";
		}
}
