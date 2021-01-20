<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Permiso{ 


	//implementamos nuestro constructor
public function __construct(){

}



//listar tareas del asesociado
public function listarTareas(){
	$sql="";
	return ejecutarConsulta($sql);
}

}

 ?>
