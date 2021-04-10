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
			die ('Error prepare');
		}
		$sth = $query->execute();
		if ($sth == false) {
			print_r($query->errorInfo());
			die ('Error execute');
		}else{
		
			$sql = "SELECT DISTINCT usuario FROM notificaciones
				WHERE id_tareas = '".$id."'";

			$req = $bdd->prepare($sql);
			$req->execute();

			$usuarios = $req->fetchAll();
			foreach($usuarios as $row):
				$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id, '$fecha_creacion','$id_usuario ha realizado cambios a la reunión: $title', '".$row['usuario']."')";
				
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

	}

	
?>
