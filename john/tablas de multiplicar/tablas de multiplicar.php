<?php
   $a=$_POST ["a"];
   $b=$_POST ["b"];
   $c=0;
   
   echo "<center> <table border=2>";
   echo "<tr>";
   for ($i=1; $i<=$b; $i++)
   {
      $c=$a*$i;
	    echo "</tr>";
		echo "<td>";
	       echo "$a*$i=$c ";
	   	  echo "</td>";
	  }
	  echo "</center> </table>";
?>
	  