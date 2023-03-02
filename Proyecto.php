<html>
 <head>
    <title> Inicio de Sesión </title>

 </head>
 <body>
   <h3> Login BattleFight </h3>
   <form name ="login" method="POST" Action="inicio.txt">
   Digite su usuario:
   <input name= "usuario" type= "text" value="" required placeholder= "usuario"/> <br></br>
   Digite su contraseña:
   <input name="clave" type="password" value="" required placeholder= "clave"/> <br></br>
   Fecha de ingreso:
   <input name= "fecha" type= "date" value=""/> <br></br>
   Hora de ingreso:
   <input name= "hora" type= "time" value=""/> <br></br>
   
   
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
	
	/*$date = date("d-m-Y H:i:s");*/
?>