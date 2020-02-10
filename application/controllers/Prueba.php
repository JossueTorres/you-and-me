<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prueba extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();		
	}


	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('public/prueba');
		$this->load->view('layouts/footer');
	}
}