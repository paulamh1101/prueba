<?php
	session_start();
	//incluir el archivo bdd.php para conectarse a la base de datos
	require_once('bdd.php');

			
	$_SESSION["verificador"]="NO";
	
	//Tomamos los datos del formulario
	
	@$usuario = $_POST['usuario'];
	@$contrasena = $_POST['contrasena'];
			
	//se quitan caracteres especiales
	$usuario = trim($usuario);
	$usuario = stripslashes($usuario);
	$usuario = htmlspecialchars($usuario);
	$usuario = addslashes($usuario);
	$contrasena = trim($contrasena);
	$contrasena = stripslashes($contrasena);
	$contrasena = htmlspecialchars($contrasena);
	$contrasena = addslashes($contrasena);
	
	$sql = "SELECT id usuario, clave FROM usuarios WHERE usuario='$usuario' and clave= '$contrasena'";
		
	$query = $bdd->prepare( $sql );
	if ($query == false) {
		print_r($bdd->errorInfo());
		die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die ('Error');
	}else{
		$_SESSION["verificador"] = "SI";
		$_SESSION["id"] = $row[0];
		$_SESSION["usuario"] = $row[1];
		$_SESSION["clave"] = $row[2];
	}

?>