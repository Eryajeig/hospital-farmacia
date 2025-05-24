<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_general extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("inventario_general_model");
	}

	public function index()
	{
		$data = array(
			'inventarios' => $this->inventario_general_model->getInventarios(),
		);
		$this->load->view('inventario_general',$data);

	}
}
