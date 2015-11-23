<html>
  <head>
     <title> Solucion 20 </title>
  </head>
     <body>
	    <?php
		   $conexion=mysql_connect("localhost","root","andrey") or die ("Problema en la conecxion");
		    mysql_select_db("phpfacil",$conexion) or die ("Problema en la selecion de la base de datos");
			$registros=mysql_query("select codigo,nombrecur from cursos", $conexion) or die ("Problema en el select:".mysql_error());
			 while ($reg=mysql_fetch_array($registros)){
			     echo "Codigo: " .$reg["codigo"]."<br>";
				 echo "Nombre: " .$reg["nombrecur"];
			     echo "<hr>";
			 }
			
			 mysql_close($conexion);
		?>
		
     </body>
</html>