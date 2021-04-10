<?php
// Conexion a la base de datos
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];
require_once('../controller/bdd.php');

if (isset($_POST['eliminar']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	echo $sql = "DELETE FROM tareas WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
		print_r($bdd->errorInfo());
		die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
		print_r($query->errorInfo());
		die ('Erreur execute');
	}else{
		echo "OK";
	}
	
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id']) && isset($_POST['start']) && isset($_POST['end'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE tareas SET  title = '$title', color = '$color', start = '$start', end = '$end' WHERE id = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
		print_r($bdd->errorInfo());
		die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die ('Erreur execute');
	}else{
		echo "OK";
	}

}

	
?>
