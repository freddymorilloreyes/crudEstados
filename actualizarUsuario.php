<?php 
require_once('modelo/read.php');

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Crear Usuario</title>
</head>
<body>
<h2>Actualizar Usuario</h2>

	<form action="modelo/update.php" method="post">
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre" value="<?=$infoPersona['nombre']?>">
	<label for="apellido">Apellido:</label>
	<input type="text" name="apellido" id="apellido" required placeholder="Ingrese el apellido" value="<?=$infoPersona['apellido']?>">
	<label for="telefono">Telefono</label>
	<input type="text" name="telefono" id="telefono" required placeholder="Ingrese el telefono" value="<?=$infoPersona['telefono']?>">
	<label for="estado">Estados:</label>
	<select name="estado" id="estado" >
		<option>Amazonas</option>
		<option>Anzoátegui</option>
		<option>Apure</option>
		<option>Aragua</option>
		<option>Barinas</option>
		<option>Bolivar</option>
		<option>Carabobo</option>
		<option>Cojedes</option>
		<option>Delta Amacuro</option>
		<option>Distrito Capiltal</option>
		<option>Falcón</option>
		<option>Guarico</option>
		<option>Lara</option>
		<option>Mérida</option>
		<option>Miranda</option>
		<option>Monagas</option>
		<option>Nueva Esparta</option>
		<option>Portuguesa</option>
		<option>Sucre</option>
		<option>Táchira</option>
		<option>Trujillo</option>
		<option>Vargas</option>
		<option>Yaracuy</option>
		<option>Zulia</option>
	</select>
	<input type="hidden" name="id" value="<?=$infoPersona['id']?>">
	<input type="submit" value="Actualizar datos">
	</form>
<a href="mostrarUsuarios.php">Volver al listado</a>
</body>
</html>