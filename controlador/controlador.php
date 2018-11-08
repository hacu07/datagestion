<?php 

/**
 * Clase intermediaria entre la VISTA y el MODELO
 * Autor: Harold Alberto Cupitra Hernandez
 * Fecha: 08/11/2018
 */
class Controlador {
	
	//Redirecciona a la pagina enviada por parametro
	public function verPagina($url)
	{
		require_once($url);
	}

	//Cierra la sesion actual - destruye las variables $_SESSION
	public function logout()
	{
		if (isset($_SESSION["usuario"]) && isset($_SESSION["id"]) && isset($_SESSION["rol"])) {
			unset($_SESSION["usuario"]);
			unset($_SESSION["id"]);
			unset($_SESSION["rol"]);
		}
		session_destroy();
		header("Location:index.php");
	}
}

?>