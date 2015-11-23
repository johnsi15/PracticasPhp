<html>
  <head>
    <title> Problema 25 </title>
  </head>
    <body>
	   <form method="post" action="ej_25_1.php">
	     Ingrese nombre:
		 <input type="text" name="nombre">
		 Ingrese email:
		 <input type="text" name="mail">
		 <br>
		 Seleccione el curso:
		 <br>
		  <?php
		    $conexion=mysql_connect("localhost","root","andrey") or die ("Problemas con la conexion");
			mysql_select_db("phpfacil",$conexion) or die ("Problemas con la selecion de la base de datos");
			$registro=mysql_query("select codigo,nombrecur from cursos",$conexion) or die ("Problemas en el select:".mysql_error());
			while($reg=mysql_fetch_array($registro)){
			    echo "<br>";
			    echo "$reg[nombrecur]";
			    echo "<input type=radio name=radio1 value=\"$reg[codigo]\">";
				echo "<br>";		 
			}
		  ?>
		  <br>
		  <input type="submit" value="Registrar">
	   </form>
	</body>
</html>