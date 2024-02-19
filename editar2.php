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
	// Obtenemos los datos, después actualizamos
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
    $telefono = $_POST['telefono'];	

	//Establecer conexión
	require 'conexion.php';

	//Sentencia SQL, UPDATE SET (para actualizar los registros, donde sea id)
	$sql = "UPDATE pacientes SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono' WHERE dni='$dni'";

	//Ejecutar sentencia y se guarda el resultado en resultado
	$resultado = $mysqli->query($sql);

	
	// if($resultado>0){
	// 	echo "<br><p class='alert alert-primary'>REGISTRO MODIFICADO</p>";
		
	// } else {
	// 	echo "<br><p class='alert alert-danger'>ERROR AL MODIFICAR REGISTRO</p>";
	// }
	
	// echo "<br><a href='index.php' class='btn btn-primary'>Regresar</a>";
	

	if ($resultado > 0) {
	?>
		<br><p class="alert alert-primary">REGISTRO MODIFICADO</p>
	<?php
	} else {
	?>
        <br>
		<br><p class="alert alert-danger">REGISTRO NO MODIFICADO</p>
        <br>
	<?php
	}
	?>
	<br><p><a href="index.php" class="btn btn-primary">Regresar</a></p>

</body>

</html>