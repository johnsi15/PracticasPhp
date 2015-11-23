<?php
    include ("funcion.php");
	      $n=$_POST ["n"];
		  
		  $r=numeros($n);
		  $pr=primo($n,$r);
		  $per=perfecto ($n,$r);
		   $per2=par ($n,$r);
		  //echo "La cantida de posicion es $r";
?>