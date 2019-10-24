<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjetosLicenciatura extends CI_Controller {

	public function projetos()
	{
		$this->load->view('administracao/admProjetos');
	}

}
