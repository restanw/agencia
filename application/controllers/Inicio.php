<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
   function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}
	
	public function index()
	{
	/**	$traer['datos'] = $this ->Model->traer(); */
	$this->load->view('primero',/** $traer*/);
	}
	
}
