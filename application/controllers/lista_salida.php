<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_salida extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("salida_lista_model");
	}

	public function index()
	{
		$data = array(
			'listas' => $this->salida_lista_model->getSalidas(),
		);

		$this->load->view('lista_salida',$data);

	}
}
