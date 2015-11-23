<?php
 include ("funcion.php"); 
  $n=$_POST ["n"];
  
  $serapar=par($n);
   if($serapar==0){
     echo ("par");
	}
	else {
	  echo ("no es par");
	}
?>