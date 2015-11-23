<html>
  <head>
    <title> Problema 24 </title>
  </head>
    <body>
	   <?php
	     $conexion=mysql_connect("localhost","root","andrey") or dier ("Problema en la conexion");
		 mysql_select_db("phpfacil",$conexion) or die ("Problema en la selecion de la base de datos");
		 $registro=mysql_query("select * from cursos where nombrecur='$_REQUEST[nombre]'",$conexion) or die ("Problemas en el select".mysql_error());
	      if ($reg=mysql_fetch_array($registro)){
	  ?>
	      <form method="post" action="ej_24_1_2.php">
		    Curso nuevo:
			<input type="text" name="cursonuevo" value="<?php echo $reg["nombrecur"]?>">
			<br>
			<input type="hidden" name="cursoviejo" value="<?php echo $reg["nombrecur"]?>">
			<input type="submit" value="Modificar">
		  </form>
		<?php  
		  }
		  else{
		    echo "No existe ese curso";
		  }
	    ?>
	</body>
</html>
