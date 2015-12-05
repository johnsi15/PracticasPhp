<html>
  <title>Modificar</title>
   <body>
		<?php
		   require_once('conexion.php');
		   $db = new conexionBD();
		   $db->conectar();
		   
		   $id= $_POST['id'];
		     echo"Datos Anteriores"."<br>"."<br>";
			 $registro=mysql_query("select * from datos where id=$id");
			 if($reg=mysql_fetch_array($registro)){
			    
			     echo "Nombre:  ".$reg['nombre']."<br>";
				 echo "Telefono:  ".$reg['telefono']."<br>";
				 echo "<hr>";
		 ?>
		     <form method="post" action="modificar2.php">
			   Nuevos datos<br><br>
                   Nombre:
				   <input type="text" name="nombre"><br>
				   Telefono:
				   <input type="text" name="telefono">
				   <input type="hidden" name="id" value=<?php echo $reg['id']?>>
				   <br><br>
				   <input type="Submit" name="modi" value="modificar">
             </form>	
                 <form action="inicio.html" align="center">
				    <input type="Submit" value="Inicio">
                 </form>				 
	       <?php
			 }else{
			    echo "No existe el Contacto¡";
			 }
		   ?>
	</body>
</html>