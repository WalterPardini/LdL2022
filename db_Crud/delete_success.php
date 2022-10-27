<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Medoo</title>

</head>

<body>

<?php

//Incluimos el archivo config para trabajar con la base de datos
require_once 'config.php';

//Verificamos que las variables no esten vacias
$id = isset($_POST['temp_IdDelete'])? $_POST['temp_IdDelete']: '';

//Realizamos el delete del producto

$data = $database->delete("clientes", [
	"AND" => [
		"id_cliente" => $id,
	]
]);


//Entregamos una respuesta dependiendo si se genero algun error o no

if(empty($data)){

    echo "<h3>El cliente no se pudo eliminar</h3>";
}else{

    echo "<h3>El cliente fue eliminado</h3>";
}


?>

	<form method="get" action="index.php">
		<button>Volver</button>
	</form>

</body>

</html>