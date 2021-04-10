<?php
// Conexion a la base de datos
require_once('bdd.php');
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
  //header('Location: ../../index.html');
}
$usuario = $_SESSION['usuario'];

$sql = "UPDATE notificaciones SET estado = 1 WHERE estado = 0 AND usuario = '$usuario'";		
$query = $bdd->prepare( $sql );
$sth = $query->execute();

$sql3 = "SELECT tar.id, tar.title, tar.descripcion, noti.fecha, tar.prioridad, tar.estado, noti.observacion, tar.tipo FROM notificaciones as noti
		 LEFT JOIN tareas as tar
		 ON noti.id_tareas = tar.id
		 WHERE noti.usuario = '$usuario'
		 ORDER BY noti.id_notificacion DESC limit 5";
$req3 = $bdd->prepare($sql3);
$req3->execute();
$notificacion = $req3->fetchAll();
$response='';

foreach($notificacion as $row):
	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d/m/Y H:i:s", strtotime($fechaOriginal));
	$response = $response; 
	if($row["tipo"] == "tarea"){ 
		$url = "<a href='../tareas/detalleTarea.php?id=".$row["id"]."&pag=tarea'>";
		$response = $response . $url ."<div class='notification-item'>" .
		"<div class='notification-subject'><b>". $row["observacion"] . "</b></span> </div>" .
		"<div class='notification-subject'><b>". $row["title"] . " - <span>". $fechaFormateada . "</b></span> </div>" .
		"<div class='notification-comment'>Prioridad: " . $row["prioridad"]  . "</div>" .
		"<div class='notification-comment'>" . $row["descripcion"]  . "</a></div>" .
		"</div>";
	}else if($row["tipo"] == "reunion"){
		$url = "<a href='../reuniones/detalleReunion.php?id=".$row["id"]."&pag=reunion'>";
		$response = $response . $url ."<div class='notification-item'>" .
		"<div class='notification-subject'><b>". $row["observacion"] . "</b></span> </div>" .
		"<div class='notification-subject'><b>". $row["title"] . " - <span>". $fechaFormateada . "</b></span> </div>" .
		"<div class='notification-comment'>Prioridad: " . $row["prioridad"]  . "</div>" .
		"<div class='notification-comment'>" . $row["descripcion"]  . "</a></div>" .
		"</div>";
	}
	
endforeach;
	
if(!empty($response)) {
	echo $response;
	echo "<div class='notification-item'><a href='../controller/verNotificaciones.php'>Ver más</a></div>";
}
?>