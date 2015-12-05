<html>
  <body>
      <?php
	           require_once('conexion.php');
			   $db = new conexionBD();
			   $db->conectar();
			   
			   $nombre = $_POST['nom'];
			   $telefono = $_POST['tele'];
	          
			   mysql_query("insert into datos (nombre,telefono) values ('$nombre','$telefono')") or die ("problemas en el query insertar".mysql_error());
			   $db->cerrar();
			   echo "Registro Exitoso...";
		
        ?>
  </body>
</html>
