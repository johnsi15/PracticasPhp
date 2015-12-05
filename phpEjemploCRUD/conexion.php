<?php
		class conexionBD{
              public function conectar(){
			     
				 $conexion=mysql_connect("localhost","root","andrey15")or die ("problema en la conexion");
			     mysql_select_db("agenda",$conexion) or die ("problema en la seleccion de la base de datos");
			     return $conexion;
			  }
			  
			  public function cerrar(){
			     mysql_close();
			  }

		}
?>