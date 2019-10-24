<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ensino_Fundamental extends CI_Controller {

	public function index()
	{
		$this->load->view('administracao/admEnsino_Fundamental');
	}

}