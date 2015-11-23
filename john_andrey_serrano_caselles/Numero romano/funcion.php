<?php 
  function romano($rom){
     $y=strlen($rom);
	 for ($i=0; $i<$y; $i++){
	          if ($rom[$i]=="M"){
			      $v[$i]=1000;
			    }
			  if ($rom[$i]=="D"){
			      $v[$i]=500;
				}
				if ($rom[$i]=="c"){
			      $v[$i]=100;
				}
				if ($rom[$i]=="L"){
			      $v[$i]=50;
				}
				if ($rom[$i]=="X"){
			      $v[$i]=10;
				}
				if ($rom[$i]=="I"){
			      $v[$i]=1;
				}
		}
		$c=0;	
        $con=0;
      for ($i=0; $i<$y; $i++){
                     if ($v[$i]>=$v[$i+1]){
                          $c[$i]=$v[$i]+$v[$i+1];
						  $i++;
					    }
						if ($v[$i]<$v[$i+1]){
						   $c[$i]=$v[$i]-$v[$i+1];
						   $i++;
						  }
						  $con=$con+1;
		}
		$sum=0;
           for ($i=0; $i<$con; $i++){
		        $sum=$sum+$c[$i];
             }
       return ($sum);
}	   
?>