<?php
  $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
  mysql_select_db("empresa",$conexion) or die ("Problema con la selecion de la base de datos");
  $registro=mysql_query("select * from emple where salario>1400",$conexion) or die ("problema con la selecion".mysql_error());
   if ($reg=mysql_fetch_array($registro)){
      echo "Salario: ".$reg['salario'];
   }
   else{
     echo "no hay salario";
   }
   mysql_close($conexion);
?>