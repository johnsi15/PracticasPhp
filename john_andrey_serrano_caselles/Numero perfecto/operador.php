<?php
     include ("funcion.php");
	 $n=$_POST ["n"];
	 
	 $numero=perfecto($n);
	 if ($numero==1){
	       echo "El numero es perfecto $n";
	 }
	 else{
	      echo "El numero no es perfecto $n";
	  }
?>