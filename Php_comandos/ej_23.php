<html>
  <head>
    <title> Problema 23 </title>
  </head>
    <body>
	  <?php
	    $conexion=mysql_connect("localhost","root","andrey") or die("Problemas con la conexion");
		mysql_select_db("phpfacil",$conexion) or die ("Problema en la selecion de la base de datos");
		$registro=mysql_query("delete from cursos",$conexion) or die ("Problema en el selec".mysql_error());
		
		echo "Se efectuo el Borrado de todos los cursos";
		mysql_close($conexion);
	  ?>
	</body>
</html>