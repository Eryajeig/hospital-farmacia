<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguridad_model extends CI_Model {
	
     public function sessionActivo(){
          if($this->session->userdata('logeado')){

          }else{
               redirect(base_url());
          }
     }
}
?>