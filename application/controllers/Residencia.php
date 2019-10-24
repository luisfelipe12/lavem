<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residencia extends CI_Controller {

	public function index()
	{
		$this->load->view('administracao/admResidencia');
	}

}