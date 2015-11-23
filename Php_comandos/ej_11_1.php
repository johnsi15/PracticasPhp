<html>
  <head>
    <title> Operador</title>
  </head>
   <body>
      <?php
	    if ($_REQUEST["operacion"]==1){
		    echo $_REQUEST["valor1"];	 
		    echo " <br> No debe pagar impuesto";
		}
		else{
		   if ($_REQUEST["operacion"]==2){
		     echo $_REQUEST["valor1"];	
		     echo "<br>No debe pagar impuesto";
		   }
		   else{
		       if ($_REQUEST["operacion"]==3){
			      echo $_REQUEST["valor1"];	
		          echo "<br>Debe pagar impuesto";
			   }
		   }
		}
	  
	  ?>
   </body>   
</html>