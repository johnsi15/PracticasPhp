<html>
<head>
<title> pagina </title>
</head>
<body>
<?php
copy($_FILES['foto'] ['tmp_name'],$_FILES['foto'] ['name']);
echo "LA FOTO SE REGISTRO EN EL SERVIDOR.<br>";
$nom=$_FILES['foto'] ['name'];
echo "<img src=\"$nom\">";
?>
</body>
</html>
