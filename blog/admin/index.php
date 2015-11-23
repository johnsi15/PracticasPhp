<?

// iniciamos session
session_start ();

// archivos necesarios
require_once 'config.php';
require_once 'conexion.php';
require_once 'esUsuario.php';

// obtengo puntero de conexion con la db
$dbConn = conectar();

// verificamos que no este conectado el usuario
if ( !empty( $_SESSION['usuario'] ) && !empty($_SESSION['password']) ) {
	$arrUsuario = esUsuario( $_SESSION['usuario'], $_SESSION['password'], $dbConn );
} 

// verificamos que sea un admin
if ( empty($arrUsuario) || $arrUsuario['tipo'] != 'admin' ) {
	header( 'Location: ../index.php' );
	die;
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
	<p>Bienvenido <?= $arrUsuario['usuario'] ?> - <a href="../index.php?salir=true">Salir</a></p>
	<ul>
		<li><a href="categorias.php">Administrar Categor&iacute;as</a></li>
	</ul>
	
</body>
</html>
