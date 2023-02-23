<html>
	<head>
		<title>Validacion de Fechas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<form action="" method="post">
			Ingrese una fecha (dd/mm/aaaa):
			<input type="text" name="dia" size="2">
			<input type="text" name="mes" size="2">
			<input type="text" name="anio" size="4">
			<br>
			<input type="submit" value="validar" name="action_button">
		</form>
	</body>
</html>

<?php
	if (!empty($_POST['action_button'])){
		if (is_numeric($_REQUEST['dia']) && 
			is_numeric($_REQUEST['mes']) && 
			is_numeric($_REQUEST['anio'])) 
		{
			if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['anio']))
				echo "La fecha ingresada es correcta";
			else
				echo "La fecha no es válida";
		}
		else
			echo "La fecha no es válida";
	}
?>