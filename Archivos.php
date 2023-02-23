<html>
    <head>
        <title>Formulario I</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
         <?php
/*
			/////////////// 2. LEER ARCHIVOS
			//Opcion que lee linea por linea: sirve cuando hay caracteres como comas, espacios
			$fp = fopen("fichero.txt", "r"); //abre el archivo, que ya debe existir, para lectura
			while(!feof($fp))   //mientras que no sea el final del archivo [no end of file (feof)]
				echo fgets($fp) .  "<br/>"; // Haga: fgets recupera el contenido de una línea de un archivo, la guarda en la variable $linea
									//echo muestra el contenido de la $linea 
			fclose($fp);  // fclose cierra un archivo abierto, es de caracter obligatorio usarlo
			//en el navegador se ve lo que se escribio abajo
			*/
		
			/// Otra forma de leer archivos
			$texto = file_get_contents("fichero.txt"); //Para recuperar el contenido total del archivo, sin saltos de línea
			echo nl2br($texto); //nl2br convierte los saltos de línea a etiquetas <br />
			
			

			
			/////////////// 1. ESCRIBIR ARCHIVOS
			
			$fp = fopen("fichero.txt", "w");  // Para escritura: f de file y open de abrir
			fwrite($fp, "Esto es una nueva linea de texto" . PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fputs($fp, "Prueba de escritura" . PHP_EOL);  // fputs escribe una línea en un archivo
			fclose($fp);
			echo "Archivo creado";
			
			
				
		?>
		<p>Link de acceso al formulario <a href="formulario.php">aquí</a></p>  //ayuda a hacer enlaces  -- direccionamiento dinamico
    </body>
</html>