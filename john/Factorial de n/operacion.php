<?php
    $a=$_GET["a"];
	
	$f=1;
	
	for($i=1; $i<=$a; $i++){
	      $f=$f*$i;
	}
	echo "El factorial de $a es $f";
?>