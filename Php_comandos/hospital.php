<html>
  <head>
     <title> Hospitales </title>
  </head>
    <body>
	    <?php
           $conexion=mysql_connect("localhost","root","andrey") or die ("problemas con la conexion");
	       mysql_select_db("medicina",$conexion) or die ("problema con la seleccion de la base de datos");
	       $registro=mysql_query("select cod_hospital,nombre,direccion,num_plazas from hospitales order by num_plazas",$conexion)or die ("problemas en el select".mysql_error());
	        echo "<table  border=1> ";
	        echo "<tr><td width=200 align=center><font size=5>Codigo Hospital   </td>
	            <td width=200 align=center><font size=5>Nombre </td> <td width=200 align=center><font size=5>Direccion</td> <td width=200 align=center><font size=5>Numero plaza  </td>  </tr> ";
		   $a=0;
	      while($reg=mysql_fetch_array($registro)){
	         echo "<tr><td width=250 align=center><font size=5>".$reg['cod_hospital']."</td>";
             echo "<td width=250 align=center><font size=5> ".$reg['nombre']."</td>";
	         echo "<td width=250 align=center><font size=5> ".$reg['direccion']."</td>";
	         echo "<td width=250 align=center><font size=5>".$reg['num_plazas']."</td>";
			 echo "</tr>";
	       $a++;
	     }
		     echo "</table>";
	         echo "<h1><font color=blue>El Total de Hospitales es: $a</h1></font>";
	      mysql_close($conexion);
       ?>
	</body>
</html>

