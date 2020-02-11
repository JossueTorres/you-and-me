<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//Constructor del controlador: aca se agregan referencias a modelos
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	//funcion principal
	public function index()
	{
		//verificar la session de usuario
		$this->load->view('login');
	}

	public function Login()
	{		
		$_param = array(
			'usr' => $this->input->post("txtUsr"),
			'pwd' => $this->input->post("txtPass"),
		);

		$output = $this->Auth->login($_param);

		if ($output != null)
			$valida = true;
		else
			$valida = false;

		//si el nombre de usuario ingresado es correcto enviarlo al controlador Dashboard
		if ($valida == true) {
			$data  = array(
				'usuario' => $_param['usr'],
				'login' => $valida,
				'nom' => $output['NOMBRE'],
			);
			// $this->session->set_userdata('logged_in', $session_data);	
			$this->session->set_userdata($data);	

			redirect(base_url('Prueba'));

		} else
			redirect(base_url('Login'));
	}

	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		redirect(base_url('Login'));
	}
}