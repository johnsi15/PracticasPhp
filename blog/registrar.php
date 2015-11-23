<?php

// archivos necesarios
require_once 'admin/config.php';
require_once 'admin/conexion.php';

// obtengo puntero de conexion con la db
$dbConn = conectar();

// si se envio el formulario
if ( !empty($_POST['submit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['usuario']) ) 	$usuario 	= $_POST['usuario'];
	if ( !empty($_POST['password']) )	$password 	= $_POST['password'];
	if ( !empty($_POST['re-password']) )$rePassword = $_POST['re-password'];
	if ( !empty($_POST['email']) )		$email		= $_POST['email'];
	
	// completamos la variable error si es necesario
	if ( empty($usuario) ) 	$error['usuario'] 		= 'Es obligatorio completar el nombre de usuario';
	if ( empty($password) ) $error['password'] 		= 'Es obligatorio completar la contraseña';
	if ( empty($email) )	$error['email']			= 'Es obligatorio completar el email';
	if ( $_POST['password'] != $_POST['re-password'] ) {
		$error['re-password'] = 'La contrase&ntilde;a no coincide';
	}
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// inserto los datos de registro en la db
		$query  = "INSERT INTO `usuarios` (usuario,password,email) VALUES ('$usuario','".md5($password)."','$email')";
		$result = mysql_query($query, $dbConn);
		
		header( 'Location: index.php?registro=true' );
		die;
		
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

	<h1>Registro de Usuario</h1>
	
	<? if (!empty($error)) { ?>
		<ul>
		<? foreach ($error as $mensaje) { ?>
			<li><?= $mensaje ?></li>
		<? } ?>
		</ul>
	<? } ?>
	
	<form action="registrar.php" method="post">
	
		<p>
			<label for="usuario">Nombre de usuario</label><br />
			<input name="usuario" type="text" value="<? if ( ! empty($usuario) ) echo $usuario; ?>" />
		</p>
		<p>
			<label for="password">Contrase&ntilde;a</label><br />
			<input name="password" type="password" value="<? if ( ! empty($password) ) echo $password; ?>" />
		</p>
		<p>
			<label for="re-password">Repetir Contrase&ntilde;a</label><br />
			<input name="re-password" type="password" value="<? if ( ! empty($rePassword) ) echo $rePassword; ?>" />
		</p>
		<p>
			<label for="email">Correo Electr&oacute;nico</label><br />
			<input name="email" type="text" value="<? if ( ! empty($email) ) echo $email; ?>" />
		</p>
		<p>
			<input name="submit" type="submit" value="Reg&iacute;strate" />
		</p>
		
	</form>


</body>
</html>
