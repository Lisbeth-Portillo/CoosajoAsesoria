<?php
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Usuario
{


	//implementamos nuestro constructor
	public function __construct()
	{
	}

	//Metodo insertar usuario
	public function insertar($Usuario, $Pass, $Estado, $Correo, $Rol_idRol, $permisos)
	{
		$sql = "INSERT INTO usuarios (Usuario,Pass,Estado,Correo,Rol_idRol) VALUES ('$Usuario','$Pass','$Estado','$Correo','$Rol_idRol')";

		//Obtencion del id almacenado
		$idusuarionew = ejecutarConsulta_retornarID($sql);
		$num_elementos = 0;
		$sw = true;
		//Verifica y guarda los permisos del usuario
		if(is_array($permisos)){
		while ($num_elementos < count($permisos)) {
			//Obtencion de permisos del usuario
			$sql_detalle = "INSERT INTO permisosusuarios (Usuarios_idUsuarios,Permisos_idPermisos) VALUES('$idusuarionew','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos = $num_elementos + 1;
		}
		return $sw;
	}else{
		$sql_detalle = "INSERT INTO permisosusuarios (Usuarios_idUsuarios,Permisos_idPermisos) VALUES('$idusuarionew','$permisos')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			return $sw;
	}
	}

	//Edicion de usuario
	public function editar($idUsuarios, $Usuario, $Pass, $Estado, $Correo, $Rol_idRol, $permisos)
	{
		$sql = "UPDATE usuarios SET Usuario='$Usuario',Pass='$Pass',Estado='$Estado',Correo='$Correo',Rol_idRol='$Rol_idRol'' 
	WHERE idUsuarios='$idUsuarios'";
		ejecutarConsulta($sql);

		//Eliminar permisos asignados
		$sqldel = "DELETE FROM permisosusuarios WHERE Usuarios_idUsuarios='$idUsuarios'";
		ejecutarConsulta($sqldel);

		$num_elementos = 0;
		$sw = true;
		while ($num_elementos < count($permisos)) {
			//Insersion de permisos del usuario
			$sql_detalle = "INSERT INTO permisosusuarios (Usuarios_idUsuarios,Permisos_idPermisos) VALUES('$idUsuarios','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos = $num_elementos + 1;
		}
		return $sw;
	}
	//Desactivacion del usuario 
	public function desactivar($idUsuarios)
	{
		$sql = "UPDATE usuarios SET Estado='1' WHERE idUsuarios='$idUsuarios'";
		return ejecutarConsulta($sql);
	}
	//Activacion del usuario
	public function activar($idUsuarios)
	{
		$sql = "UPDATE usuarios SET Estado='0' WHERE idUsuarios='$idUsuarios'";
		return ejecutarConsulta($sql);
	}

	//Metodo para mostrar un usuario
	public function mostrar($idUsuarios)
	{
		$sql = "SELECT * FROM usuarios WHERE idUsuarios='$idUsuarios'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Lista de los usuarios por rol
	public function rol($rol)
	{
		$sql = "SELECT * FROM usuarios WHERE  Rol_idRol='$rol' AND Estado='0'";
		return ejecutarConsultaSimpleFila($sql);
	}



	//Listar usuarios
	public function listar()
	{
		$sql = "SELECT * FROM usuarios";
		return ejecutarConsulta($sql);
	}

	//Metodo para listar permisos de los usuarios
	public function listarmarcados($id)
	{
		$sql = "SELECT Permisos_idPermisos FROM permisosusuarios WHERE Usuarios_idUsuarios='$id'";
		return ejecutarConsulta($sql);
	}

	//Funcion que verifica el acceso al sistema del usuario
	public function verificar($Usuario, $Pass)
	{
		$sql = "SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Pass='$Pass' AND Estado='0'";
		return ejecutarConsulta($sql);
	}

	//Funcion que verifica el acceso al sistema del usuario
	public function verificarcorreo($Correo)
	{
		$sql = "SELECT Correo FROM usuarios WHERE Correo='$Correo' LIMIT 1";
		return ejecutarConsulta($sql);
	}

	//Funcion que verifica el acceso al sistema del usuario
	public function verificarusuario($Usuario,$Correo)
	{
		$sql = "SELECT COUNT(idUsuarios) AS Usuario FROM usuarios WHERE Usuario='$Usuario' OR Correo = '$Correo'";
		return ejecutarConsulta($sql);
	}
	

	//Funcion para obtener id del usuario registrado
	public function obtenerid($Usuario, $Pass, $Correo)
	{
		$sql = "SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Pass='$Pass' AND Estado='0' AND Correo='$Correo'";
		return ejecutarConsulta($sql);
	}

}
