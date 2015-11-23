<html>
  <head>
    <title> Borrar</title>
  </head>	
    <body>
      <?php
	     $conexion=mysql_connect("localhost","root","andrey") or die("Problema con la conexion");
		 mysql_select_db("phpfacil",$conexion) or die ("Problema en la seleccion de base de datos");
		 $registro=mysql_query("select nombrecur from cursos where nombrecur='$_REQUEST[nombre]'",$conexion) or die ("Problema en el select:".mysql_error());
		 if ($reg=mysql_fetch_array($registro)){
		    mysql_query("delete from cursos where nombrecur='$_REQUEST[nombre]'",$conexion) or die ("Probelamas en el select".mysql_error());
			echo "Se borro el curso con exito";
		 }
		 else{
		    echo "Ese curso no se encuentra en la base de datos";
		 }
		 mysql_close($conexion);
	  ?>
	 </body>
</html>