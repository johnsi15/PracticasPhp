<html>
  <head>
  <title>Problema</title>
  </head>
  <body>
<?php
  if ($_REQUEST["radio1"]=="suma")
  {
    $suma=$_REQUEST["valor1"] + $_REQUEST["valor2"];
    echo "La suma es:".$suma;
  }
  else
  {
      $resta=$_REQUEST["valor1"] - $_REQUEST["valor2"];
      echo "La resta es:".$resta;
  }
?>
</body>
 </html>