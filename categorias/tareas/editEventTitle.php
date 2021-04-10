<?php
// Conexion a la base de datos
require_once('../controller/bdd.php');

require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];
$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
$formato = "Y-m-d H:i:s"; //formato de la fecha. 			
@$fecha_creacion = gmdate($formato,time()+($zona_horaria*3600));//obtiene fecha y hora del servidor
$insertar = 0;

if (isset($_POST['color']) && isset($_POST['title']) && isset($_POST['id_tarea'])){
	
	$id = $_POST['id_tarea'];
	$color = $_POST['color'];
	$title = $_POST['title'];
	
	if($_POST['color'] ==  "#08f508"){
		$estado = "Terminado";
	}else if($_POST['color'] ==  "yellow"){
		$estado = "En proceso";
	}else if($_POST['color'] ==  "red"){
		$estado = "Pendiente";
	}
	
	$sql = "UPDATE tareas SET title = '$title', color = '$color', estado = '$estado' WHERE id = $id ";

	$query = $bdd->prepare( $sql );
	if ($query == false) {
		 print_r($bdd->errorInfo());
		 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		 print_r($query->errorInfo());
		 die ('Erreur execute');
	}
	
	$sql = "SELECT DISTINCT usuario FROM notificaciones
			WHERE id_tareas = '".$id."'";

	$req = $bdd->prepare($sql);
	$req->execute();

	$usuarios = $req->fetchAll();
	foreach($usuarios as $row):
		$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id, '$fecha_creacion','$id_usuario ha cambiado el estado a la tarea $id a: $estado', '".$row['usuario']."')";
		
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
			$insertar = 1;
		}
	endforeach;
	
	if($insertar == "1"){
		echo "OK";
	}
}

	
?>
