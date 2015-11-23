<html>
  <head>
    <title>Solucion19</title>
  </head>
    <body>
	  <?php
	     $conexion=mysql_connect("localhost","root","andrey") or die ("Problema en la conexion");
		 mysql_select_db("phpfacil",$conexion) or die ("Problema en la seleccion de la base de datos");
		 mysql_query("insert into cursos(nombrecur) values ('$_REQUEST[nombrecur]')",$conexion) or die ("Problema en el select".mysql_error());
		 mysql_close($conexion);
		 echo "El curso fue registrado.";
	  ?>
	</body>
</html>
