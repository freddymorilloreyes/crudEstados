<?php 
require_once('conexion.php');

//esta es para actualizar un usuario
	function obtenerUsuario($id)
	{	
		$conexion=new Conexion();
		$conexion=$conexion->conectarConBaseDatos();
		$statement=$conexion->prepare("SELECT * FROM infoPersonasEstados WHERE id=:id ");
		$statement->bindparam(':id',$id);
		$statement->execute();
		$arreglo=$statement->fetch();
		return $arreglo;
	}	

//con esta obtengo todos los usuarios
	function getUsuarios()
	{
		$conexion=new Conexion();
		$conexion=$conexion->conectarConBaseDatos();
		$statement=$conexion->prepare("SELECT * FROM infoPersonasEstados ORDER BY nombre ASC");
		$statement->execute();
		$arreglo=$statement->fetchAll();
		return $arreglo;
	}

 ?>