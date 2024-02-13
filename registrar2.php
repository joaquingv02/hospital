<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Hospital La Campiña</title>
</head>

<body>
	<?php
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	

	// Establecer conexión
	require 'conexion.php';

	// Sentencia SQL, para registrar los datos
	$sql = "INSERT INTO hospital (nombre,apellido,dni,telefono) VALUES ('$nombre','$apellido','$dni'$telefono')";

	// Ejecuto la sentencia y guardo el resultado
	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
	?>
		<br><p class="alert alert-primary">REGISTRO AGREGADO</p>
	<?php
	} else {
	?>
		<br><p class="alert alert-danger">REGISTRO NO AGREGADO</p>
	<?php
	}
	?>
	<br><p><a href="index.php" class="btn btn-primary">Regresar</a></p>

</body>

</html>