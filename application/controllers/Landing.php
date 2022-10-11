<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_inicio');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('landing/landing');
	}
	public function login()
	{
		$this->load->view('landing/login');
	}
	public function registrar()
	{
		$insertar = array(

			"nombre" => $this->input->post('nombre'),

			"user" => $this->input->post('user'),

			"contrasena" => $this->input->post('contrasena'),

			"telefono" => $this->input->post('telefono'),

		);
		$this->Model_inicio->registro($insertar);
		redirect(base_url() . 'Landing/login', 'refresh');
	}
	public function validaAcceso()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('contrasena');

		$result = $this->Model_inicio->consultaUser($user, $pass);


		if ($result->contar == 1) {
			$datos_user = $this->Model_inicio->trae_user($user, $pass);
			$session = array(
				'ID' => $datos_user->id,
				'NOMBRE' => $datos_user->nombre,
				'USER' => $datos_user->user,
				'CONTRASENA' => $datos_user->contrasena,
				'is_logged_in' => TRUE,
			);
			$this->session->set_userdata($session);

			if ($datos_user->tipo == 'Cliente') {
				if ($this->session->userdata('is_logged_in')) {
					redirect(base_url() . "Home?Id=$datos_user->id");
				}
			}
			if ($datos_user->tipo == 'Admin') {
				if ($this->session->userdata('is_logged_in')) {
					redirect(base_url() . "Home?Id=$datos_user->id");
				}
			}
		} else {
			//en caso contrario mostramos el error de usuario o contraseña invalido

		}
	}
	public function session_dest()
	{
		$session = array(
			'logueado' => FALSE
		);
		$this->session->set_userdata($session);
		$this->session->sess_destroy();
		redirect('Landing');
	}
}
