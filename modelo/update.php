<?php 
require_once('conexion.php');

actualizarUsuario($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['estado'],$_POST['telefono']);
function actualizarUsuario($id, $nombre, $apellido, $estado, $telefono)
{
	$conexion=new Conexion();
	$conexion=$conexion->conectarConBaseDatos();
	$statement=$conexion->prepare("UPDATE infoPersonasEstados SET nombre=:nombre, apellido=:apellido, estado=:estado, telefono=:telefono WHERE id=:id");
	$statement->bindparam(':id',$id);
	$statement->bindparam(':nombre',$nombre);
	$statement->bindparam(':apellido',$apellido);
	$statement->bindparam(':estado',$estado);
	$statement->bindparam(':telefono',$telefono);
	$statement->execute();
	header('location:../index.php');
}

 ?>