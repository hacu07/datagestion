<?php 

session_start();

require_once("controlador/controlador.php");
require_once("modelo/conexion.php");
require_once("modelo/gestor.php");
/*Clases VO*/

$controlador = new Controlador();

//Verifica si se ha definido antes la variable SESSION - si hay una sesion iniciada
if(isset($_SESSION["usuario"]) && isset($_SESSION["id"]) && isset($_SESSION["rol"]) ) {
	switch ($_SESSION["rol"]) {//Segun el Rol del usuario indica que caso y accion seguir
		case 2://Rol Administrador
				if(isset($_GET["accion"])) {//Si hay un parametro 'accion'
					switch ($_GET["accion"]) {//segun lo enviado por el parametro accion
						case 'logout':
							$controlador->logout();
							break;

						default://Si valor de la 'accion' obtenido no esta entre ninguno de los anteriores lo redireccion al 'inicioadmin'
							$controlador->verPagina("vista/html/inicioadmin.php");
							break;
					}
				}else{//Si se ha iniciado sesion y el parametro accion no se encuentra entre las opciones anteriores
					//Lo envia a la interfaz 'inicioAdmin'
					$controlador->verPagina("vista/html/inicioadmin.php");
				}
			break;
		case 3://Rol Empresa
				if(isset($_GET["accion"])) {//Si hay un parametro 'accion'
					switch ($_GET["accion"]) {//segun lo enviado por el parametro accion
						case 'logout':
							$controlador->logout();
							break;

						default://Si valor de la 'accion' obtenido no esta entre ninguno de los anteriores lo redireccion al 'inicioadmin'
							$controlador->verPagina("vista/html/inicio.php");
							break;
					}
				}else{//Si se ha iniciado sesion y el parametro accion no se encuentra entre las opciones anteriores
					//Lo envia a la interfaz 'inicioAdmin'
					$controlador->verPagina("vista/html/inicio.php");
				}
			break;
	}
}
else{//Si no se ha iniciado sesion
	if (isset($_GET["accion"])) {//Si se ha enviado un valor por accion usando el metodo GET
		switch ($_GET["accion"]) {
			/*case '':
				
				break;*/
			
			default:
				$controlador->verPagina("vista/html/login.php");
				break;
		}
	}
	//Si no se ha enviado nada como parametro, le muestra la interfaz de login
	else{
		$controlador->verPagina("vista/html/login.php");
	}
}


?>