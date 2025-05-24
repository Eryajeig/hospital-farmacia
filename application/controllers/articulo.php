<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("articulo_model");
	}

	public function index()
	{
		$data = array(
			'articulos' => $this->articulo_model->getArticulos(),
		);
		$this->load->view('articulo',$data);
	}

	public function registro()
	{
		$id									=	$this->input->post('id');
		$clavecorta					=	$this->input->post('clavecorta');
		$clavessa 					= $this->input->post('clavessa');
		$clavepressupuestal 	= $this->input->post('$clavepressupuestal');
		$nombre 						= $this->input->post('nombre');
		$descripcion 				= $this->input->post('descripcion');
		$unidad 						= $this->input->post('unidad');
		$envase 						= $this->input->post('envase');
		$precio 						= $this->input->post('precio');
		$categoria 					= $this->input->post('categoria');
		$iva 								= $this->input->post('iva');
		$farmacia 					= $this->input->post('farmacia');
		$estante 						= $this->input->post('estante');
		$nivel 							= $this->input->post('nivel');
		$bodega 						= $this->input->post('bodega');
		$pasillo 						= $this->input->post('pasillo');
		$tarima 						= $this->input->post('tarima');
		$status 						= $this->input->post('1');

		$data = array(
			'id'								=> $id,
			'clavecorta' 				=> $clavecorta,
			'clavessa' 					=> $clavessa,
			'clavepressupuestal' => $clavepressupuestal,
			'nombre' 						=> $nombre,
			'descripcion' 			=> $descripcion,
			'unidad' 						=> $unidad,
			'envase' 						=> $envase,
			'precio' 						=> $precio,
			'categoria' 				=> $categoria,
			'iva' 							=> $iva,
			'farmacia' 					=> $farmacia,
			'estante' 					=> $estante,
			'nivel' 						=> $nivel,
			'bodega'						=> $bodega,
			'pasillo' 					=> $pasillo,
			'tarima' 						=> $tarima,
			'status' 						=> '1'
		);
		if ($this->articulo_model->guardar($data))
		{
			redirect(base_url().'articulo');
		}
		else {
			redirect(base_url().'home');
		}
	}

		public function editar($idarticulos){
			$data = array(
				'articulo' => $this->articulo_model->getArticulo($idarticulos),
			);
			$this->load->view('editar_articulo',$data);
		}

		public function update(){

			$id									=	$this->input->post('id');
			$clavecorta					=	$this->input->post('clavecorta');
			$clavessa 					= $this->input->post('clavessa');
			$clavepressupuestal 	= $this->input->post('$clavepressupuestal');
			$nombre 						= $this->input->post('nombre');
			$descripcion 				= $this->input->post('descripcion');
			$unidad 						= $this->input->post('unidad');
			$envase 						= $this->input->post('envase');
			$precio 						= $this->input->post('precio');
			$categoria 					= $this->input->post('categoria');
			$iva 								= $this->input->post('iva');
			$farmacia 					= $this->input->post('farmacia');
			$estante 						= $this->input->post('estante');
			$nivel 							= $this->input->post('nivel');
			$bodega 						= $this->input->post('bodega');
			$pasillo 						= $this->input->post('pasillo');
			$tarima 						= $this->input->post('tarima');

			$data = array(
				'id'								=> $id,
				'clavecorta' 				=> $clavecorta,
				'clavessa' 					=> $clavessa,
				'clavepressupuestal' => $clavepressupuestal,
				'nombre' 						=> $nombre,
				'descripcion' 			=> $descripcion,
				'unidad' 						=> $unidad,
				'envase' 						=> $envase,
				'precio' 						=> $precio,
				'categoria' 				=> $categoria,
				'iva' 							=> $iva,
				'farmacia' 					=> $farmacia,
				'estante' 					=> $estante,
				'nivel' 						=> $nivel,
				'bodega'						=> $bodega,
				'pasillo' 					=> $pasillo,
				'tarima' 						=> $tarima,
		);
		if ($this->articulo_model->update($id,$data))
		{
			redirect(base_url().'articulo');
		}
		else {
			redirect(base_url().'editar_articulo');
		}

		}
		public function borrar($id){
			$data = array(
				'status' => "0",
			);

			$this->articulo_model->update($id,$data);
			echo "articulos";
		}
}
