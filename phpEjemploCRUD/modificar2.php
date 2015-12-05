<html>
	<?php
		require_once('conexion.php');//utilizamos el scrip 
		$db = new conexionBD(); //instanciamos un objeto de la clase conexionBD
		$db->conectar(); //ejecutamos el metodo conectar
		
		$id=$_POST['id'];
		$nomNuevo=$_POST['nombre'];
		$teleNuevo=$_POST['telefono'];
		
		$registro=mysql_query("update datos set nombre='$nomNuevo', telefono='$teleNuevo' where id='$id'") 
					  or die ("Problema en Update".mysql_error());
		echo"El contacto se modifico correctamente...";
		$db->cerrar();
	?>
	<form action="inicio.html">
	   <br><input type="Submit" value="Inicio">
	</form>
</html>