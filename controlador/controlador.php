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

	public function registrar($nombre,$correo,$celular,$direccion){
		$objUsuario = new Usuario();
		$contrasenia = $this->generarContrasenia();//genera Contraseña aleatoria
		$hash = $this->hashFunction($contrasenia);//genera salt y password encriptada
		//asignar datos al objeto usuario
		$objUsuario->setNombre($nombre);
		$objUsuario->setCorreo($correo);
		$objUsuario->setContrasenia($hash["encrypted"]);
		$objUsuario->setSalt($hash["salt"]);
		$objUsuario->setDireccion($direccion);
		$objUsuario->setCelular($celular);
		

		$gestor = new Gestor();
		//variable que obtiene la respuesta de la ejecucion de la sentencia

		//Si fue exitosa la insercion de los datos del usuario, se envia la contraseña generada al correo del usuario
		//Enviar Correo con contraseña
	}

	/*Obtiene como parametro la contraseña obtenida de la UI y retorna un arreglo con el salt y la contraseña encriptada*/
	public function hashFunction($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    //Returna un numero aleatorio de 6 digitos
    public function generarContrasenia(){
    	return random_int(111111, 999999);
    }


}

?>