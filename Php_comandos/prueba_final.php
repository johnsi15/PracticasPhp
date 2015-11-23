<html>
  <head>
     <title> Prueba_23 </title>
  </head>
    <body>
	   <?php
	      $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
		  mysql_select_db("empresa",$conexion) or die ("Problemas con la selecion de la base de datos");
		  $registro=mysql_query("select apellido,salario from emple",$conexion) or die ("Problemas con el select.".mysql_error());
		   while($reg=mysql_fetch_array($registro)){
		       echo "Apellido".$reg['apellido']."<br>";
			   echo "salario".$reg['salario']."<br>";
		   }
		   mysql_close($conexion);
	   ?>
    </body>
</html>

