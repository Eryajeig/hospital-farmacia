<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_entrada extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("entrada_lista_model");
	}

	public function index()
	{
		$data = array(
			'entradas' => $this->entrada_lista_model->getEntradas(),
		);

		$this->load->view('lista_entrada',$data);
		$this->load->helper('date');

	}
}
