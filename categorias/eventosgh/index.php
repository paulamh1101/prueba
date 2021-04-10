<?php
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];
require_once('../controller/bdd.php');


$sql = "SELECT id, title, start, end, color FROM tareas where tipo = 'gestionh'";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

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

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Style CSS -->
	<link href='../css/style.css' rel='stylesheet' />
	<!-- FullCalendar -->
	<link href='../css/fullcalendar.css' rel='stylesheet' />
	<script src="../js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../js/sweetalert.css"> 
	<link rel="stylesheet" type="text/css" href="../css/notificacion_chat.css">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
		background-color: #ebddc3;
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

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Eventos gestión humana</h1>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titulo" required>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					    <select name="color" class="form-control" id="color" required>
							<option value="">Seleccionar</option>
							<option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
							<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
							<option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
							<option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
							<option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
							<option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
							<option style="color:#000;" value="#000">&#9724; Negro</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
					<div class="col-sm-10">
					<?php
						$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
						$formato = "Y-m-d\TH:i"; //formato de la fecha
						@$fecha = gmdate($formato,time()+($zona_horaria*3600)); //obtener hora
					?>
					  <input type="datetime-local" name="start" class="form-control" min="<?php echo $fecha ?>" id="start" required>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fecha Final</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="end" class="form-control" min="<?php echo $fecha ?>" id="end" required>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="titlem" class="form-control" id="titlem" placeholder="Titulo">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="colorm" class="form-control" id="colorm">
						  <option value="">Seleccionar</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
					<div class="col-sm-10">
						<input type="text" name="start" class="form-control" id="start" disabled>
						<?php
							$zona_horaria = "-5".'<br>'; //Colombia GMT-5 
							$formato = "Y-m-d\TH:i"; //formato de la fecha
							@$fecha = gmdate($formato,time()+($zona_horaria*3600)); //obtener hora
						?>
						<input type="hidden" name="fechaactual" class="form-control" value="<?php echo $fecha ?>" id="fechaactual">
						<input type="datetime-local" name="start" class="form-control" min="<?php echo $fecha ?>" id="startm">
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fecha Final</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" disabled>
					  <input type="datetime-local" name="end" class="form-control" min="<?php echo $fecha ?>" id="endm">
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  id="delete" name="delete"> Eliminar Evento</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="btn_modificar">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='../js/moment.min.js'></script>
	<script src='../js/fullcalendar/fullcalendar.min.js'></script>
	<script src='../js/fullcalendar/fullcalendar.js'></script>
	<script src='../js/fullcalendar/locale/es.js'></script>
	
	
	<script>

	$(document).ready(function() {

		var date = new Date();
		var yyyy = date.getFullYear().toString();
		var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
		var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
		
		$('#calendar').fullCalendar({
			header: {
				language: 'es',
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay',

			},
			defaultDate: yyyy+"-"+mm+"-"+dd,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				//$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				//$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #titlem').val(event.title);
					$('#ModalEdit #colorm').val(event.color);
					$('#ModalEdit #fechaactual').val(event.fechaactual);
					$('#ModalEdit #start').val(event.start.format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalEdit #end').val(event.end.format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title'];?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			var dt = new Date();

			// Display the month, day, and year. getMonth() returns a 0-based number.
			var month = dt.getMonth()+1;
			var day = dt.getDate();
			var year = dt.getFullYear();
			
			if(month < 10) {
				month = '0' + month
			} 
			
			fechaactual = (year + '-' + month + '-' + day);
			
			id =  event.id;
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			if(Event[1] < fechaactual){
				swal({
					  title: "La fecha debe ser mayor o igual a la fecha actual del sistema!",
					  type: "warning",
					  showCancelButton: false,
					  confirmButtonText: "Aceptar",
					  closeOnConfirm: false
					},
					function(){
						location.href  = "index.php";
				});
			}else{
				$.ajax({
				 url: 'editEventDate.php',
				 type: "POST",
				 data: {Event:Event},
				 success: function(rep) {
						if(rep == 'OK'){
							swal({   
								title: "El evento se ha modificado de fecha correctamente!",
								type: "info",   
								confirmButtonColor: "#5cb85c",
								confirmButtonText: "Aceptar",  
								closeOnConfirm: false,
								allowEscapeKey: false
							});	
						}else{
							swal({   
								title: "No se pudo guardar. Inténtalo de nuevo!",
								type: "Error",   
								confirmButtonColor: "#5cb85c",
								confirmButtonText: "Aceptar",  
								closeOnConfirm: false,
								allowEscapeKey: false
							});	
						}
					}
				});
			}
		}
		
	});
	
	$(document).on('click', '#btn_modificar', function() {
        id = document.getElementById('id').value;
		title = document.getElementById('titlem').value;
		color = document.getElementById('colorm').value;
		start = document.getElementById('startm').value;
		end = document.getElementById('endm').value;
		eliminar = document.getElementById("delete").checked;
		fechaactual = document.getElementById("fechaactual").value;
		
		if(eliminar){
			$.ajax({
				 url: 'eliminarEvento.php',
				 type: "POST",
				 data: {id:id, eliminar:eliminar},
				 success: function(rep) {
						if(rep === 'OK'){
							location.href  = "index.php";
						}else{
							swal({   
								title: "No se pudo ejecutar la acción. Inténtalo de nuevo!",
								type: "Error",   
								confirmButtonColor: "#5cb85c",
								confirmButtonText: "Aceptar",  
								closeOnConfirm: false,
								allowEscapeKey: false
							});	
						}
					}
				});
		}else if(start == ""){
			swal({   
				title: "Debe ingresar una fecha inicial!",
				type: "warning",   
				confirmButtonColor: "#5cb85c",
				confirmButtonText: "Aceptar",  
				closeOnConfirm: false,
				allowEscapeKey: false
			});	
		}else if(end == ""){
			swal({   
				title: "Debe ingresar una fecha final!",
				type: "warning",   
				confirmButtonColor: "#5cb85c",
				confirmButtonText: "Aceptar",  
				closeOnConfirm: false,
				allowEscapeKey: false
			});	
		}else if(start < fechaactual){
			swal({   
				title: "La fecha debe ser mayor o igual a la fecha actual del sistema!",
				type: "warning",   
				confirmButtonColor: "#5cb85c",
				confirmButtonText: "Aceptar",  
				closeOnConfirm: false,
				allowEscapeKey: false
				});	
		}else if(end < fechaactual){
			swal({   
				title: "La fecha debe ser mayor o igual a la fecha actual del sistema!",
				type: "warning",   
				confirmButtonColor: "#5cb85c",
				confirmButtonText: "Aceptar",  
				closeOnConfirm: false,
				allowEscapeKey: false
				});	
		}else if(end <= start){
			swal({   
				title: "La fecha final no puede ser menor o igual a la fecha inicial!",
				type: "warning",   
				confirmButtonColor: "#5cb85c",
				confirmButtonText: "Aceptar",  
				closeOnConfirm: false,
				allowEscapeKey: false
			});	
		}else{
			if(eliminar){
				$.ajax({
					 url: 'editEventTitle.php',
					 type: "POST",
					 data: {id:id, eliminar:eliminar},
					 success: function(rep) {
							if(rep === 'OK'){
								location.href  = "index.php";
							}else{
								swal({   
									title: "No se pudo ejecutar la acción. Inténtalo de nuevo!",
									type: "Error",   
									confirmButtonColor: "#5cb85c",
									confirmButtonText: "Aceptar",  
									closeOnConfirm: false,
									allowEscapeKey: false
								});	
							}
						}
					});
			}else{
				$.ajax({
					 url: 'editEventTitle.php',
					 type: "POST",
					 data: {id:id, title:title, color:color, start:start, end:end},
					 success: function(rep) {
							if(rep === 'OK'){
								location.href  = "index.php";
							}else{
								swal({   
									title: "No se pudo ejecutar la acción. Inténtalo de nuevo!",
									type: "Error",   
									confirmButtonColor: "#5cb85c",
									confirmButtonText: "Aceptar",  
									closeOnConfirm: false,
									allowEscapeKey: false
								});	
							}
						}
					});
			}
		}
    });
	
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
