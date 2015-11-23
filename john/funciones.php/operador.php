<?php
 include ("funciones.php"); 
  $n=$_POST ["n"];
  
  $serapar=par($n);
   if($serapar==0){
     echo ("par");
	}
	else {
	  echo ("no es par");
	}
	 $seraprimo=primo($n);
	 if ($seraprimo==2){
	       echo ("primo");
	 }
	 else {
		  echo ("no es primo");
	 }
		 $signo=positivo($n);
	   if ($signo==1) {
			  echo "el numero es positivo";
	    }
     	  else {
		    if ($igno==-1){
			     echo "el numero es negativo";
			 }
			 else{
			    if ($signo==0){
				     echo "el numero es negativo";
			    }
			}
		}
?>
				   
				 
	 
   
  
      
  
  