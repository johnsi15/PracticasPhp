<html>
   <title>Formulario de Continentes</title>
     <head>
	    <body>
		  <form action="" method="post">
		    Nombre: <?php echo $_POST['nombre'];?>
			<br>
			Cecular: <?php echo $_POST['cel'];?>
			<br>
			Email: <?php echo $_POST['email'];?>
			<br>
			Continente: <?php 
			               if ($_POST['a']==1){
						      echo "Africa";
						   }
						   else{
						      if ($_POST['a']==2){
							     echo "Asia";
							  }
							  else{
							      if ($_POST['a']==3){
							        echo "America";
							      }
								  else{
								        if ($_POST['a']==4){
							                echo "Europa";
							            }
								  }
							  }
						   }
						?>
			<br>			
			<select name="a">
			  <option value="1">Colombia</option>
			  <option value="2">Brasil</option>
			  <option value="3">Argentina</option>
	       	  <option value="4">Venezuela</option>
			   <option value="5">Chile</option>
			<select>   
		  </form>
		</body>
	 </head>
</html>