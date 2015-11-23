<?php

echo "el mayor de 8 y 3 es";
 $a=8;
 $b=3;
   if ($a>$b)
   {
     $c=$a-$b;
	 echo "El mayor es $a";
	 echo "<br>";
	 echo "La resta es $c";
	 }
	 else
    {
	  if ($a==$b)
	     echo "$a y $b son iguales";
	   else
	     {
		   $c=$b-$a;
		   echo "El mayor es $b";
		   echo "<br>";
		   echo "su diferencia es $c";
		  }
	}
?>