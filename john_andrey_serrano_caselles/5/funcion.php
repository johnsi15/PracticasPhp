<?php
    function numero($a,$b,$c){
	
	if ($a>$b){
	   $m=$a;
	}
	else{
	    if ($a>$c){
		  $m=$a;
		 
		 }
		 if ($b>$c){
		    $m=$b;
		}
		else{
		    if($c>$b){
			   $m=$c;
			 }
			 else{
			    if ($c>$a){
				  $m=$c;
				}
			}
        }					
	}
	return ($m);
	
}
	    
?>