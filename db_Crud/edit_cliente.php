<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Crud Medoo</title>

</head>

<body>

	<!-- generamos nuestra vista para editar-->

	<div class="contenedor-principal">

		<form method="POST" action="edit_success.php">
			<!-- aca tenemos nuestro id oculto -->
			<?php echo "<input type='hidden' name='temp_Id' value='" . $_POST["tempId"] . "'/>" ?>
			<div>

			<h3>Edicion</h3>

				<div>

					<div>
						<label>CUIL/CUIT:</label>
						<input type="text" name="CUILCUIT" required="required">
					</div>
					<div>
						<label>Nombre:</label>
						<input type="text" name="nombre" required="required">
					</div>
					<div>
						<label>Apellido:</label>
						<input type="text" name="apellido" required="required">
					</div>
					<div>
						<label>Telefono:</label>
						<input type="text" name="telefono" required="required">
					</div>
					<div>
						<label>Razon_social:</label>
						<input type="text" name="razon_social" required="required">
					</div>
					<div>
						<label>Email:</label>
						<input type="text" name="email" required="required">
					</div>


					<div>
						<button>Modificar</button>
					</div>

		</form>

	</div>


</body>

</html>

</html>