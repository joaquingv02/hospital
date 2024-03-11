<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="pacientes.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			require 'conexion.php';		
			$dni = $_GET['dni'];
			$sql = "DELETE FROM pacientes WHERE dni='$dni'";
			$resultado = $mysqli->query($sql);
	
			if($resultado > 0){
				echo "<div class='alert alert-info' role='alert'> Se ha borrado correctamente.</div>";
				//header("location:index.php");
			} else {
				echo "<div class='alert alert-danger' role='alert'>Hubo un error y no se ha podido borrar correctamente.</div>";
	
			}
			echo "<p><a href='index.html'><button type='button' class='btn btn-success'>Volver</button></a></p>";	
			
			
		?>

	</body>
</html>