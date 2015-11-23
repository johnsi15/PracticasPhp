<?php

function conectar () {
	
	$db_con = mysql_pconnect ("localhost","root","andrey");
	if (!$db_con) return false; 
	if (!mysql_select_db ("blog", $db_con)) return false;
	return $db_con; 

}

?>