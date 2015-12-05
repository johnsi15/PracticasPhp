<html>
	<?php
		require_once('conexion.php');
		$db= new conexionBD();
		$db->conectar();
		
		$id= $_POST['id'];
		
		mysql_query("delete from datos where id='$id'") or die ("Problema en delete ".mysql_error());
		
		  echo"El contacto se Elimino Correctamente.";
		
		$db->cerrar();
	?>
	<form action="inicio.html">
	    <br>
	   <input type="Submit" value="Inicio">
	</form>
</html>