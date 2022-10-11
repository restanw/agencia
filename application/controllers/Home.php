<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Model_inicio');
		$this->load->library('session');
	}
	public function index()
	{
        $id = $this->input->get('Id');
        $result['perfil'] = $this->Model_inicio->cargar_datos($id);
        $this->load->view('header');
		$this->load->view('home',$result);
        $this->load->view('footer');
	}
}
