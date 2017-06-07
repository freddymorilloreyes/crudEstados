<?php 
require_once('conexion.php');
$statement=$conexion->prepare("UPDATE infoPersonasEstados SET nombre=:nombre, apellido=:apellido, estado=:estado, telefono=:telefono WHERE id=:id");
$statement->bindparam(':nombre',$_POST['nombre']);
$statement->bindparam(':apellido',$_POST['apellido']);
$statement->bindparam(':estado',$_POST['estado']);
$statement->bindparam(':telefono',$_POST['telefono']);
$statement->bindparam(':id',$_POST['id']);
$statement->execute();
//var_dump($statement);
//var_dump($_POST['nombre']);
//var_dump($_POST['apellido']);
//var_dump($_POST['estado']);
//var_dump($_POST['telefono']);
//var_dump($_POST['id']);
header('location:../mostrarUsuarios.php');

 ?>