<html>
	<head>
		<title>Función Date</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			/* La función "date" me trae la fecha y hora
			Los caracteres de formato son:
			- d día del mes con dos dígitos "01" al "31"
			- m mes con dos dígitos "01" al "12"
			- Y año con cuatro dígitos
			- j día del mes "1" al "31"
			- n mes "1" al "12"
			- y año con dos dígitos
			
			- H hora con dos dígitos "00" a "23"
			- i minutos con dos dígitos "00" a "59"
			- s segundos con dos dígitos "00" a "59"	*/
			
			date_default_timezone_set('America/Costa_Rica'); //php trae la hora y fecha de un servidor y no de la compu. Por eso hay que establecer la zona horaria

			echo "Formato de fecha mediana: "; //traer dato por dato 
			$fecha=date("d/m/Y");
			echo $fecha;
			echo "<br>";
			echo "Formato de fecha corta: ";
			$fecha=date("j/n/y");
			echo $fecha;
			echo "<br>";
			echo "La hora actual es: ";
			$time=time();
			echo date('l jS \of F Y h:i:s A');
			echo "<br>";
		?>
	</body>
</html>