<?php

// Conexion a la base de datos
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];
require_once('../controller/bdd.php');

if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	
	$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];

	$sql = "UPDATE tareas SET  start = '$start', end = '$end' WHERE id = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die ('Error');
	}else{
		die ('OK');
	}

}
//header('Location: '.$_SERVER['HTTP_REFERER']);
	
?>

