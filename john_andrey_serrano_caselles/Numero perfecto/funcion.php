<?php
   function perfecto($a){
   $s=0;
  for ($i=1; $i<$a; $i++){
      $r=$a % $i;
	  if ($r==0){
	      $s=$s+$i;
	  }
	  if ($s==$a){
	       $dato=1;
	}
	else{
	    $dato=2;
	}
	   
  }
   return ($dato);
 }
 
?>