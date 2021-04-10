<?php
// Conexion a la base de datos
require_once('../controller/bdd.php');
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];

	
	if (isset($_POST['eliminar']) && isset($_POST['id'])){
		
		$id = $_POST['id'];
		
		$sql = "DELETE FROM tareas WHERE id = $id";
		$query = $bdd->prepare( $sql );
		if ($query == false) {
			print_r($bdd->errorInfo());
			die ('Erreur prepare');
		}
		$res = $query->execute();
		if ($res == false) {
			print_r($query->errorInfo());
			die ('Erreur execute');
		}
		else{
			echo "OK";
		}
		
	}
	
?>
