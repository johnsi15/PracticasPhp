<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="prueba_25_1.php" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:
<select name="codigocurso">
<?php
$conexion=mysql_connect("localhost","root","andrey") or
  die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select codigo,nombrecur from cursos",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
  echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
}
?>
</select>
<br>
<input type="submit" value="Registrar">
</form>
</body>
</html>  