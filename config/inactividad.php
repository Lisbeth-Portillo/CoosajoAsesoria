<?php

/**
 *Se comprueba si esta definida la sesión tiempo
 */

if (isset($_SESSION['tiempo'])) {

	/**
	 * Tiempo en segundos validos para la inactividad
	 * 2 minutos / 120 segundos
	 */

	$inactivo = 20;

	/**
	 * Se calcula el tiempo de vida inactivo de la sesión
	 */

	$vida_session = time() - $_SESSION['tiempo'];

	/**
	 * Se compara si el tiempo de inactividad se cumple y si es así se cierra, y se destruye la sesión
	 */

	if ($vida_session > $inactivo) {
		/**
		 * Se remueve y se destruye la sesión 
		 * y se redirije al login
		 */
		session_unset();

		session_destroy();

		header("Location: ../../");

		exit();
	}
}
$_SESSION['tiempo'] = time();
