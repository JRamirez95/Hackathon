<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musico extends CI_Controller {

	
	public function registrar()
	{
		$this->load->view('musicos/registro');
	}
}
