<?php

// Conexion a la base de datos
require '../../scripts/funciones.php';
    if(! haIniciadoSesion())
    {
      //header('Location: ../../index.html');
    }
// Conexion a la base de datos
require_once('../controller/bdd.php');


	if (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['id_persona'])){
		
		$title = $_POST['title'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$color = $_POST['color'];
		$id_persona = $_POST['id_persona'];
		$id_usuario = $_SESSION['usuario'];
		
		
		$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
		$formato = "Y-m-d H:i:s"; //formato de la fecha. 			
		@$fecha_creacion = gmdate($formato,time()+($zona_horaria*3600));//obtiene fecha y hora del servidor
		$n = count($id_persona);
		
		$sql3 = "INSERT INTO tareas(title, start, end, color, creado_por, fecha_creacion, tipo) values ('$title', '$start', '$end', '$color', '$id_usuario', '$fecha_creacion', 'reunion')";
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
				
					$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha creado la reunión: $id_tarea', '$id_persona[$i]')";
				
					$query = $bdd->prepare( $sql );
					if ($query == false) {
						print_r($bdd->errorInfo());
						die ('Erreur prepare');
					}
					$sth = $query->execute();
					if ($sth == false) {
						print_r($query->errorInfo());
						die ('Error');
					}
				}
			}
			$sql = "INSERT INTO notificaciones(id_tareas,fecha, observacion, usuario) values ($id_tarea, '$fecha_creacion','$id_usuario ha creado la reunión: $id_tarea', '$id_usuario')";
	
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
		//header('Location: index.php');
			
	}
	
?>
