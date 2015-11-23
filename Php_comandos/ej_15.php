<html>
  <head>
    <title>solucion</title>
  </head>
    <body>
	   <?php
	      $a=fopen("datos.txt","r") or die ("No se pudo cargar");
		  while (!feof($a)){
		      $linea=fgets($a);
			  $lienasalto=nl2br($linea);
			  echo $lienasalto;
		  }
		  fclose($a);
	   ?>
	</body> 
</html>