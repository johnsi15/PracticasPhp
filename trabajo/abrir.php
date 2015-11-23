<?php
//abrimnos el directerorio
$dir = opendir ("img/");
//recorremos el directorio
$i=0;
while ($elemento = readdir($dir)){
	//echo $elemento . "<BR>";
	$A[$i]=$elemento;
	$i++;
}
closedir($dir);
$n=count($A);
for ($i=0; $i<=$n; $i++){
	
	echo "$A[$i] <br>";
	echo "<img src=img/$A[$i]> <br>";
}
?>
