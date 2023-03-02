<?php
date_default_timezone_set('America/Costa_Rica'); // Establecemos la Zona Horaria
$fecha=date("d/m/Y"); // Solicitamos la fecha y lo almacenamos en esa varibale

?>

<html>
 <head>
    <title> Equipo </title>

 </head>
 <body>
   <h3> Equipo </h3>
   <form name ="login" method="POST" Action="inicio.txt">
   
   Tipo de equipo:
   	<input name= "categoria" type= "radio" value="B"/> <br></br>
	<input name= "categoria" type= "radio" value="M"/> <br></br>
	<input name= "categoria" type= "radio" value="E"/> <br></br>
	
	Código del equipo:
	<input name="codigo" type="number" value=""/> <br></br>
	
   Cantidad de jugadores:
   <input name="cantidad" type="number" value="" required placeholder= "cantidad"/> <br></br>
   
   Año de registro:
   <input name= "fecha" type= "year" value=""/> <br></br>
      
   
   <input type="submit" name="aceptar" value="ingresar"/>
   <input type="reset" name="Cancelar" value="cancelar"/>
   
   </form>
   
   </body>
</html>
   
   
 <?php
   if(!empty($_REQUEST['aceptar'])){
    echo $_REQUEST['usuario'] . "<br/>" . $_REQUEST['clave'];
   }
   date_default_timezone_set("America/Costa Rica");
   echo date_default_timezone_get();
   
   $date = date("d-m-Y H:i:s");
   
   ?>