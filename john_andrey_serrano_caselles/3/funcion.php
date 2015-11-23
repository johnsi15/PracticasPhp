
<?php

function nom($j)
{
  $j1=strlen($j);
  //$cont=0;
  for($i=0;$i<$j1;$i++){
       echo "$j[$i]";
	   if ($i<($j1-1)){
           echo ("-");
		   }
	   
      }     
}
?>
