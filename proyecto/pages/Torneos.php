<html>

<head>
   <title> Torneo </title>

</head>

<body>
   <ul>
      <li>
         <button onclick="location.href='Archivo.php'">Archivo</button>
      </li>
      <li>
         <button onclick="location.href='Torneos.php'">Torneos</button>
      </li>
      <li>
         <button onclick="location.href='Usuarios.php'">Usuarios</button>
      </li>
      <li>
         <button onclick="location.href='AcercaDe.php'">Acerca de</button>
      </li>
   </ul>
   <h1>Torneos</h1>
   <form name="login" method="POST" Action="inicio.txt">
      Tipo de equipo:
      <input name="codigo" type="text" value="" required placeholder="codigo" /> <br></br>
      Cantidad de jugadores:
      <input name="cantidad" type="number" value="" required placeholder="cantidad" /> <br></br>
      Fecha del torneo:
      <input name="fecha" type="date_default_timezone_get" value="" /> <br></br>
      Precio: $
      <input name="precio" type="number" value="" /> <br></br>
      Categoría:
      <input name="categoria" type="radio" value="B" /> <br></br>
      <input name="categoria" type="radio" value="M" /> <br></br>
      <input name="categoria" type="radio" value="E" /> <br></br>


      <input type="submit" name="aceptar" value="ingresar" />
      <input type="reset" name="Cancelar" value="cancelar" />

   </form>

</body>

</html>


<?php
if (!empty($_REQUEST['aceptar'])) {
   echo $_REQUEST['usuario'] . "<br/>" . $_REQUEST['clave'];
}
date_default_timezone_set("America/Costa Rica");
echo date_default_timezone_get();

?>