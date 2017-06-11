<?php 
require_once('conexion.php');

borrarUsuario($_GET['id']);
function borrarUsuario($id)
{
	$conexion=new Conexion();
	$conexion=$conexion->conectarConBaseDatos();
	$statement=$conexion->prepare("DELETE FROM infoPersonasEstados WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
	header('location:../index.php');
}

 ?>