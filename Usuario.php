<html>
 <head>
    <title> Usuario </title>

 </head>
 <body>
   <h3> Usuario </h3>
   <form name ="login" method="POST" Action="inicio.txt">
   Nombre:
   	<input name= "nombre" type= "text" value="" required placeholder= "nombre"/> <br></br>
	
   Cédula:
   <input name="cedula" type="number" value="" required placeholder= "cantidad"/> <br></br>
   
   Género:
   <input name= "genero" type= "radio" value="Femenino"/> <br></br>
	<input name= "genero" type= "radio" value="Masculino"/> <br></br>
	
	Fecha de registro:
   <input name= "fecha" type= "date_default_timezone_get" value=""/> <br></br>
      
   
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
   
   ?>