<?php
// Establecer conexión
require 'conexion.php';
// nombre de la tabla, de la BD
$sql = "SELECT * FROM pacientes";
// ORDER BY nombre; (opcional)

// Al ejecutar, el resultado se guarda en resultado 
$resultado = $mysqli->query($sql);
?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Hospital La Campiña</title>

	<script>
		// DataTables

		// en mytable poner tabla que es la id

		$(document).ready(function() {
			$('#tabla').DataTable();
		});
	</script>


</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Pacientes</h1>
		</div>
		<br>

		<div class="row">
			<!-- Registrar -->
			<a href="registrar.php" class="btn btn-primary">Registrar</a>
		</div>
		<br>
		<br>

		<table id="tabla" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nombre</th>
                    <th>Apellido</th>
					<th>DNI</th>
					<th>Teléfono</th>
					
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					// echo "<td>$fila[id]</td>";
					echo "<td>$fila[nombre]</td>";
                    echo "<td>$fila[apellido]</td>";
					echo "<td>$fila[dni]</td>";
					echo "<td>$fila[telefono]</td>";
					
				 ?>
				 	
				 	<td><a href="editar.php?id_paciente=<?php echo $fila['id_paciente']; ?>" class="btn btn-warning">Editar</a></td>
				 	<td><a href="eliminar.php?dni=<?php echo $fila['dni']; ?>" class="btn btn-danger">Eliminar</a></td>
				<?php
					echo "</tr>";
				}
				?>
			</tbody>
		</table>

	</div>

</body>

</html>