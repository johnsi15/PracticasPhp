<?php
    function numeros($a){
	$y=strlen($a);
	  
	return ($y);
	}
	
	function primo ($a,$r){
	  for ($j=0; $j<$r; $j++){
		
		$c=0;
	     for ($i=1; $i<=$a[$j]; $i++){
		    
		       $res=$a[$j] % $i;
			   
			   if ($res==0){
			       $c=$c+1;
				}
		 }
	        if ($c<=2){
				 echo "El numero es primo $a[$j] <br>";
            }		
       }	
	}
	
	function perfecto ($a,$r){
        for ($j=0; $j<$r; $j++){
		 $s=0;
         for ($i=1; $i<$a[$j]; $i++){
                $res=$a[$j] % $i;
                   if ($res==0){
                         $s=$s+$i;
                    }
          }
           if ($s==$a[$j]){
                  echo "El numero es perfecto $a[$j] <br>";
            }
        }			
	}
	
	function par ($a,$r){
	     for ($j=0; $j<$r; $j++){
		  
		   for ($i=1; $i<=$a[$j]; $i++){
		            $res=$a[$j] % 2;
					
			}
			if ($res==0){
					       echo "El numero es par $a[$j] <br>";
			}
		}
	}
?>


	         