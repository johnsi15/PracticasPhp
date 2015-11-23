<?php
include ("funcion.php"); 
  $n=$_POST ["n"];
  $j=$_POST ["j"];
  
  
  $resu=numero($n,$j);
   echo "La potencia es $resu";
   
?>