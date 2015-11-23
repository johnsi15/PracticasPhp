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

// borramos una categoria
if ( !empty($_GET['del']) ) {
	
	$query  = "DELETE FROM `categorias` WHERE idCategoria = {$_GET['del']}";
	$result = mysql_query($query, $dbConn);
		
	header( 'Location: categorias.php?dele=true' );
	die;
	
}

// agregamos una categoria en la db
// si se envio el formulario
if ( !empty($_POST['submit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['nombre']) ) 	$nombre 	= $_POST['nombre'];
	
	// completamos la variable error si es necesario
	if ( empty($nombre) ) 	$error['nombre'] 		= 'Es obligatorio completar el nombre de la categor&iacute;a';
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// inserto los datos de registro en la db
		$query  = "INSERT INTO `categorias` (valor) VALUES ('$nombre')";
		$result = mysql_query($query, $dbConn);
		
		header( 'Location: categorias.php?add=true' );
		die;
		
	}
		
}

if ( !empty($_POST['submitEdit']) ) {
	
	// definimos las variables
	if ( !empty($_POST['nombre']) ) 		$nombre 		= $_POST['nombre'];
	if ( !empty($_POST['idCategoria']) ) 	$idCategoria 	= $_POST['idCategoria'];
	
	// completamos la variable error si es necesario
	if ( empty($nombre) ) 		$error['nombre'] 		= 'Es obligatorio completar el nombre de la categor&iacute;a';
	if ( empty($idCategoria) ) 	$error['idCategoria'] 	= 'Falta la ID de la categor&iacute;a';
	
	// si no hay errores registramos al usuario
	if ( empty($error) ) {
		
		// inserto los datos de registro en la db
		$query  = "UPDATE `categorias` set valor = '$nombre' WHERE idCategoria = $idCategoria";
		$result = mysql_query($query, $dbConn);
		
		header( 'Location: categorias.php?edit=true' );
		die;
		
	}
		
}

// traemos listado de categorias
$arrCategorias = array();
$query = "SELECT idCategoria, valor FROM `categorias` ORDER BY valor ASC";
$resultado = mysql_query ($query, $dbConn);
while ( $row = mysql_fetch_assoc ($resultado)) {
	array_push( $arrCategorias,$row );
}

// si tenemos una categoria puntual
if ( !empty($_GET['id']) ) {
	// traemos una categoria
	$query = "SELECT idCategoria, valor FROM `categorias` WHERE idCategoria = {$_GET['id']}";
	$resultado = mysql_query ($query, $dbConn);
	$row = mysql_fetch_assoc ($resultado);
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
	<p>Bienvenido <?= $arrUsuario['usuario'] ?> - <a href="index.php">Panel de control</a> - <a href="../index.php?salir=true">Salir</a></p>
	<h2>Categor&iacute;as</h2>
	<? if ( !empty($_GET['add']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La categor&iacute;a se agreg&oacute; con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['dele']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La categor&iacute;a ha sido borrada con &eacute;xito.</div>
	<? } elseif ( !empty($_GET['edit']) ) { ?>
	<div style="background-color: #fdfdfd;border:1px solid #ff8800;width:90%;padding:5px">La categor&iacute;a ha sido editada con &eacute;xito.</div>
	
	<? } ?>
	
	<div>
		<h3>Listado de Categor&iacute;as</h3>
		<table style="width:90%;padding:5px;border:1px solid #cccccc">
			<tr>
				<th style="background-color:#cccccc;padding:5px;">id</th>
				<th style="width:90%;background-color:#cccccc;padding:5px;">categor&iacute;a</th>
				<th style="background-color:#cccccc;padding:5px;width:10%"></th>
			</tr>
			<? foreach ($arrCategorias as $categoria) { ?>
			<tr>
				<td style="padding:5px;"><? echo $categoria['idCategoria']; ?></td>
				<td style="padding:5px;"><? echo $categoria['valor']; ?></td>
				<td style="padding:5px;"><a href="categorias.php?id=<? echo $categoria['idCategoria']; ?>">Editar</a> - <a href="categorias.php?del=<?= $categoria['idCategoria'] ?>">Borrar</a>
			</tr>
			<? } ?>
		</table>
	</div>
	
	<? if ( empty($_GET['id']) ) { ?>
		<div>
			<h3 id="add">Agregar nueva categor&iacute;a</h3>
			<? if (!empty($error)) { ?>
				<ul>
				<? foreach ($error as $mensaje) { ?>
					<li><?= $mensaje ?></li>
				<? } ?>
				</ul>
			<? } ?>
			<form action="categorias.php" method="post">
			
				<p>
					<label for="nombre">Nombre de la categor&iacute;a</label><br />
					<input name="nombre" type="text" value="" />
				</p>
				<p>
					<input name="submit" type="submit" value="Agregar" />
				</p>
			</form>
		</div>
	<? } ?>
	
	<? if ( !empty($_GET['id']) ) { ?>
		<div style="background-color:#ff8800;padding:5px; margin-top:10px;">
			<h3 id="add">Editar categor&iacute;a</h3>
			<? if (!empty($error)) { ?>
				<ul>
				<? foreach ($error as $mensaje) { ?>
					<li><?= $mensaje ?></li>
				<? } ?>
				</ul>
			<? } ?>
			<form action="categorias.php" method="post">
				<p>
					<label for="nombre">Nombre de la categor&iacute;a</label><br />
					<input name="nombre" type="text" value="<? echo $row['valor']; ?>" />
				</p>
				<p>
					<input name="idCategoria" type="hidden" value="<? echo $row['idCategoria']; ?>" />
					<input name="submitEdit" type="submit" value="Editar" />
				</p>
			</form>
		</div>
	<? } ?>
	
</body>
</html>
