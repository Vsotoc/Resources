<?php
#Validar fecha
date_default_timezone_set('America/Costa_Rica');
$fechaLocal = date("Y/m/d H:i:s");
?>

<html>

<head>
	<title> Login </title>
	<meta http-equiv="Content Type" content="text/html; charset=utf-8">
</head>

<body>
	<form name="login" method="POST" action="">
		Nombre:
		<input name="nombre" type="text" value="" required />
		<br />
		Contraseña:
		<input name="contrasena" type="password" value="" required />
		<br />
		<input type="submit" name="ingresar" value="Ingresar" />

	</form>
</body>

</html>

<?php

if (!empty($_REQUEST['ingresar']) && !empty($_POST['nombre']) && !empty($_POST['contrasena'])) {
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	if ($nombre != 'admin' || $contrasena != 'admin') {
		echo "<script language='JavaScript'>alert('Usuario o contraseña incorrecto');</script>";
	} else {
		guardarLoginEnBitacora($nombre, $fechaLocal);
		header("Location: ./pages/Menu.php"); 
	}
}

function guardarLoginEnBitacora($nombre, $fechaLocal)
{
	$archivo = fopen("registroLogin.txt", "a");
	fwrite($archivo, $nombre . " " . $fechaLocal . "\n");
	fclose($archivo);
}
?>