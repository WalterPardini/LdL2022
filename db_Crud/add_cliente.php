
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
$CUILCUIT = isset($_POST['CUILCUIT'])? $_POST['CUILCUIT']: '';
$nombre = isset($_POST['nombre'])? $_POST['nombre']: '';
$apellido = isset($_POST['apellido'])? $_POST['apellido']: '';
$telefono = isset($_POST['telefono'])? $_POST['telefono']: '';
$razon_social = isset($_POST['razon_social'])? $_POST['razon_social']: '';
$email = isset($_POST['email'])? $_POST['email']: '';



//Entregamos una respuesta dependiendo si se genero algun error o no

if(empty($CUILCUIT) || empty($nombre) || empty($apellido) || empty($telefono) || empty($razon_social) || empty($email)){

    echo "<h3>No se puedo ingresar el cliente</h3>";
	
}else{
	
	$data = $database->insert("clientes",[
        "CUILCUIT" => $CUILCUIT,
        "nombre" => $nombre,
        "apellido" => $apellido, 
        "telefono" => $telefono,
        "razon_social" => $razon_social,
        "email" => $email
    ]);
	
    echo "<h3>El cliente se ingreso correctamente</h3>";
}

?>

	<form method="get" action="index.php">
		<button>Volver</button>
	</form>
    
</body>

</html>
