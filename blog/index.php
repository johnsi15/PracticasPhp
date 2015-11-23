<?

// iniciamos session
session_start ();

// archivos necesarios
require_once 'admin/config.php';
require_once 'admin/conexion.php';
require_once 'admin/esUsuario.php';

// obtengo puntero de conexion con la db
$dbConn = conectar();

// vemos si el usuario quiere desloguar
if ( !empty($_GET['salir']) ) {
	// borramos y destruimos todo tipo de sesion del usuario
	session_unset();
	session_destroy();
}

// verificamos que no este conectado el usuario
if ( !empty( $_SESSION['usuario'] ) && !empty($_SESSION['password']) ) {
	$arrUsuario = esUsuario( $_SESSION['usuario'], $_SESSION['password'], $dbConn );		
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Blog Personal</title>
</head>

<body>

	<h1>Blog Personal</h1>
	
	<? if ( !empty($_GET['registro']) ) { ?>
	<div>El registro ha sido exitoso.</div>
	<? } ?>
	
	<? if ( empty($arrUsuario['usuario']) ) { ?>
	<ul>
		<li><a href="ingresar.php">Iniciar sesi&oacute;n</a></li>
		<li><a href="registrar.php">Reg&iacute;strate gratis</a></li>
	</ul>
	<? } else { ?>
	<p>Bienvenido <?= $arrUsuario['usuario'] ?> - <a href="index.php?salir=true">Salir</a></p>
		<? if ( $arrUsuario['tipo'] == 'admin' ) { ?>
		<ul>
			<li><a href="admin/index.php">Panel de administraci&oacute;n</a></li>
		</ul>
		<? } ?>
	<? } ?>

</body>
</html>
