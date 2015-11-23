<html>
  <head>
    <title>Solucion 21</title>
  </head>
    <body>
	  <?php
	    $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
		mysql_select_db("phpfacil",$conexion)or die ("Problemas en la selecion de la base de datos");
	    $registro=mysql_query("select nombre,mail from alumnos where nombre='$_REQUEST[1]'",$conexion) or die ("problemas en la selct".mysql_error());
		  if($reg=mysql_fetch_array($registro)){
		         echo "Nombre: ".$reg["nombre"]."<br>";
	 	         echo "mail:  ".$reg["mail"] ;
			     echo "<hr>";
		     while ($reg=mysql_fetch_array($registro)){
	     	     echo "Nombre: ".$reg["nombre"]."<br>";
	 	         echo "mail:  ".$reg["mail"] ;
			     echo "<hr>";
			 }
	    	}
	 	    else{
		      echo "No existe ese nombre registrado";
		   }
		mysql_close($conexion);
	  ?>
	</body>
</html>

