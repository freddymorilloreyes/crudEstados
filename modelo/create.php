<?php 

require_once('conexion.php');
$statement=$conexion->prepare("INSERT INTO infoPersonasEstados (nombre, apellido, estado, telefono) VALUES (:v1,:v2,:v3,:v4)");
$statement->bindparam(':v1',$_POST['nombre']);
$statement->bindparam(':v2',$_POST['apellido']);
$statement->bindparam(':v3',$_POST['estado']);
$statement->bindparam(':v4',$_POST['telefono']);
$statement->execute();

header('location:../mostrarUsuarios.php');
 ?>