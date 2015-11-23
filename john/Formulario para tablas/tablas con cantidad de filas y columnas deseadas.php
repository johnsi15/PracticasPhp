<?php
   $a=$_POST["a"];
   $b=$_POST["b"];
   
   $c=0;
   echo "<center><table border=2 bgcolor=blue>";
   echo "<tr>";
   for ($j=1; $j<=$a; $j++)
   {
      echo "</tr>"; 
      echo "<td>";
      for ($i=1; $i<=$b; $i++)
	  {
	    $c=$c+1;
	     echo "<td> $c </td>";
		
	    }
		echo "</td>";
	}
	  
	 echo "</table></center>";
?>
	 