<?php 
require_once("../Libraries/conexion.php");

class UsuarioModel
{
	private $conexion;
	function __construct()
	{
		$this->conexion = new Conexion();
		$this->conexion = $this->conexion->conect();
	}

	public function getUsuarios(){
		$mysql = $this->conexion->query("SELECT nombre, apellido, telefono, email WHERE
			status != 0");
		$mysql_result = $mysql->fetch_fields();
		return $mysql_result;
	}


}


 ?>