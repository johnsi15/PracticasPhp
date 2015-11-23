html>
<head>
<title> FORMULARIO SUMA  </title>
</head>
<body background="Imagenes/wallpaper_wolfenstein_01_1920x1080.jpg" >
 <center><h1><font color="red"> FORMULARIO PARA REALIZAR CUATRO OPERACIONES </h1></center></font>
 <br>
 <br>
     <font color="blue" size="4" face="Action Jackson"> <b> ELIJA SU OPCION </font> </b>
	 
  <form action="4 operaciones.php" method="post">
     <br>
      <INPUT TYPE="RADIO" NAME="opcion1" VALUE="1">
	  <font color="red">  suma </font>
      <INPUT TYPE="RADIO" NAME="opcion1" VALUE="2">
	    <font color="red">  resta </font>
	  <INPUT TYPE="RADIO" NAME="opcion1" VALUE="3">
	    <font color="red">  multiplicaion </font>
      <INPUT TYPE="RADIO" NAME="opcion1" VALUE="4">
	    <font color="red">  division </font>
	     <br>
		 <br>
	       <font face="arial" size=6 color="red"> <b> Escriba el numero "a" aqui  </b> </font> 
		 <input type="text" name="a">
		 <br>
		 
		   <font face="arial"size=6 color="red"> <b> Escriba el  numero "b" aqui </b> </font>
		 <input type="text" name="b">		 
		 <br>
		 <br>
		 <input type="submit">
		 <input type="reset">
</form>		 
</body>
</html>