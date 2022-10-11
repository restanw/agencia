<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{
		$this->load->view('view',
		);
	}
	public function primero()
	{
		$this->load->view('primero');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function registrar()
	{
		$this->load->view('registrarse');
	}
	public function desierto()
	{
		$this->load->view('tatacoa');
	}
}
