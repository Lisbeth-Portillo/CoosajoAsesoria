<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Permiso{ 


	//implementamos nuestro constructor
public function __construct(){

}



//listar 
public function listar(){
	$sql="SELECT * FROM escolaridad";
	return ejecutarConsulta($sql);
}
}

 ?>
