	<html>
		<head>
			<title> Login <title/>
			<meta http-equiv= "Content Type" content= "text/html; charset=utf-8">
		</head>
		<body>
		
			<?php 
			
			if (!empty ($_REQUEST ['aceptar'])) {
				echo
				"Nombre de usuario: " . $_REQUEST ['usuario'] . "<br/>" 
				. "Fecha: " . $_REQUEST ['fecha'] . "<br/>" 
				. "Hora de ingreso: " . $_REQUEST ['fecha'] .  "<br/>" 
			}
			
			$login = fopen("inicio.txt", "w");
			fwrite ($login, "Nombre de usuario: " . $_REQUEST ['usuario'] . PHP_EOL);
			fwrite ($login, "Fecha: " . $_REQUEST ['fecha'] .  PHP_EOL);			
			fwrite ($login, "Hora de ingreso: " . $_REQUEST ['hora'] . PHP_EOL);	
			fcloses($login);
			echo 
			"Nombre de usuario: " . "<br/>" . "Fecha: " . "<br/>" . "Hora de ingreso: " . "<br/>";
			
			
			$login = fopen("inicio.txt", "r");
			while (!feof ($login))
				echo fgets ($login) . "<br/>";
			
			?>
		</body>
	</html>