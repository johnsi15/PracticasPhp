

<?php
  $a=$_POST ["a"];
  $b=$_POST ["b"];
 $opcion1=$_POST["opcion1"];
 
 
 //suma
 if ($opcion1 == 1)
 {
      $c=$a+$b;
      echo "La suma es $c";
      echo "<br>";
      echo "<br>";
	}
   else
    if ($opcion1 == 2)
	{
//resta
       $c=$a-$b;
       echo "La resta es $c";
       echo "<br>";
       echo "<br>";
	   }
	   else
	     if ($opcion1 == 3)
		 {
 //multiplicaion
	       $c=$a*$b;
	       echo "la multiplicacion es: $c";
		   }
		   else
		     if ($opcion1 == 4)
			 {
	
 //division
	            $c=$a/$b;
	            echo "<br>";
	            echo "<br>";
	            echo "la division es $c";
				}
 
?>
  