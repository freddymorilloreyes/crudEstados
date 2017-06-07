<?php 

class Conexion 
{
	private $host="localhost";
	private $usuario="root";
	private $baseDeDatos="crud3";
	private $contrasenia="abdc1234";
	public function conectarConBaseDatos()
	{
		$Conexion= new PDO("mysql:host=$this->host;dbname=$this->baseDeDatos", $this->usuario, $this->contrasenia, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		return $Conexion;
	}
}
$conexion=new Conexion();
$conexion=$conexion->conectarConBaseDatos();

?>