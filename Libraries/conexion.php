<?php 

require_once("../Config/config.php");

class Conexion
{
	
	public static function conect(){

		$mysql = new mysqli(HOST, USER, PASSWORD, DATABASE);
		$mysql->set_charset(CHARSET);

		if(mysqli_connect_errno()){
			echo "Error en la Conexión".mysqli_error();
		}else{
		 	//echo "Conexion Exitosa";
		}
		return $mysql;
	}
}


//print_r(Conexion::conect());


 ?>