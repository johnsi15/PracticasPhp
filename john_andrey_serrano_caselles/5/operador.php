<?php
   include ("funcion.php");
   $a=$_POST ["a"];
   $b=$_POST ["b"];
   $c=$_POST ["c"];
   
   $resu=numero($a,$b,$c);
   echo "El numero mayor es $resu";
?>