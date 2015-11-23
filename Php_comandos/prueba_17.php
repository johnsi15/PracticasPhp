<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
function mensajecentrado($men)
{
  echo "<table width=\"100%\" border=\"1\">";
  echo "<tr><td align=\"center\">";
  echo $men;
  echo "</tr></td>";
  echo "</table>";
}

mensajecentrado("Primer recuadro");
echo "<br>";
mensajecentrado("Segundo recuadro");
?>
</body>
</html>

<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
function retornarpromedio($valor1,$valor2)
{
  $pro=$valor1/$valor2;
  return $pro;
}

$v1=100;
$v2=50;
$p=retornarpromedio($v1,$v2);
echo $p;
?>

</body>
</html>