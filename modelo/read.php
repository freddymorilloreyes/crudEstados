<?php 
require_once('conexion.php');

if (isset($_GET['id'])) {
//este es para actualizar un usuario
$statement=$conexion->prepare("SELECT * FROM infoPersonasEstados WHERE id=:id");
$statement->bindparam(':id',$_GET['id']);
$statement->execute();
$infoPersona=$statement->fetch();
	
}else{
//con este obtengo todos los usuarios
$statement=$conexion->prepare("SELECT * FROM infoPersonasEstados");
$statement->execute();
$arreglo=$statement->fetchAll();
}

 ?>