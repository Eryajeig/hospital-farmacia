<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nueva_salida extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("salida_model");
		$this->load->model("articulo_model");
		$this->load->model("salida_lista_model");
	}

	public function index()
	{
		$this->load->view('nueva_salida');
	}

	public function getarticulos()
	{
		$valor = $this->input->post("valor");
		$usuarios = $this->salida_model->getarticulos($valor);
		echo json_encode($usuarios);
	}

	public function store()
	{
		$idsalida = $this->input->post("idsalida");
		$fechasalida = $this->input->post("fechasalida");
		$tiposalida = $this->input->post("tiposalida");
		$turnosalida = $this->input->post("turnosalida");
		$nosp = $this->input->post("nosp");
		$observaciones = $this->input->post("observaciones");
		$idusuario = $this->session->userdata("idusuario");


		$idarticulo = $this->input->post("idarticulo");
		$cantidadsolicitada = $this->input->post("cantidadsolicitada");
		$cantidadentregada = $this->input->post("cantidadentregada");


		$data = array(
			'idsalida' => $idsalida,
			'fechasalida' => $fechasalida,
			'tiposalida' => $tiposalida,
			'turnosalida' => $turnosalida,
			'nosp' => $nosp,
			'observaciones' => $observaciones,

		);

		if ($this->salida_model->save($data)) {
			$idsalida = $this->salida_model->lastID();
			$this->save_detalle($idarticulo,$idsalida,$cantidadsolicitada,$cantidadentregada);
			redirect(base_url()."lista_salida");
		}else{
			redirect(base_url()."nueva_salida");
		}
	}

	protected function save_detalle($articulos,$idsalida,$cantidadsolicitada,$cantidadentregada){
		for ($i=0; $i < count($articulos); $i++) {
			$data = array(
				'idsalida' => $idsalida,
				'clavecorta' =>$articulos[$i],
				'cantsolicitada' =>$cantidadsolicitada[$i],
				'cantsalida' =>$cantidadentregada[$i]
			);

			$this->salida_model->save_detalle($data);
			$this->updateArticulo($articulos[$i],$cantidadentregada[$i]);
		}

	}

	protected function updateArticulo($idarticulo,$cantsalida){

		$articuloActual = $this->articulo_model->getArticulo($idarticulo);
		$data = array(
			'stock' => $articuloActual->stock - $cantsalida,
		);
		$this->articulo_model->update($idarticulo,$data);
	}

}
