<html>
  <head>
    <title> Prueba problema </title>
  </head>
     <body>
	    <?php
		  $conexion=mysql_connect("localhost","root","andrey") or die ("Problemas con la conexion");
		  mysql_select_db("empresa",$conexion) or die ("Problemas con la seleccion de la base de datos");
		  $registro=mysql_query("select * from emple where oficio='empleado'",$conexion) or die ("Problemas con el select.".mysql_error());
		 
		 if($reg=mysql_fetch_array($registro)){
		     echo "Oficio:  ".$reg['oficio']."<br>";
		  }
		  
		  mysql_close($conexion);
		?>
     </body>
</html>
