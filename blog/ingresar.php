<?php

// iniciamos sesiones
session_start ();

// archivos necesarios
require_once 'admin/config.php';
require_once 'admin/conexion.php';
require_once 'admin/esUsuario.php';

// obtengo puntero de conexion con la db
$dbConn = conectar();

// verificamos que no este conectado el usuario
if ( !empty( $_SESSION['usuario'] ) && !empty($_SESSION['password']) ) {
	if ( esUsuario( $_SESSION['usuario'], $_SESSION['password'] ) ) {
		header( 'Location: index.php' );
		die;
	}
}

// si se envio el formulario
if ( !empty($_POST['submit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['usuario']) ) 	$usuario 	= $_POST['usuario'];
	if ( !empty($_POST['password']) )	$password 	= $_POST['password'];
	
	// completamos la variable error si es necesario
	if ( empty($usuario) ) 	$error['usuario'] 		= 'Es obligatorio completar el nombre de usuario';
	if ( empty($password) ) $error['password'] 		= 'Es obligatorio completar la contraseña';
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// verificamos que los datos ingresados corresopndan a un usuario
		if ( $arrUsuario = esUsuario($usuario,md5($password),$dbConn) ) {
			
			// definimos las sesiones
			$_SESSION['usuario'] 	= $arrUsuario['usuario'];
			$_SESSION['password']	= $arrUsuario['password'];
			
			header('Location: index.php');
			die;
			
		} else {
			$error['noExiste'] 		= 'El nombre de usuario o contrase&ntilde;a no coinciden';
		}
		
	}
		
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Blog Personal</title>
</head>

<body>

	<h1>Inicio de sesión</h1>
	
	<? if (!empty($error)) { ?>
		<ul>
		<? foreach ($error as $mensaje) { ?>
			<li><?= $mensaje ?></li>
		<? } ?>
		</ul>
	<? } ?>
	
	<form action="ingresar.php" method="post">
	
		<p>
			<label for="usuario">Nombre de usuario</label><br />
			<input name="usuario" type="text" value="<? if ( ! empty($usuario) ) echo $usuario; ?>" />
		</p>
		<p>
			<label for="password">Contrase&ntilde;a</label><br />
			<input name="password" type="password" value="<? if ( ! empty($password) ) echo $password; ?>" />
		</p>
		<p>
			<input name="submit" type="submit" value="Ingresar" />
		</p>
		
	</form>


</body>
</html>
