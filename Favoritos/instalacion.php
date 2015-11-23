<?php
  //CREAR UNA TABLA DE FAVORITOS____________________________
  //conexion
    $conexion =mysql_connect('localhost','root','andrey') or die ('Ha sido imposible establecer la conexion');
    //CREAR BASE DE DATOS_________________________________   
	$basededatos="CREATE DATABASE favoritos;";
if (mysql_query($basededatos,$conexion)){
     mysql_select_db("favoritos",$conexion) or die ('problema con la selecion de la base de datos');  
  //tabla
   $consulta=
    " 
    CREATE TABLE favoritos(
	  usuario char (40)PRIMARY KEY, 
	  contrasena char (40) Not Null,
	  titulo char (40) Not Null,
	  direccion char (100) Not Null,
	  categoria char (40),
	  comentario char (200),
	  valoracion Int
	)";
  //insertar contenido de la tabla
   $resultado=mysql_query($consulta,$conexion);
  //cerrar la conexion
  if($resultado)
     echo "Se Creo la Base de Datos y se creo la Tabla de Favoritos"; 
}
  mysql_close($conexion);
  //CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS
    //establecer
	  $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
       mysql_select_db("favoritos",$conexion) or die ('problema con la selecion de la base de datos');
    //preparar
	  $consulta=
	   "
	     insert into favoritos values ('john','andrey','google','http://www.google.com','Tecnologia','Este es mi primir usuario',10);
		 insert into favoritos values ('john2','andrey','hotmail','http://www.hotmail.com','Tecnologia','Este es mi hotmail',10)
		";
	//insertar
        $resultado=mysql_query($consulta,$conexion);
	//cerrar
	if ($resultado)
	    echo "<br> Inserto los datos completos";
         mysql_close($conexion);	
  //CREAR UNA TABLA DE USUARIOS______________________________
  //conexion
    $conexion=mysql_connect("localhost","root","andrey") or die ("Problemas con la conexion");
	mysql_select_db("favoritos",$conexion) or die ("problemas con la selecion de la base de datos usuarios"); 
  //tabla
      $consulta=
    " 
    CREATE TABLE usuarios(
	  usuario char (40)PRIMARY KEY, 
	  contrasena char (40) Not Null,
	  nombre char (40) Not Null,
	  apellido char (100) Not Null,
	  edad Int,
	  permisos Int
	)";
  //insertar contenido de la tabla
     $resultado=mysql_query($consulta,$conexion);
    if ($resultado)
	    echo "<br>Se creo la tabla de Usuarios";
  //cerrar la conexion
     mysql_close($conexion);
 //CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS
   //establecer
	  $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
	  mysql_select_db("favoritos",$conexion) or die ('problema con la selecion de la base de datos');
    //preparar
	  $consulta=
	   "
	    insert into usuarios values ('Andrey','1234','john','serrano',19,1)
		";
	//insertar
        $resultado=mysql_query($consulta,$conexion);
	//cerrar
	if ($resultado)
	    echo "<br> Inserto los datos completos";
         mysql_close($conexion);	
  //CREAR UNA TABLA DE LOGS___________________________________
  //conexion
    $conexion=mysql_connect("localhost","root","andrey") or die ("Problemas con la conexion");
	mysql_select_db("favoritos",$conexion) or die ("problemas con la selecion de la base de datos usuarios"); 
  //tabla
      $consulta=
    " 
    CREATE TABLE logs(
	  utc Int, 
	  anio Int,
	  mes Int,
	  dia Int,
	  hora Int,
	  minuto Int,
	  segundo Int,
	  ip char(50),
	  navegador char(100),
	  usuario char(40) PRIMARY KEY,
	  contraseña char(40)
	)";
  //insertar contenido de la tabla
     $resultado=mysql_query($consulta,$conexion);
    if ($resultado)
	    echo "<br>Se creo la tabla de Logs";
  //cerrar la conexion
     mysql_close($conexion);
 //CONTENIDO DE PRUEBA PARA LA TABLA DE LOGS
   //establecer
	  $conexion=mysql_connect("localhost","root","andrey") or die ("Problema con la conexion");
	  mysql_select_db("favoritos",$conexion) or die ('problema con la selecion de la base de datos');
    //preparar
	  $consulta=
	   "
	    insert into logs values (00000,2011,02,07,19,3,03.00,'120.0.0.1','chrome','john3','andrey')
		";
	//insertar
        $resultado=mysql_query($consulta,$conexion);
	//cerrar
	if ($resultado)
	    echo "<br> Inserto los datos completos";
         mysql_close($conexion);
  //conexion
  //tabla
  //insertar contenido de la tabla
  //cerrar la conexion
?>