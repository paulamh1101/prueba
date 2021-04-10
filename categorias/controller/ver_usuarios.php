<?php

// Conexion a la base de datos
require_once('bdd.php');
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
  //header('Location: ../../index.html');
}
$usuario = $_SESSION['usuario'];
	
	
	$id_tarea = $_POST['id_tarea'];
	$sql3 = "SELECT usuario FROM usuarios where usuario != '$usuario'";
	$req3 = $bdd->prepare($sql3);
	$req3->execute();
	$usuarios3 = $req3->fetchAll();
	
	$i = 1;
	$select = 'checkbox'.$i;
	foreach($usuarios3 as $row):
		$sql2 = "SELECT tarusu.id_usuarios as usuario2, tar.creado_por as creador FROM tareas as tar
				 INNER JOIN tareas_usuarios as tarusu
				 on tar.id = tarusu.id_tareas			 
				 where tar.id = ".$id_tarea." and tarusu.id_usuarios = '".$row['usuario']."'";
		$req2 = $bdd->prepare($sql2);
		$req2->execute();
		$usuarios2 = $req2->fetchAll();
		$num_rows =  $req2->rowCount();
		if($num_rows != 0){
			foreach($usuarios2 as $row2):
				if($row2['creador'] != $usuario){
					echo '<input type="checkbox" name="check_list[]" id="check_list[]" value="'.$row2['usuario2'].'" checked disabled> '.$row2['usuario2'].'<br>';
				}else{
					echo '<input type="checkbox" name="check_list[]" id="check_list[]" value="'.$row2['usuario2'].'" checked> '.$row2['usuario2'].'<br>';
				}
			endforeach;
		}else{
			echo '<input type="checkbox" name="check_list[]" id="check_list[]" value="'.$row['usuario'].'"> '.$row['usuario'].'<br>';
		}
	endforeach;
	$i++;

?>


