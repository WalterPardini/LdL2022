<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Medoo</title>

</head>

<body>
	
	<!-- generamos nuestra consulta antes de eliminar la fila-->
	
	<div class="contenedor-principal">
	
	<form class="form-horizontal" id="form_delete" method="POST" action="delete_success.php">
		<!-- tenemos nuestro id de eliminacion osulto -->
		<?php echo "<input type='hidden' name='temp_IdDelete' value='".$_POST["tempIdDelete"]."'/>" ?>
		<h3>Realmente deseas eliminar este cliente?</h3>
		<button type="submit">Eliminar</button>
	</form>
	
	</div>
	
</body>

</html>