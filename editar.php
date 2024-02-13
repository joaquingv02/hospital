<?php
	//Establezco conexión
	require 'conexion.php';

	// Aquí debemos poner el ID
	$id = $_GET['id'];

	//Preparo la sentencia SQL
	$sql = "SELECT * FROM hospital WHERE id=$id";

	//Ejecuto la sentencia y guardo el resultado en una variable
	$resultado = $mysqli->query($sql);

	//Guardamos el registro obtenido en la variable $fila
	// A diferencia de la consulta que se hace en el index.php, en esta solo se debería obtener un único registro.
	// Guárdalo en una variable haciendo uso de fetch_assoc. No hará falta un bucle puesto que es solo un registro.
	$fila = $resultado->fetch_assoc();
?>

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
		<div class="container">
			<div class="row">
				<h1>Pacientes</h1>
			</div>

			<!-- DIRIGIR A EDITAR 2 -->
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="editar2.php" id="registro" name="registro" autocomplete="off" method="post">
						<!-- Incluir el id en algún div de estos-->
						<div class="form-group">

							<!-- <label> Nombre: <input class="form-control"> </label> NO FUNCIONA CON BOOTSTRAP -->

							<!-- Nombre  -->
							<label for="nombre">Nombre</label>
							<!-- Debemos recoger los valores recogidos o guardados con php y su variable -->
							<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" maxlength="50" required value="<?php echo $fila['nombre'] ?>"></p>
						</div>

						<div class="form-group">
							<!-- Apellido -->
							<label for="apellido">Apellido</label>
							<input type="text" name="apellido" id="apellido" class="form-control" maxlength="50" required value="<?php echo $fila['apellido'] ?>"></p>
						</div>

						<div class="form-group">
							<!-- DNI -->
							<label for="dni">DNI</label>
							<input type="text" name="dni" id="dni" class="form-control" maxlength="50" required value="<?php echo $fila['dni'] ?>"></p>
						</div>

						<div class="form-group">
							<!-- Teléfono -->
							<label for="telefono">Teléfono</label>
							<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Introduce el teléfono" maxlength="50" required value="<?php echo $fila['telefono'] ?>"></p>
						</div>


						<div class="form-group">
							<!-- Editar -->
							<input type="submit" value="Editar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>