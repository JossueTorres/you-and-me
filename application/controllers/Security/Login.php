<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{		
		$this->load->view('public/login');
		if (!$this->session->userdata()) {
			redirect(base_url('Inicio'));
		}
	}
	
}