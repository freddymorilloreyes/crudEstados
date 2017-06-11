<?php 
require_once('modelo/getEstados.php');
$arregloEstados=obtenerEstados();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Crear Usuario</title>
	</head>
	<body>
		<h2>Crear Usuario</h2>

		<form action="modelo/create.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido" id="apellido" required placeholder="Ingrese el apellido">
		<label for="telefono">Telefono</label>
		<input type="text" name="telefono" id="telefono" required placeholder="Ingrese el telefono">
		<label for="estado">Estados:</label>
		<select name="estado" id="estado" required placeholder=>
			<?php foreach ($arregloEstados as $arreglo ):?>
				<option>
					 <?=$arreglo['estado']?> 	
				</option>
			<?php endforeach?>
		</select>
		<input type="submit" value="Enviar datos">
		</form>
	<a href="index.php">Volver al listado</a>



	</body>
</html>