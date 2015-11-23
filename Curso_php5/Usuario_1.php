<html>
  <head>
    <title>Usuario</title>
  </head>
    <body>
	  <form action="Usuario_connect.php" method="post">
         Nombre:
         <input type="text" name="nombre"><br>
		 Contraseña:
         <input type="text" name="contraseña"><br>
		 Continente:
		 <select  name="continente">
		 <?php
		  $conexion=mysql_connect("localhost","root","andrey") or die ("Problemas con la conexion");
		  mysql_select_db("formulario_pais",$conexion) or die ("problemas el la selecion de la base de datos");
		  $registro=mysql_query("select id_continente,nombre from continentes",$conexion) or die ("Problemas en el select".mysql_error());
			while ($reg=mysql_fetch_array($registro)){
		     //echo"<br>";
			 //echo"$reg[nombre]";
			 echo "<option value=\"$reg[id_continente]\">$reg[nombre]</option>";
		    }
		  mysql_close($conexion);	
        ?> 
        </select>		
		<br>
		<br>
       	 <input type="submit" value="Siguiente">
      </form>	
    </body>
</html>
