<?php
// Conexion a la base de datos
require_once('../controller/bdd.php');

$id_usuario = "Jhonny Andres Ospina Loaiza"; //falta agregar desde la session
$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
$formato = "Y-m-d H:i:s"; //formato de la fecha. 			
@$fecha_creacion = gmdate($formato,time()+($zona_horaria*3600));//obtiene fecha y hora del servidor

if (isset($_POST['comentario']) && isset($_POST['title']) && isset($_POST['id_tarea'])){
	
	$id = $_POST['id_tarea'];
	$title = $_POST['title'];
	$comentario = $_POST['comentario'];
	
	$sql = "INSERT INTO respuestas(id_tarea, comentario, fecha) values ($id, '$comentario','$fecha_creacion')";
			
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
		echo "OK";
	}
	
	
}

	
?>
