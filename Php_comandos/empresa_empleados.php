<html>
   <head>
      <title> Empresa </title>
   </head>
    <body>
     <?php
       $conexion=mysql_connect("localhost","root","andrey") or die ("problemas con la conexion");
	   mysql_select_db("empresa",$conexion) or die ("problema con la seleccion de la base de datos");
	   $registro=mysql_query("SELECT apellido,oficio,dept_no,salario FROM  emple ORDER BY dept_no",$conexion)or die ("problemas en el select".mysql_error());
	   $a=0;
	   echo "<table  border=1> ";
	   echo "<tr><td width=200 align=center><font size=5>Apellidos  </td>
	            <td width=200 align=center><font size=5>Oficio </td> <td width=200 align=center><font size=5>Dept_no </td> <td width=200 align=center><font size=5>Salario</td>  </tr> ";
	   while($reg=mysql_fetch_array($registro)){
	     echo "<tr><td width=200>"."<font size=5>".$reg['apellido']."</td>";
         echo "<td width=200 align=center> <font size=5>".$reg['oficio']."</td>";
	     echo "<td width=200 align=center> <font size=5>".$reg['dept_no']."</td>";
	     echo "<td width=200 align=center> <font size=5>".$reg['salario']."</td>";
	     echo "</tr>";
     	  $a++;
	   }
	     echo "</table>";
		 echo "<h1><font color=blue>El Total de Empleados es: $a</font></h1>";
	   mysql_close($conexion);
    ?>
   </body>
</html>




