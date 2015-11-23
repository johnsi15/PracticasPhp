<?php
   $a=$_GET["a"];
   $b=$_GET["b"];
   $opcion=$_GET["opcion"];
   
   echo "<body background=goku-3.jpg>";
   if ($opcion ==1){
       $c=$a+$b;
	   echo "<body background=goku-3>";
	   echo "<center><font color=red size=5><b>La Suma de $a+$b es =$c";
    }  
	if ($opcion==2){
        $c=$a-$b;
        echo "<center><font color=red size=5><b>La Resta de $a-$b es =$c";
    }           
	 if($opcion==3){
         $c=$a*$b;
         echo "<center><font color=red size=5><b>La Multiplicacion de $a*$b es=$c";	
     }
     if($opcion==4){
         $c=$a/$b;
         echo "<center><font color=red size=5><b>La Division de $a/$b =$c"; 					 
      }
?>				
