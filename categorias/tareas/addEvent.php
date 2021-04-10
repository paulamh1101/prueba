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

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['descripcion']) && isset($_POST['prioridad']) && isset($_POST['check_list'])){
	
	$title = trim($_POST['title']);
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = "red";
	$estado = "Pendiente";
	$descripcion = trim($_POST['descripcion']);
	$prioridad = $_POST['prioridad'];
	$id_persona = $_POST['check_list'];
	$id_usuario = $_SESSION['usuario'];
	
	
	$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
	$formato = "Y-m-d H:i:s"; //formato de la fecha. 			
	@$fecha_creacion = gmdate($formato,time()+($zona_horaria*3600));//obtiene fecha y hora del servidor
	//$fecha_creacion = date('Y-m-d H:i:s'); 
	$start = $fecha_creacion;
	$end = $fecha_creacion;
	$n = count($id_persona);
	
	$sql3 = "INSERT INTO tareas(title, start, end, color, descripcion, prioridad, estado, creado_por, fecha_creacion, tipo) values ('$title', '$start', '$end', '$color', '$descripcion', '$prioridad', '$estado', '$id_usuario', '$fecha_creacion', 'tarea')";
	$query = $bdd->prepare( $sql3 );
	if ($query == false) {
		print_r($bdd->errorInfo());
		die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die ('Error');
	}
	
	$sql2 = "SELECT id FROM tareas where creado_por = '$id_usuario' and fecha_creacion = '$fecha_creacion' order by id DESC LIMIT 1";
	$req2 = $bdd->prepare($sql2);
	$req2->execute();
	$id_tarea = $req2->fetchColumn();
	
	
		
	//agregar usuario sesion
	$sql = "INSERT INTO tareas_usuarios(id_tareas,id_usuarios) values ($id_tarea, '$id_usuario')";

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
				$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha creado la tarea: $id_tarea', '$id_persona[$i]')";
	
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
		}
		$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha creado la tarea: $id_tarea', '$id_usuario')";
	
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
					  text: "Su número de tarea es: '.$id_tarea.', para realizar el seguimiento a su solicitud!",
					  type: "info",
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
	}else{
		echo "<br>";
		echo '<script>
					swal({
					  title: "Error!",
					  text: "Error al momento de insertar",
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



/*swal({   
			title: "Recuerde su número de tarea es: $id_tarea, para realizar el seguimiento a su solictud",
			type: "warning",   
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Aceptar",  
			closeOnConfirm: false,
			allowEscapeKey: false
		})</script>*/
//echo "<script>alert (' Recuerde su número de tarea es: $id_tarea, para realizar el seguimiento a su solictud');</script>";
//header('Location: '.$_SERVER['HTTP_REFERER']);
//echo "<script>location.href = 'index.php';</script>";
//header('Location: index.php?id='.$id_tarea);
	
?>
