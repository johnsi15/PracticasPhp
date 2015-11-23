<html>
  <head>
      <title>Problema</title>
  </head>
   <body>

      <?php
		   /*echo $valor;
		   echo $valor2;*/
             function clave($vl,$vl2){
			        if ($vl==$vl2){
					     // echo "Las claves son iguales";
						  $r=1;
					}
					else{
					   // echo "Las claves no son iguales";
						$r=2;
					}	
					return $r;
			 }
			  $valor=$_REQUEST["2"];
		      $valor2=$_REQUEST["3"];
			  
			 $rt= clave($valor,$valor2);
			if ($rt==1){
			     echo "Las claves son iguales";
			}
			else{
			     echo "Las claves no son iguales";
			}
      ?>

</body>
</html>
   