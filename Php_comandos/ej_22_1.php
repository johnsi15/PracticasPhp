<html>
  <head>
     <title> Solucion 22</title>
  </head>
    <body>
	   <?php
	      $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
		  mysql_select_db("phpfacil",$conexion) or die ("Problemas en la selecion de la base de datos");
		  $registros=mysql_query("insert into cursos (nombrecur) values ('$_REQUEST[nombre]')",$conexion) or die ("Problemas en select:".mysql_error());
          mysql_close($conexion);		
            echo "El curso fue registrado";		  
	   ?>
	   
	<form method="post" action="ej_22_1_2.php">
	   Nombre del Curso a Borrar: 
	   <input type="text" name="nombre">
	   <input type="submit" value="Borrar">
	</form>  
	</body>
</html>