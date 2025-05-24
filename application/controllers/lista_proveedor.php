<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_proveedor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("proveedor_model");
	}

	public function index()
	{
		$data = array(
			'proveedores' => $this->proveedor_model->getProveedores(),
		);

		$this->load->view('lista_proveedor',$data);
	}

	public function registro()
	{
		$id 				= $this->input->post('id');
		$nombre 		= $this->input->post('nombre');
		$direccion 	= $this->input->post('direccion');
		$telefono 	= $this->input->post('telefono');
		$correo 		= $this->input->post('correo');
		$rfc 				= $this->input->post('rfc');
		$ciudad 		= $this->input->post('ciudad');
		$estado 		= $this->input->post('estado');
		$cp 				= $this->input->post('cp');
		$telcel 		= $this->input->post('telcel');

		$data = array(
			'id' 				=> $id,
			'nombre' 	=> $nombre,
			'direccion' => $direccion,
			'telefono' 	=> $telefono,
			'correo' 		=> $correo,
			'rfc' 			=> $rfc,
			'ciudad' 		=> $ciudad,
			'estado' 		=> $estado,
			'cp' 				=> $cp,
			'telcel' 		=> $telcel,
			'status' 		=> '1'
		);
		if ($this->proveedor_model->guardar($data))
		{
			redirect(base_url().'lista_proveedor');
		}
		else {
			redirect(base_url().'home');
		}
	}

	public function editar($id){

			$data = array(
				'proveedor' => $this->proveedor_model->getProveedor($id),
			);
			$this->load->view('editar_proveedor',$data);
		}

	public function update(){

			$id 				= $this->input->post('id');
			$nombre			= $this->input->post('nombre');
			$direccion 	= $this->input->post('direccion');
			$telefono 	= $this->input->post('telefono');
			$correo 		= $this->input->post('correo');
			$rfc 				= $this->input->post('rfc');
			$ciudad 		= $this->input->post('ciudad');
			$estado 		= $this->input->post('estado');
			$cp 				=	$this->input->post('cp');
			$telcel 		= $this->input->post('telcel');

			$data = array(

				'nombre' 		=> $nombre,
				'direccion' => $direccion,
				'telefono' 	=> $telefono,
				'correo' 		=> $correo,
				'rfc' 			=> $rfc,
				'ciudad' 		=> $ciudad,
				'estado' 		=> $estado,
				'cp' 				=> $cp,
				'telcel'		=> $telcel
			);
				if ($this->proveedor_model->update($id,$data)) {
					redirect(base_url().'lista_proveedor');
				}
				else {
					redirect(base_url().'editar_proveedor'.$id);
				}
		}
		public function borrar($id){
			$data = array(
				'status' => "0",
			);
			$this->proveedor_model->update($id,$data);
			echo "lista_proveedor";
		}
}
