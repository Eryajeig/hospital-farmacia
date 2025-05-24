<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model");
	}


	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."home");
		}
		else{
			$this->load->view('vlogin');
		}

	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = 	$this->usuario_model->login($username, $password);

		if (!$res) {
			$this->session->set_flashdata("error","El Usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data = array(
				'id' => $res->id,
				'nombre'=> $res->nombre,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."home");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
