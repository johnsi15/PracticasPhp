<html>
  <head>
    <title>Usuario_Conect</title>
  </head>
    <body>
	     Nombre:
	    <?php echo "$_REQUEST[nombre]";?>
		<br>
		Contraseña:
		<?php echo "$_REQUEST[contraseña]";?>
		<br>
		Continente:
		<?php
		  $conexion=mysql_connect("localhost","root","andrey") or die ("problemas con la conexion");
		  mysql_select_db("formulario_pais",$conexion) or die ("problemas con la selecion de la base de datos");
		  $registro=mysql_query("select id_continente,nombre from continentes",$conexion) or die ("problemas en el select".mysql_error());
		   while($reg=mysql_fetch_array($registro)){ 
		       if("$_REQUEST[continente]"=="$reg[id_continente]"){
			      echo "$reg[nombre]";
			    }
			}
		  mysql_close($conexion);
		?>
	   <form action="Usuario_3.php" method="post">
              Pais:
			  <select name="pais">	  
			  <br>
               <?php
			     $conexion=mysql_connect("localhost","root","andrey") or die ("problemas con la conexion");
			     mysql_select_db("formulario_pais",$conexion) or die ("problemas con la selecion de la base de datos");
			     $registro=mysql_query("select id_pais,nombre from paises",$conexion) or die ("problemas con la select".mysql_error());
				 while($reg=mysql_fetch_array($registro)){
				  echo "<option value=\"$reg[id_pais]\">$reg[nombre]</option>";
				 }
				 mysql_close($conexion);
			   ?>
			   </select>
			   <br>
			  <input type="submit" value="Siguiente"> 
	  </form>
	   
	  <?php
	    $conexion=mysql_connect("localhost","root","andrey") or die ("problemas con la conexion");
		mysql_select_db("formulario_pais",$conexion) or die ("Problemas en la selcion de la base de datos");
		mysql_query("insert into usuarios(nombre_usuario,contraseña,id_continente) values ('$_REQUEST[nombre]','$_REQUEST[contraseña]','$_REQUEST[continente]')",$conexion) or die ("Problemas en el select".mysql_error());
		mysql_close($conexion);
		echo "Fue correcto";
	  ?>
	</body>
</html>