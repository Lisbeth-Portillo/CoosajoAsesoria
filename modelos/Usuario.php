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
		$sql = "INSERT INTO usuario (Usuario,Pass,Estado,Correo) VALUES ('$Usuario','$Pass','$Estado','$Correo'$Rol_idRol')";
		//return ejecutarConsulta($sql);
		$idusuarionew = ejecutarConsulta_retornarID($sql);
		$num_elementos = 0;
		$sw = true;
		while ($num_elementos < count($permisos)) {
			//Obtencion de permisos del usuario
			$sql_detalle = "INSERT INTO permisosusuarios (Usuarios_idUsuarios,Permisos_idPermisos) VALUES('$idusuarionew','$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos = $num_elementos + 1;
		}
		return $sw;
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
	public function listarmarcados($idPermisosUsuarios)
	{
		$sql = "SELECT * FROM permisosusuarios WHERE Usuarios_idUsuarios='$idPermisosUsuarios'";
		return ejecutarConsulta($sql);
	}

	//Funcion que verifica el acceso al sistema del usuario
	public function verificar($usuarioo, $clavehash)
	{
		$sql = "SELECT idUsuarios,Usuario,Pass,Estado,Correo,Rol_idRol FROM usuarios WHERE Usuario='$usuarioo' AND Pass='$clavehash' AND Estado='0'";
		return ejecutarConsulta($sql);
	}
}
