<?php 
require_once('conexion.php');
//no creo que tenga mucho sentido llamar a la funcion en la misma pagina donde la cree ps asi parece mejor dcejarlo sin la función
crearUsuario($_POST['nombre'],$_POST['apellido'],$_POST['estado'],$_POST['telefono']);

function crearUsuario($nombre, $apellido, $estado, $telefono)
{
	$conexion=new Conexion();
	$conexion=$conexion->conectarConBaseDatos();
	$statement=$conexion->prepare("INSERT INTO infoPersonasEstados (nombre, apellido, estado, telefono) VALUES (:v1,:v2,:v3,:v4)");
	$statement->bindparam(':v1',$nombre);
	$statement->bindparam(':v2',$apellido);
	$statement->bindparam(':v3',$estado);
	$statement->bindparam(':v4',$telefono);
	$statement->execute();
	header('location:../index.php');
}

 ?>