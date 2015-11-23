<html>
  <head> 
    <title> Solucion </title>
  </head>
    <body>
	   <?php
	     $conexion=mysql_connect("localhost","root","andrey") or die ("Probleamas con la conexion");
		 mysql_select_db("phpfacil",$conexion) or die ("Problema con la selecion de la base de datos");
		 mysql_query("insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[radio1])",$conexion) or die ("Problemas con el select:".mysql_error());
		 mysql_close($conexion);
		 echo "El alumno fue registrado exitosamente";
	   ?>
 	</body>
</html>
