<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "redsocial";

global $connect;

$connect = mysqli_connect ($host, $dbuser, $dbpwd, $db);
	if(!$connect){
		echo ("No se ha conectado a la base de datos");
	}
?>