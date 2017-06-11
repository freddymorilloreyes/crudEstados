<?php 
require_once('conexion.php');
function obtenerEstados()
{
	$conexion=new Conexion();
	$conexion=$conexion->conectarConBaseDatos();
	$statement=$conexion->prepare("SELECT * FROM estados ORDER BY estado ASC");
	$statement->execute();
	$arreglo=$statement->fetchAll();
	return $arreglo;
}

?>