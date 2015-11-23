<html>
  <head>
    <title>Solucion</title>
  </head>
    <body>
	   <?php
	      $a=fopen("datos.txt","a")  or
               die("Problema en la creacion");
           fputs ($a,$_REQUEST["1"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["2"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["3"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["4"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["5"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["6"]);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST['7']);
		   fputs($a,"..........");  
		   fputs ($a,$_REQUEST["8"]);
           fputs($a,"\n");      		   
		  fclose($a);
		  echo "Su pedido fue exitoso";
	   ?>
	</body>
</html>

