<html>
<head>
<title> pagina </title>
</head>
<body>
<?php
copy($_FILES['foto']['tmp_name'],"img/".$_FILES ['foto'] ['name']);
echo "<br>LA FOTO SE REGISTRO EN EL SERVIDOR.<br>";
$nom="img/".$_FILES['foto']['name'];
echo "<img src=\"$nom\">";
?>

<?php
copy($_FILES ['foto2'] ['tmp_name'],"img/".$_FILES ['foto2'] ['name']);
echo "<br>LA FOTO SE REGISTRO EN EL SERVIDOR.<br>";
$nom="img/".$_FILES['foto2']['name'];
echo "<img src=\"$nom\">";
?>

<?php
copy($_FILES ['foto3'] ['tmp_name'],"img/".$_FILES ['foto3'] ['name']);
echo "<br>LA FOTO SE REGISTRO EN EL SERVIDOR.<br>";
$nom="img/".$_FILES['foto3']['name'];
echo "<img src=\"$nom\">";
?>
</body>
</html>
