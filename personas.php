<html>

<head>
	<title> Info Personas </title>
	<meta utf-8>

</head>

<body>
	<h3> Personas </h3>
	<?php

	/*if (!empty($_REQUEST['aceptar'])) {
		echo
		"Nombre: " . $_REQUEST['nombre'] . "<br/>"
			. "Cedula: " . $_REQUEST['cedula'] . "<br/>"
			. "Fecha: " . $_REQUEST['fecha'] . "<br/>"
			. "Email: " . $_REQUEST['email'] . "<br/>"
			. "Telefono: " . $_REQUEST['telefono'] . "<br/>"
			. "Direccion: " . $_REQUEST['direccion'] . "<br/>"
			. "Perfil: " . $_REQUEST['perfil'] . "<br/>"
			. "Genero: " . $_REQUEST['genero'] . "<br/>"
			. "Nivel: " . $_REQUEST['nivel'] . "<br/>";
		}*/


	$fp = fopen("formulario.txt", "w");
			fwrite($fp, "Nombre: " . $_REQUEST['nombre'] . PHP_EOL);
			fwrite($fp, "Cedula: " . $_REQUEST['cedula'] . PHP_EOL);
			fwrite($fp, "Fecha: " . $_REQUEST['fecha'] . PHP_EOL);
			fwrite($fp, "Email: " . $_REQUEST['email'] . PHP_EOL);
			fwrite($fp, "Telefono: " . $_REQUEST['telefono'] . PHP_EOL);
			fwrite($fp, "Direccion: " . $_REQUEST['direccion'] . PHP_EOL);
			fwrite($fp, "Perfil: " . $_REQUEST['perfil'] . PHP_EOL);
			fwrite($fp, "Genero: " . $_REQUEST['genero'] . PHP_EOL);
			fwrite($fp, "Nivel: " . $_REQUEST['nivel'] . PHP_EOL);
			fclose($fp);
			
			echo 
			"Nombre: " . "<br/>" . "Cédula: " . "<br/>" . "Fecha: " . "<br/>" . "Email: " . "<br/>" . "Teléfono: " . "<br/>" . "Dirección: " . "<br/>" . "Perfil: " . "<br/>" . "Género: " . "<br/>" . "Nivel(es): " . "<br/>";
			
	?>
	Link de acceso al formulario <a href="practica1.php">aquí</a></p>
	
	<form action="redireccionar.php" method="post">
			Ingrese dirección de sitio web (ej www.google.com):
			<input type="text" name="direccion" size="30"><br>
			<input type="submit" value="Redireccionar">
	</form>
	
	<form>
	<input type=button value="Haz Clic AQUI" onclick="alert('Asegúrese')"> 
	</form>
	
</body>

</html>