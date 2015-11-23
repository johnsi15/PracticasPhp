<html>
<head>
<title> tabla </title>
<body>
     <br>
<?php
  $c=0;
   echo "<center> <table border=2 width=130 height=100 bgcolor=red bordercolor=blue>";
    echo "<tr>";
      for ($j=1; $j<=5; $j++)
	  {
	    echo "<td>";
	    echo "</tr>";
		 for ($i=1; $i<=7; $i++) 
		   {
			 $c=$c+1;
			echo "<td> $c </td> ";
	
		    }
			
	    } 
		echo "</td>";
      echo "</center>  </table>";		
?>
    
		

</body>
</html>
     