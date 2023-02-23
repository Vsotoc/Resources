<html>

<head>
	<title> Agregar personas </title>
	<meta utf-8>
</head>

<body>
	<h3> Inicio </h3>
	<form name="inicio" method="POST" action="formulario.txt">
		Digite su nombre:
		<input name="nombre" type="text" value="" required placeholder="Nombre" /> <br />

		Digite su cédula:
		<input name="cedula" type="text" value="" required placeholder="Cédula" /> <br />

		Seleccione su fecha de nacimiento:
		<input name="fecha" type="date" value="" /> <br />

		Seleccione su género:
		<br />
		<input name="genero" type="radio" value="Masculino" required /> Masculino <br />
		<input name="genero" type="radio" value="Femenino" /> Femenino <br />

		Digite su correo electrónico:
		<input name="email" type="email" value="" required placeholder="Email" /> <br />

		Digite su número de teléfono de contacto:
		<input name="telefono" type="tel" value="" required placeholder="Telefono" /> <br />

		Seleccione su perfil de usuario:
		<select name="perfil">
			<option>Plataforma</option>
			<option>Administrativo</option>
			<option>Docente</option>
			<option>Estudiante</option>
		</select>
		<br />

		Seleccione su nivel académico:
		<br />
		<input name="nivel" type="checkbox" value="Diplomado" /> Diplomado<br />
		<input name="nivel" type="checkbox" value="Bachillerato" /> Bachillerato<br />
		<input name="nivel" type="checkbox" value="Licenciatura" /> Licenciatura<br />
		<input name="nivel" type="checkbox" value="Maestria" /> Maestria<br />

		Digite su dirección:
		<input name="direccion" type="text" value="" required placeholder="Direccion" /> <br />

		<input type="submit" name="aceptar" value="Ingresar" />
		<input type="reset" name="cancelar" value="Cancelar" />
	</form>
</body>

</html>