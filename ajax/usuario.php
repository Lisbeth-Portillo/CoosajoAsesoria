<?php
session_start();
require_once "../modelos/Usuario.php";
$usuario = new Usuario();
//Verificacion de lo recibido 
$idUsuarios = isset($_POST["idUsuarios"]) ? limpiarCadena($_POST["idUsuarios"]) : "";
$Usuario = isset($_POST["Usuario"]) ? limpiarCadena($_POST["Usuario"]) : "";
$Pass = isset($_POST["Pass"]) ? limpiarCadena($_POST["Pass"]) : "";
$Estado = isset($_POST["Estado"]) ? limpiarCadena($_POST["Estado"]) : "";
$Correo = isset($_POST["Correo"]) ? limpiarCadena($_POST["Correo"]) : "";
$Rol_idRol = isset($_POST["Rol_idRol"]) ? limpiarCadena($_POST["Rol_idRol"]) : "";

switch ($_GET["op"]) {
	case 'registro':

		//Validacion del usuario y correo
		$vusuario = $usuario->verificarusuario($Usuario, $Correo);
		$fetchU = $vusuario->fetch_object();

		if ($fetchU->Usuario > 0) {
			echo '2';
		} else {
			$clavehash = hash("SHA256", $Pass);
			$estado = 0;
			$permisonAsoc = 7;
			$rol = 3;
			$respta = $usuario->insertar($Usuario, $clavehash, $estado, $Correo, $rol, $permisonAsoc);

			$id = $usuario->obtenerid($Usuario, $clavehash, $Correo);
			$idU = $id->fetch_object();

			$_SESSION['active'] = true;
			$_SESSION['idUsuarios'] = $idU->idUsuarios;
			$_SESSION['Usuario'] = $idU->Usuario;
			$_SESSION['Estado'] = $idU->Estado;
			$_SESSION['Correo'] = $idU->Correo;
			$_SESSION['Rol_idRol'] = $idU->Rol_idRol;

			$marcados = $usuario->listarmarcados($idU->idUsuarios);

			//declaramos el array para almacenar todos los permisos
			$valores = array();

			//almacenamos los permisos marcados en al array
			while ($per = $marcados->fetch_object()) {
				array_push($valores, $per->Permisos_idPermisos);
			}
			//Accesos del usuario
			//Acceso al módulo de Asesoria, edición de documentos e informes
			in_array(1, $valores) ? $_SESSION['Asesoria'] = 1 : $_SESSION['Asesoria'] = 0;
			//Acceso al módulo de Microcréditos, edición de documentos e informes
			in_array(2, $valores) ? $_SESSION['Microcreditos'] = 1 : $_SESSION['Microcreditos'] = 0;
			//Acceso al módulo de Formación, crear, editar, eliminar, informes
			in_array(3, $valores) ? $_SESSION['FormacionAse'] = 1 : $_SESSION['FormacionAse'] = 0;
			//Acceso al formulario de inscripción, datos del evento
			in_array(4, $valores) ? $_SESSION['FormacionAso'] = 1 : $_SESSION['FormacionAso'] = 0;
			//Impresión de documentos, eliminación de datos
			in_array(5, $valores) ? $_SESSION['Impresión'] = 1 : $_SESSION['Impresión'] = 0;
			//Acceso a usuarios, contraseñas, edición de metas.
			in_array(6, $valores) ? $_SESSION['Jefe'] = 1 : $_SESSION['Jefe'] = 0;
			//Acceso a la linea base, carta de compromiso, diagnostico
			in_array(7, $valores) ? $_SESSION['AsesoriaAso'] = 1 : $_SESSION['AsesoriaAso'] = 0;

			echo '1';
		}
		break;

	case 'guardaryeditar':

		//Hash SHA256 para la contraseña - algoritmo de encriptación 256 bits 
		$clavehash = hash("SHA256", $Pass);
		if (empty($idusuario)) {
			$rspta = $usuario->insertar($Usuario, $Pass, $Estado, $Correo, $Rol_idRol, $_POST['permiso']);
			echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar todos los datos del usuario";
		} else {
			$rspta = $usuario->editar($idUsuarios, $Usuario, $Pass, $Estado, $Correo, $Rol_idRol, $_POST['permiso']);
			echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
		}
		break;

	case 'desactivar':
		//Desactivacion de usuario
		$rspta = $usuario->desactivar($idUsuarios);
		echo $rspta ? "Datos desactivados correctamente" : "No se pudo desactivar los datos";
		break;

	case 'activar':
		//Activación de usuario
		$rspta = $usuario->activar($idUsuarios);
		echo $rspta ? "Datos activados correctamente" : "No se pudo activar los datos";
		break;

	case 'mostrar':
		//Mostrar usuario
		$rspta = $usuario->mostrar($idUsuarios);
		echo json_encode($rspta);
		break;

	case 'listar':
		//Listar usuarios
		$rspta = $usuario->listar();
		$data = array();

		//Falta
		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => ($reg->condicion) ? '<button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idusuario . ')"><i class="fa fa-pencil"></i></button>' . ' ' . '<button class="btn btn-danger btn-xs" onclick="desactivar(' . $reg->idusuario . ')"><i class="fa fa-close"></i></button>' : '<button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idusuario . ')"><i class="fa fa-pencil"></i></button>' . ' ' . '<button class="btn btn-primary btn-xs" onclick="activar(' . $reg->idusuario . ')"><i class="fa fa-check"></i></button>',
				"1" => $reg->nombre,
				"2" => $reg->tipo_documento,
				"3" => $reg->num_documento,
				"4" => $reg->telefono,
				"5" => $reg->email,
				"6" => $reg->login,
				"7" => "<img src='../files/usuarios/" . $reg->imagen . "' height='50px' width='50px'>",
				"8" => ($reg->condicion) ? '<span class="label bg-green">Activado</span>' : '<span class="label bg-red">Desactivado</span>'
			);
		}

		$results = array(
			"sEcho" => 1, //info para datatables
			"iTotalRecords" => count($data), //enviamos el total de registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total de registros a visualizar
			"aaData" => $data
		);
		echo json_encode($results);
		break;

	case 'permisos':
		//obtenemos toodos los permisos de la tabla permisos
		require_once "../modelos/Permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();
		//obtener permisos asigandos
		$id = $_GET['id'];
		$marcados = $usuario->listarmarcados($id);
		$valores = array();

		//almacenar permisos asigandos
		while ($per = $marcados->fetch_object()) {
			array_push($valores, $per->idpermiso);
		}
		//mostramos la lista de permisos
		while ($reg = $rspta->fetch_object()) {
			$sw = in_array($reg->idpermiso, $valores) ? 'checked' : '';
			echo '<li><input type="checkbox" ' . $sw . ' name="permiso[]" value="' . $reg->idpermiso . '">' . $reg->nombre . '</li>';
		}
		break;

	case 'verificar':
		//validar si el usuario tiene acceso al sistema
		$usuarioo = $_POST['UsuarioL'];
		$password = $_POST['PassL'];

		//Hash SHA256 en la contraseña
		$clavehash = hash("SHA256", $password);


		$rspta = $usuario->verificar($usuarioo, $clavehash);

		$fetch = $rspta->fetch_object();
		if (isset($fetch)) {
			# Declaramos la variables de sesion
			$_SESSION['idUsuarios'] = $fetch->idUsuarios;
			$_SESSION['Usuario'] = $fetch->Usuario;
			$_SESSION['Pass'] = $fetch->Pass;
			$_SESSION['Estado'] = $fetch->Estado;
			$_SESSION['Correo'] = $fetch->Correo;
			$_SESSION['Rol_idRol'] = $fetch->Rol_idRol;

			//Se obtienen los permisos del usuario
			$marcados = $usuario->listarmarcados($fetch->idUsuarios);

			//Array para almacenar todos los permisos
			$valores = array();

			//Almacenamiento de los permisos marcados en al array
			while ($per = $marcados->fetch_object()) {
				array_push($valores, $per->Permisos_idPermisos);
			}

			//Accesos del usuario
			//Acceso al módulo de Asesoria, edición de documentos e informes
			in_array(1, $valores) ? $_SESSION['Asesoria'] = 1 : $_SESSION['Asesoria'] = 0;
			//Acceso al módulo de Microcréditos, edición de documentos e informes
			in_array(2, $valores) ? $_SESSION['Microcreditos'] = 1 : $_SESSION['Microcreditos'] = 0;
			//Acceso al módulo de Formación, crear, editar, eliminar, informes
			in_array(3, $valores) ? $_SESSION['FormacionAse'] = 1 : $_SESSION['FormacionAse'] = 0;
			//Acceso al formulario de inscripción, datos del evento
			in_array(4, $valores) ? $_SESSION['FormacionAso'] = 1 : $_SESSION['FormacionAso'] = 0;
			//Impresión de documentos, eliminación de datos
			in_array(5, $valores) ? $_SESSION['Impresión'] = 1 : $_SESSION['Impresión'] = 0;
			//Acceso a usuarios, contraseñas, edición de metas.
			in_array(6, $valores) ? $_SESSION['Jefe'] = 1 : $_SESSION['Jefe'] = 0;
			//Acceso a la linea base, carta de compromiso, diagnostico
			in_array(7, $valores) ? $_SESSION['AsesoriaAso'] = 1 : $_SESSION['AsesoriaAso'] = 0;
			echo $_SESSION['Rol_idRol'];
		} else {
			echo '4';
		}

		break;
	case 'salir':

		//Limpiamos la variables de la secion
		session_unset();

		//Se destruye la sesion
		session_destroy();

		//Redireción a la página principal
		header("Location: ../index.php");
		break;
}
