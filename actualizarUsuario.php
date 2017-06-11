<?php 
require_once('modelo/read.php');
$infoPersona=obtenerUsuario($_GET['id']);
require_once('modelo/getEstados.php');
$arregloEstados=obtenerEstados();
//var_dump($infoPersona);
//var_dump($arregloEstados);
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
			<select name="estado" id="estado">
				<?php foreach ($arregloEstados as $arreglo ):?>
					<option <?php if ($infoPersona['estado']==$arreglo['estado']):?> selected <?php endif;?> >
						 <?=$arreglo['estado']?> 	
					</option>
				<?php endforeach?>
			</select>
			<input type="hidden" name="id" value="<?=$infoPersona['id']?>">
			<input type="submit" value="Actualizar datos">
		</form>
		<a href="index.php">Volver al listado</a>
	</body>
</html>