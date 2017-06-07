<?php 
require_once('conexion.php');

$statement=$conexion->prepare("DELETE FROM infoPersonasEstados WHERE id=:id");
$statement->bindparam(':id', $_GET['id']);
$statement->execute();
header('location:../mostrarUsuarios.php')

 ?>