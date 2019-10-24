<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinemat extends CI_Controller {

	public function index()
	{
		$this->load->view('administracao/admCinemat');
	}

}