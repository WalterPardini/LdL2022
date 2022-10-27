<?php require_once('config.php'); ?>

<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Medoo</title>

</head>

<body>

	<div class="contenedor-principal">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>CUILCUIT</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Razon Social</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>

				<?php
				//Realizamos una consulta a la BD para traer los clientes
				$datas = $database->select("clientes", "*");

				?>

				<?php
				//Realizamos un foreach para generar los datos en nuestra tabla con boostrap
				foreach ($datas as $data) {
				?>

					<tr>
						<td><?php echo $data['id_cliente']; ?></td>
						<td><?php echo $data['CUILCUIT']; ?></td>
						<td><?php echo $data['nombre']; ?></td>
						<td><?php echo $data['apellido']; ?></td>
						<td><?php echo $data['telefono']; ?></td>
						<td><?php echo $data['razon_social']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<?php echo "<td><form action='edit_cliente.php' method='POST'><button href='edit_cliente.php' type='submit' name='tempId' id='tempId' value='" . $data['id_cliente'] . " data-toggle='modal'>Modificar cliente</button></form></td>"; ?>
						<?php echo "<td><form action='delete_cliente.php' method='POST'><button href='delete_cliente.php' type='submit' name='tempIdDelete' id='tempIdDelete' value='" . $data['id_cliente'] . " data-toggle='modal'>Eliminar</button></form></td>"; ?>
					</tr>
				<?php } ?>

			</tbody>

		</table>

	</div>

	<form method="POST" action="add_cliente.php">

		<div>
			<div>

				<div>
					<div>
						<h4>Crear Cliente</h4>
					</div>
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
						<button type="submit">Crear</button>
					</div>
				</div>

			</div>
		</div>

	</form>


</body>

</html>