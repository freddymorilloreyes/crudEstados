<?php
require_once('modelo/read.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<h2>Listado de Usuarios</h2>
	<div class="aLaDerecha"><a href="insertarUsuario.html">Crear Usuario</a></div>
	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Estado</th>
			<th>Telefono</th>
			<th>Acciones</th>
		</tr>
	<?php foreach ($arreglo as $infoPersonas):?>
		<tr>
			<td><?=$infoPersonas['nombre']; ?></td>
			<td><?=$infoPersonas['apellido']; ?></td>
			<td><?=$infoPersonas['estado']; ?></td>
			<td><?=$infoPersonas['telefono']; ?></td>

			<td><a href="actualizarUsuario.php?id=<?=$infoPersonas['id']?>">Editar</a> <a href="modelo/delete.php?id=<?=$infoPersonas['id']?>" class="rojo">Eliminar</a></td>
		</tr>
	<?php endforeach ?>
	</table>
</body>
</html>