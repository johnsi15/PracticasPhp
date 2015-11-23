<html>
  <head>
    <tilte> Actualisar </title>
  </head>
    <body>
	  <?php
	    $conexion=mysql_connect("localhost","root","andrey")or die ("Problema con la conexion");
		mysql_select_db("phpfacil",$conexion) or die ("Problema con la seleccion de la base de batos");
		$registro=mysql_query("update cursos set nombrecur='$_REQUEST[cursonuevo]' where nombrecur='$_REQUEST[cursoviejo]'",$conexion) or die ("¨Problema con el select:".mysql_error());
	    echo "El curso fue modificado con exito";
		
	  ?>
	</body>
</html>
