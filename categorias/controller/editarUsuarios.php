<script src="../js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../js/sweetalert.css"> 
<?php
require '../../scripts/funciones.php';
    if(! haIniciadoSesion())
    {
      //header('Location: ../../index.html');
    }
// Conexion a la base de datos
require_once('../controller/bdd.php');
$insertar = 0;

$id_usuario = $_SESSION['usuario'];
$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
$formato = "Y-m-d H:i:s"; //formato de la fecha. 			
@$fecha_creacion = gmdate($formato,time()+($zona_horaria*3600));//obtiene fecha y hora del servidor

if (isset($_POST['check_list']) && isset($_POST['id_tarea']) && isset($_POST['pagina'])){
	
	$id_persona = $_POST['check_list'];
	$id_tarea = $_POST['id_tarea'];
	$pagina = $_POST['pagina'];
	$n = count($id_persona);
		
	$sql2 = "DELETE FROM tareas_usuarios where id_tareas = $id_tarea";
	$query = $bdd->prepare( $sql2 );
	if ($query == false) {
		 print_r($bdd->errorInfo());
		 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		 print_r($query->errorInfo());
		 die ('Error execute');
	}
	
	
	//agregar usuario sesion
	$sql = "INSERT INTO tareas_usuarios(id_tareas,id_usuarios) values ($id_tarea, '$id_usuario')";

	$query = $bdd->prepare( $sql );
	if ($query == false) {
		print_r($bdd->errorInfo());
		die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die ('Error');
	}else{
		
		for($i=0; $i < $n; $i++)
		{
			$sql = "INSERT INTO tareas_usuarios(id_tareas,id_usuarios) values ($id_tarea, '$id_persona[$i]')";
			
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
				$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha cambiado los usuarios asignados a la $pagina $id_tarea', '$id_persona[$i]')";
	
				$query = $bdd->prepare( $sql );
				if ($query == false) {
					print_r($bdd->errorInfo());
					die ('Error prepare');
				}
				$sth = $query->execute();
				if ($sth == false) {
					print_r($query->errorInfo());
					die ('Error');
				}
				$insertar = 1;
			}
			
		}
				
		$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha cambiado los usuarios asignados a la $pagina $id_tarea', '$id_usuario')";
	
		$query = $bdd->prepare( $sql );
		if ($query == false) {
			print_r($bdd->errorInfo());
			die ('Erreur prepare');
		}
		$sth = $query->execute();
		if ($sth == false) {
			print_r($query->errorInfo());
			die ('Error');
			$insertar = 0;
		}else{
			$insertar = 1;
		}
	}
	
	if($insertar == 1){
		echo "<br>";
		echo '<script>
					swal({
					  title: "Recuerde!",
					  text: "Se han cambiado los usuarios asignados a la tarea: '.$id_tarea.'!",
					  type: "info",
					  showCancelButton: false,
					  confirmButtonClass: "btn-danger",
					  confirmButtonText: "Ok",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
						location.href = "../'.$pagina.'/index.php";
					  } 
					})
			  </script>';
	}else{
		echo "<br>";
		echo '<script>
					swal({
					  title: "Error!",
					  text: "Error al momento de modificar usuarios",
					  type: "warning",
					  showCancelButton: false,
					  confirmButtonClass: "btn-danger",
					  confirmButtonText: "Ok",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
						location.href = "index.php";
					  } 
					})
			  </script>';
	}	
}

	
?>
