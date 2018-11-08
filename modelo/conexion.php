<?php 

/**
 * Clase encargada de realizar la conexion a la base de datos usando la libreria PDO
 * Autor: Harold Alberto Cupitra Hernandez
 * Fecha: 08/11/2018
 */
class Conexion
{
	private static $dbhost = "localhost";
	private static $dbuser = "root";
	private static $dbpassword = "";
	protected $dbname = "dbs_datagestion";

	private $conn;

	public $resultado;//Obtiene de una busqueda sql realizada
	public $filas;//Obtiene las filas de una consulta realizada

	private function abrirConexion()
	{	//En caso de no realizar la conexion correctamente se captura la excepcion generada para no mostrar la informacion relacionada con la BD.
		try{
			$this->conn = new PDO("mysql:host=".self::$dbhost.";dbname=".$this->dbname."",self::$dbuser,self::$dbpassword);
		}catch(PDOException $e){
			/*print "¡Error!: " . $e->getMessage() . "<br/>";*/
			print "Error en la conexión a la BD";
    		die();
		}
	}

	private function cerrarConexion(){
		$this->conn = null;
	}

	//Toma el sql de consulta, lo ejecuta y asigna a las variables globales el resultado y filas obtenidas.
	public function buscarQuery($sql){
		$this->abrirConexion();
		$this->resultado = $this->conn->query($sql);
		$this->filas = $this->resultado->rowCount();
		$this->cerrarConexion();
	}

	//Devuelve el resultado de la consulta realizada
	public function getResultado()
	{
		return $this->resultado;
	}

	//Devuelve el numero de filas que contiene la respuesta a la consulta SQL realizada
	public function getFilas()
	{
		return $this->filas;
	}

	//Ejecuta sentencias SQL donde devuelve el numero de filas afectadas.
	public function ejecutarQuery()
	{
		$this->abrirConexion();
		$result = $this->conn->exec($sql);
		$this->cerrarConexion();
		return $result;
	}

}

?>