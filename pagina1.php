<html>
    <head>
        <title>Subida de archivos I</title>
    </head>
    <body>
	<!-- Para enviar archivos debe especificarse el valor del atributo enctype =  "multipart/form-data" 
	y debe  usar el método post  -->
        <form action="pagina2.php" method="post" enctype="multipart/form-data">
			Seleccione el archivo:
			<input type="file" name="archivo"><br>
			<input type="submit" value="Enviar">
		</form>
    </body>
</html>