<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
  $sm[]="lunes";
  $sm[]="martes";
  $sm[]="miercoles";
  for($f=0;$f<count($sm);$f++){
    if ($f==0){
         echo $sm[$f];
	     echo"<br>";
	}
	else{
	    if ($f==2){
		 echo $sm[$f];
	     echo"<br>";
		}
	}
  }
?>

</body>
</html>

