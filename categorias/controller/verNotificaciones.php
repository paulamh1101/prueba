<?php
require_once('../controller/bdd.php');
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
  //header('Location: ../../index.html');
}
$usuario = $_SESSION['usuario']; 
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>
	<!-- Style CSS -->
	<link href='../css/style.css' rel='stylesheet' />
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	
	<script src="../js/sweetalert.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="../js/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/notificacion_chat.css">
	<!-- Custom styles for this template-->
	<style>
    body {
        padding-top: 70px;
		background-color: #fff;
		color: #5a471d;
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
	.fc-view-container {
		background-color: #fff;
	}
	div.scroll {
		margin-left: 120px;
		width: 400px;
		height: 200px;
		overflow: scroll;
	}
    </style>



</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #e7931a">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navba" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only>"> Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <button type="submit" class="btn btn-danger btn-lg">Intranet Panadería La Victoria </button>
			</div>
			<div id="navbar" class="navbar-collapse collapse" >
				<div class="navbar-form navbar-right">
					<div class="form-group">
						<div class="demo-content navbar-brand">
						   <div id="notification-header">
								<div style="position:relative">
									<button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><div class="colorrojo"><span id="notification-count"><?php if(@$count>0) { echo @$count; } ?></span></div><img src="../images/icono.png" /></button>
									<div id="notification-latest"></div>
								</div>          
						   </div>
						</div>
						<?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
						<?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
					</div>
					<div class = "form-group">
					  <button type="button" class="btn btn-danger"><a href="../../PanelUsuario.php"><font color= "white">Inicio</a></font></button>
					</div>
					<button type="button" class="btn btn-danger"><a href="../../scripts/cerrar-sesion.php"><font color= "white">Cerrar Sesión</a></font></button>
				</div>
			</div>
        </div>
        <!-- /.container -->
    </nav>
	                       

    <!-- Page Content -->
    <div class="container">
		<h2>Notificaciones</h2>           
		<table class="table table-bordered table-hover" id="paginacion">
		<thead>
		  <tr>
			<th># Tarea</th>
			<th>Observación</th>
			<th>Fecha</th>
		  </tr>
		</thead>
		<tbody>
			
			<?php
				$sql = "SELECT DISTINCT tar.id, tar.title, tar.descripcion, noti.fecha, tar.prioridad, tar.estado, noti.observacion, tar.tipo FROM notificaciones as noti
						 LEFT JOIN tareas_usuarios as trausu
						 ON noti.id_tareas = trausu.id_tareas
						 LEFT JOIN tareas as tar
						 ON trausu.id_tareas = tar.id
						 WHERE trausu.id_usuarios = '".$usuario."'
						 ORDER BY noti.fecha ASC";

				$req = $bdd->prepare($sql);
				$req->execute();

				$events = $req->fetchAll();
				foreach($events as $row):
					if($row["tipo"] == "tarea"){ 
						echo '<tr>';
							echo '<td><a href="../tareas/detalleTarea.php?id='.$row["id"].'&pag=notificaciones">'.$row["id"].'</a></td>';
							echo '<td>'.$row["observacion"].'</td>';
							//echo '<td style="background-color: '.$row["color"].'"><b>'.$row["estado"].'</b></td>';
							echo '<td>'.$row["fecha"].'</td>';
						echo '</tr>';
					}else if($row["tipo"] == "reunion"){
						echo '<tr>';
							echo '<td><a href="../reuniones/detalleReunion.php?id='.$row["id"].'&pag=notificaciones">'.$row["id"].'</a></td>';
							echo '<td>'.$row["observacion"].'</td>';
							//echo '<td style="background-color: '.$row["color"].'"><b>'.$row["estado"].'</b></td>';
							echo '<td>'.$row["fecha"].'</td>';
						echo '</tr>';
					}
				endforeach;
			?>
		</tbody>
		</table>        
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="../js/popper.min.js"></script>
	
	 <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
	<script>
	function myFunction() {
        $.ajax({
          url: "../controller/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
				if(data != ''){
					$("#notification-count").remove();                  
					$("#notification-latest").show();$("#notification-latest").html(data);
				}else{
					swal({
					  title: "No hay notificaciones!",
					  text: "",
					  type: "info",
					  showCancelButton: false,
					  closeOnConfirm: false,
					  closeOnCancel: false
					})
				}
           
          },
          error: function(){}           
        });
      }
	  
		$(document).ready(function() {
			$('#paginacion').DataTable({
				"order":[[2,"desc"]],
				"language": {
					"decimal": "",
					"emptyTable": "No hay información",
					"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
					"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
					"infoFiltered": "(Filtrado de _MAX_ total entradas)",
					"infoPostFix": "",
					"thousands": ",",
					"lengthMenu": "Mostrar _MENU_ Entradas",
					"loadingRecords": "Cargando...",
					"processing": "Procesando...",
					"search": "Buscar:",
					"zeroRecords": "Sin resultados encontrados",
					"paginate": {
						"first": "Primero",
						"last": "Ultimo",
						"next": "Siguiente",
						"previous": "Anterior"
					}	
					
				}
			});
		} );
		
		
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });
// Notificacion chat
$(document).ready(function(){
	$('#conversacion').hide();

	
	var wsUri = "ws://localhost:9000/intranet/categorias/chat/server.php"; 	
	websocket = new WebSocket(wsUri); 
	
	websocket.onopen = function(ev) { // connection is open 
		
	}
	
	//#### Message received from server?
	websocket.onmessage = function(ev) {
		var msg = JSON.parse(ev.data); //PHP sends Json data
		var type = msg.type; //message type
		var umsg = msg.message; //message text
		var uname = msg.name; //user name
		var upara = msg.para; //para
		var ude = msg.de; //id usuario sesion
		var unombre_user_sesion = msg.nombre_user_sesion;
		var id_user_sesion = '<?php print $_SESSION['id']; ?>';
		var nombre_user_sesion = '<?php print $_SESSION['usuario']; ?>';
		
		var hoy = new Date();
		var anio = hoy.getFullYear();
		var mes = hoy.getMonth() + 1;
		var mes = mes + 1 < 10 ? ("0" + mes) : mes;
		var dia = hoy.getDate();
		var dia = dia + 1 < 10 ? ("0" + dia) : dia;
		var hour = hoy.getHours();
		var hour = hour + 1 < 10 ? ("0" + hour) : hour;
		var minutos = hoy.getMinutes();
		var minutos = minutos + 1 < 10 ? ("0" + minutos) : minutos;
		var segundos = hoy.getSeconds();
		var segundos = segundos + 1 < 10 ? ("0" + segundos) : segundos;
		var hora = hour + ':' + minutos + ':' + segundos;
		var fecha = anio + "-" + mes + "-" + dia;
		var fechaYhora = fecha + ' ' + hora;
		//Obteniendo una variable con la máscara d-m-Y H:i:s
		
		if(type == 'usermsg' && ude == id_user_sesion) 
		{
						
		}
		if(type == 'usermsg' && upara == id_user_sesion) 
		{
			$('.borrar').empty()
			$('body').append('<a href="../chat/chat.php"><div id="conversacion" class="alert alert-danger alert-dismissible"><b>Mensaje chat <span>'+ hora +'</b></span><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			$('#conversacion').show();
			$('#conversacion').append('<div class=\"ventana\" class="direct-chat-msg"></div><span class="direct-chat-name pull-left">'+unombre_user_sesion+': '+ umsg +'</span><br></a>');
			
			
			var audio = new Audio('../chat/sounds/notify.mp3');
			setTimeout(function() {
				audio.play();
			}, 0);
			//$('#conversacion').hide(1500);
		}
		
		
	};
	
	websocket.onerror	= function(ev){$('#conexion').append("<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Error: No se ha establecido la comunicación - "+ev.data+"</div>");}; 
	websocket.onclose 	= function(ev){$('#conexion').append("<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Conexión cerrada: Comuniquese con el administrador del sistema</div>");}; 
	
});	
	  
</script>
</body>

</html>
