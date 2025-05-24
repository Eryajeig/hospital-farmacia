<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("usuario_model");
	}

	public function index()
	{
		$data = array(
			'usuarios' => $this->usuario_model->getUsuarios(),
		);

		$this->load->view('lista_usuario',$data);

	}

		public function registro()
	{

		$nombre 	= $this->input->post('nombre');
		$usuario 	= $this->input->post('usuario');
		$password = $this->input->post('password');
		$telefono = $this->input->post('telefono');
		$turno 		= $this->input->post('turno');

		$data = array(
			'id' 				=> $id,
			'nombre' 		=> $nombre,
			'usuario' 	=> $usuario,
			'password'	=> $password,
			'telefono'	=> $telefono,
			'turno' 		=> $turno,
			'status' 		=> '1'
		);
		if ($this->usuario_model->guardar($data))
		{
			redirect(base_url().'usuario');
		}
		else {
			redirect(base_url().'home');
		}
	}

		public function editar($id){
			$data = array(
				'usuario' => $this->usuario_model->getUsuario($id),
			);
			$this->load->view('editar_usuario',$data);
		}

		public function update(){

			$iduser 	= $this->input->post('id');
			$nombre 	= $this->input->post('nombre');
			$usuario 	= $this->input->post('usuario');
			$password	= $this->input->post('password');
			$telefono = $this->input->post('telefono');
			$turno 		= $this->input->post('turno');

			$data = array(
				'id' 			=> $iduser,
				'nombre' 		=> $nombre,
				'usuario' 	=> $usuario,
				'password'	=> $password,
				'telefono'	=> $telefono,
				'turno' 		=> $turno
			);
				if ($this->usuario_model->update($id,$data)) {
					redirect(base_url().'usuario');
				}
				else {
					redirect(base_url().'editar_usuario'.$id);
				}
		}
		public function borrar($id){
			$data = array(
				'status' => "0",
			);
			$this->usuario_model->update($id,$data);
			echo "usuario";
		}
}
