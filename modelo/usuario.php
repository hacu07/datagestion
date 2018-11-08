<?php 

/**
 * Representa la tabla Usuarios 
 */
class Usuario 
{
	private $id;
	private $nombre;
	private $correo;
	private $contrasenia;
	private $salt;
	private $direccion;
	private $celular;
	private $estadohabil;
	private $rol;

	function __construct()
	{
		
	}

	/*Metodos para asignar los valores a las variables globales*/
	public function setId($vId){
		$this->id = $vId;
	}

	public function setNombre($vNombre){
		$this->nombre = $vNombre;
	}

	public function setCorreo($vCorreo){
		$this->correo = $vCorreo;
	}

	public function setContrasenia($vContrasenia){
		$this->contrasenia = $vContrasenia;
	}

	public function setSalt($vSalt){
		$this->salt = $vSalt;
	}

	public function setDireccion($vDireccion){
		$this->direccion = $vDireccion;
	}

	public function setCelular($vCelular){
		$this->celular = $vCelular;
	}

	public function setEstadoHabil($vEstadoHabil){
		$this->estadohabil = $vEstadoHabil;
	}

	public function setRol($vRol){
		$this->rol = $vRol;
	}

	/*Metodos para obtener los valores de cada variable*/
	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function getContrasenia(){
		return $this->contrasenia;
	}

	public function getSalt(){
		return $this->Salt;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function getEstadoHabil(){
		return $this->estadohabil;
	}

	public function getRol(){
		return $this->rol;
	}
}

?>