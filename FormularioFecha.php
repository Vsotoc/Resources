<?php
date_default_timezone_set('America/Costa_Rica'); // Establecemos la Zona Horaria
$fecha=date("d/m/Y"); // Solicitamos la fecha y lo almacenamos en esa varibale

?>

<html> 
    <head> 
        <title>Formulario I</title> 
    </head>
    <body>  
        <form name="Formulario" method="POST" action="">
	
			Fecha Consulta: <input type="text" name="fecha" value="<?php echo $fecha; ?>" readonly/> <!--Mostramos la fecha actual por defecto en el campos value, por medio de la varible $fecha // readonly para que
			usuario no edite la fecha-->
			<br/> 
			<input value="Aceptar" type="submit" name="action_button"/>	

		</form>	
		
    </body>	
</html>	

<?php
	if (!empty($_POST['action_button'])){  // Si el submit no está vacio....
		echo "La fecha digitada es: ". $_REQUEST['fecha']; // Mostramos la fecha capturada en el formulario
	}
	// NOTA: OBSERVEN QUE SE PUEDE AGREGAR CODIGO DE PHP DONDE SE NECESITE (antes del HTML, en el medio y al final)
?>