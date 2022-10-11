<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inicio extends CI_Model {

	function __construct()
	{
		parent::__construct();
		// $this->load->model('model_registro');

	}
    function registro($insertar)
	{
		$this->db->insert('usuarios', $insertar);
		return $this->db->insert_id();
	}

    public function consultaUser($user, $contra)
	{
  
	  $sql = "SELECT COUNT(*) AS contar
	FROM usuarios WHERE user= ?  AND
	contrasena = ? ;";

	  //$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
  
	  //$this->db->query($sql, array(3, 'live', 'Rick'));
	  $query = $this->db->query($sql, array($user, $contra));
  
	  return $query->row();
	}

    public function trae_user($user = null, $pass = null)
    {
  
      $sql = "SELECT * FROM usuarios
    WHERE  user=? AND contrasena= ?;";
  
      $query = $this->db->query($sql, array($user, $pass));
  
      return $query->row();
    }
    public function cargar_datos($id)
    {
        $sql = "SELECT * from usuarios  WHERE id=?;";
		$query = $this->db->query($sql,[$id] );
        return $query->row();
    }
}
