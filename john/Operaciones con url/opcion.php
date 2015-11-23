<?php
    $a=$_GET["a"];
	$b=$_GET["b"];
	echo "<body bgcolor=black>";
	
   echo "<a href =operaciones.php?a=$a&b=$b&opcion=1> <center> CLICK AQUI PARA SUMA <br>  <br> </a>";
   
   echo "<a href =operaciones.php?a=$a&b=$b&opcion=2> CLICK AQUI PARA RESTA <br> <br>  </a>"; 
   
   echo "<a href=operaciones.php?a=$a&b=$b&opcion=3> CLICK AQUI PARA MULTIPLICACION <br>  <br> </a>";
 
   echo "<a href=operaciones.php?a=$a&b=$b&opcion=4> CLICK AQUI PARA DIVISION <br>  <br> </a>";
?>
 
 