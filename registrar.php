<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="pacientes.css">
		<title>Hospital La Campiña </title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Pacientes</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<!-- DIRIGIR A REGISTRAR 2 -->
					<form action="registrar2.php" id="registro" name="registro" autocomplete="off" method="post">						
						<div class="form-group">
							<!-- Nombre -->
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" required>
						</div>
                        <div class="form-group">
							<!-- Apellido -->
							<label for="nombre">Apellido</label>
							<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Introduce el nombre" required>
						</div>
						
                        <div class="form-group">
							<!-- DNI -->
							<label for="dni">DNI</label>
							<input type="text" name="dni" id="dni" class="form-control" required>
						</div>
						
                        <div class="form-group">
							<!-- Teléfono -->
							<label for="telefono">Teléfono</label>
							<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Introduce el teléfono" required>
						</div>
						
						
					

						<div class="form-group">
							<!-- Registrar -->
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>	