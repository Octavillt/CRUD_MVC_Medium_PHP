<?php 
require_once("../Models/UsuarioModel.php");

$opcion = $_REQUEST['op'];

if ($opcion == "listausuarios"){
	echo "lista de usuarios";
}



 ?>