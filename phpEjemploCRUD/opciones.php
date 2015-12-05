<html>
  <title>Registros</title>
  <body>
     <?php
	    $opcion = $_POST['opciones'];
     ?>
		<?php
		if($opcion==1){
		     ?>
			  <p align="center">
			   Registrar:
			  <form method="post" action="insertar.php" align="center"><br><br>
				  Nombre:
				  <input type="text" name="nom"><br><br>
				  Telefono:
				  <input type="text" name="tele"><br>
				  <br><input type="Submit" name="ok" value="Registrar">
			  </form>
					 <form action="inicio.html">
				       <input type="Submit" name="atras" value="Atras">
					   </form>
             <?php
		}else{
		   if($opcion==2){
		      ?>
			   <p align="center">
				Lista de Contactos  <br><hr>
				<?php
					require_once('conexion.php');
					$db = new conexionBD();
					$db->conectar();
					$registros=mysql_query("select * from datos");
					while($reg=mysql_fetch_array($registros)){  
					   echo "ID:  ".$reg['id']."<br>";
					   echo "Nombre:  ".$reg['nombre']."<br>";
					   echo"Telefono:  ".$reg['telefono']."<br>";
					   echo "<br>";
					   echo "<hr>";
					}
					$db->cerrar();
				?>
				</p>
				    <form action="inicio.html">
				       <input type="Submit" name="atras" value="Atras">
			        </form>
		       <?php
		   }
		   else{
		      if($opcion==3){
			     ?>
				 <p align="center">
			      Modificar Contacto
				  <form method="post" action="modificar.php" align="center">
				      ID a Buscar:
				      <input type="text" name="id">
					 <input type="Submit" name="bus" value="Buscar">
				  </form>
				<?php
			  }else{
			     ?>
			       <p align="center">
				    Eliminar Contacto
					<form method="post" action="eliminar.php" align="center">
					    ID a Eliminar:
						<input type="text" name="id">
						<input type="Submit" name="eli" value="Eliminar">
					</form>
				 <?php
			  }
		   }
		}
	         ?>
       
  </body> 
</html>