<html>
    <head>
        <title>Subida de archivos II</title>
    </head>
    <body>
        <?php
		  copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
		  echo "El archivo se registro en el servidor.<br>";
		  $nom=$_FILES['archivo']['name'];
		  echo "<img src=\"$nom\">";
		  /*Otras cosas interesantes de la matriz $_FILES:
			$_FILES['foto']['name'] El nombre original del fichero en 
									la máquina cliente.
			$_FILES['foto']['type'] El tipo de archivo (si el navegador
									lo proporciona). Un ejemplo podría ser "image/gif".
			$_FILES['foto']['size'] El tamaño en bytes del fichero recibido.
			$_FILES['foto']['tmp_name'] El nombre del archivo temporal que se 
									utiliza para almacenar en el servidor el archivo recibido.

		  */
		?>
    </body>
</html>