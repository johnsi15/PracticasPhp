<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
        if(isset($_POST['enviar'])){
             echo "Hola <b> $_POST[enviar]</b>";
        }else{
        	?>
        	<form action="pruebaIsset.php" method="post" name="form">
        		<input type="text" name="nombre"/>
        		<input type="Submit" value="Enviar" name="enviar"/>
        	</form>
        	<?php
        }
	?>
</body>
</html>