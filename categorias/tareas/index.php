<?php
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];
require_once('../controller/bdd.php');

//consultar la cantidad de notificaciones del usuario
$sql = "SELECT count(id_notificacion) FROM notificaciones WHERE estado = 0 and usuario = '$id_usuario'";
$req = $bdd->prepare($sql);
$req->execute();
$count = $req->fetchColumn();

//obtener las tareas asigndas de los usuarios con o sin respuesta		
$sql = "SELECT id, start, end, title, color, descripcion, prioridad, estado, creado_por, fecha_creacion, comentario FROM tareas as A
		LEFT JOIN respuestas AS B 
		ON A.id = B.id_tarea
        INNER JOIN tareas_usuarios AS C 
        ON A.id = C.id_tareas
		WHERE tipo = 'tarea' AND C.id_usuarios = '$id_usuario'
		UNION 
		SELECT id, start, end, title, color, descripcion, prioridad, estado, creado_por, fecha_creacion, comentario comentario FROM respuestas AS A 
		RIGHT JOIN tareas AS B 
		ON A.id_tarea = B.id
		INNER JOIN tareas_usuarios AS C 
        ON B.id = C.id_tareas
		WHERE tipo = 'tarea' AND C.id_usuarios = '$id_usuario'";

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
	<!-- Style CSS -->
	<link href='../css/style.css' rel='stylesheet' />
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='../css/fullcalendar.css' rel='stylesheet' />
	<script src="../js/sweetalert.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="../js/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/notificacion_chat.css">
	<!-- Custom styles for this template-->
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
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Tareas Programadas</h1>
                <p class="lead"></p>
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
				<h4 class="modal-title" id="myModalLabel">Agregar tarea</h4>
			  </div>
			  <div class="modal-body">
				  <p style='color: red' id="mensaje"></p>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Título:</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titulo" required>
					</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Descripción:</label>
					<div class="col-sm-10">
					  <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Descripción" rows="4" cols="50" required></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Prioridad:</label>
					<div class="col-sm-10">
						<select name="prioridad" class="form-control" id="prioridad" required>
						  <option value="">Seleccionar</option>
						  <option value="Baja">Baja</option>						  
						  <option value="Media">Media</option>
						  <option value="Alta">Alta</option>
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-10">
						<?php 
							$zona_horaria = "-5"; //Colombia GMT-5 
							$fecha = "Y-m-d H:i"; //formato de la fecha//obtener fecha hora
							$fecha = gmdate($fecha,time()+($zona_horaria*3600)); //obtener fecha hora
						?>
					  <input type="hidden" name="start" class="form-control" id="start" value="<?php echo $fecha?>" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="hidden" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				  <div class="form-group options">
					<label for="color" class="col-sm-2 control-label" for="optiontext">Agregar usuarios:</label>
					<div class="scroll">
						<input name="checktodos" type="checkbox"> Todos<br>
						<?php
							$sql2 = "SELECT usuario FROM usuarios where usuario != '$id_usuario'";
							$req2 = $bdd->prepare($sql2);
							$req2->execute();
							$usuarios = $req2->fetchAll();
							
							$i = 1;
							$select = 'checkbox'.$i;
							foreach($usuarios as $row):
								echo '<input type="checkbox" name="check_list[]" id="check_list[]" value="'.$row['usuario'].'" required> '.$row['usuario'].'<br>';
							endforeach;
							$i++;
						?>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
				<button type="submit" id='btn_send' class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<!-- Modal Modificar -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" id="formulario" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modificar tarea</h4>
			  </div>
			  <div class="modal-body">
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label"># Tarea</label>
					<div class="col-sm-10">
					  <input type="text" name="id_tarea" class="form-control" id="id_tarea" placeholder="Titulo" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="titlem" class="form-control" id="titlem" placeholder="Titulo" readonly>
					</div>
				  </div>
				   <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Descripción:</label>
					<div class="col-sm-10">
					  <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Descripción" rows="4" cols="50" readonly></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Prioridad:</label>
					<div class="col-sm-10">
						<select name="prioridad" class="form-control" id="prioridad" disabled>
						  <option value="">Seleccionar</option>
						  <option value="Baja">Baja</option>						  
						  <option value="Media">Media</option>
						  <option value="Alta">Alta</option>
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Estado:</label>
					<div class="col-sm-10">
						<select name="color" class="form-control" id="color">
						  <option value="">Seleccionar</option>
						  <option style="color:#FF0000;" value="red">&#9724; Pendiente</option>					  
						  <option style="color:#FFD700;" value="yellow">&#9724; En proceso</option>
						  <option style="color:#08f508;" value="#08f508">&#9724; Terminado</option>	
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Fecha solicitud:</label>
					<div class="col-sm-10">
					  <input type="text" name="fecha_creacion" class="form-control" id="fecha_creacion" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Solicitud por:</label>
					<div class="col-sm-10">
					  <input type="text" name="creado_por" class="form-control" id="creado_por" readonly>
					  <input type="hidden" name="usuario_sesion" class="form-control" id="usuario_sesion" value="<?php echo $id_usuario?>">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Personas:</label>
						<div class="col-sm-2 col-xs-2">
    							<button type="button" class="btn btn-primary" id="bt_buscar">
    								<span class="fa fa-plus"></span>
                        			<span class="hidden-xs"> Ver Usuarios</span> 
    							</button>
    						</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Comentario:</label>
					<div class="col-sm-10">
					  <textarea name="comentarios" class="form-control" id="comentarios" placeholder="Comentario" rows="4" cols="50" readonly></textarea>
					</div>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span>
					<span id="cerrar" class="hidden-xs"> Cerrar</span> 
				</button>
				<button type="button" id="bt_guardar" class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<!-- Modal user -->
		<div class="modal fade" id="ModalUser" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" id="formulario" method="POST" action="../controller/editarUsuarios.php">
			  <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Usuarios</h4>
			  </div>
			  <input type="hidden" name="id_tarea" class="form-control" id="id_tarea" placeholder="Titulo" readonly>
			  <input type="hidden" name="pagina" class="form-control" id="pagina" value="tareas">
			  <div class="modal-body">
				  <div class="form-group">
					<div class="scroll" id='divResultado' style="height: 400px;">	
					</div>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span>
					<span id="cerrar" class="hidden-xs"> Cerrar</span> 
				</button>
				<button type="submit" id="bt_edit_users" class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<!-- Modal Comentarios -->
		<div class="modal fade" id="ModalComentarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" id="formulario" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Comentarios tarea</h4>
			  </div>
			  <div class="modal-body">
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label"># Tarea:</label>
					<div class="col-sm-10">
					  <input type="text" name="id_tarea" class="form-control" id="id_tarea" placeholder="Titulo" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo:</label>
					<div class="col-sm-10">
					  <input type="text" name="titlem" class="form-control" id="titlec" placeholder="Titulo" readonly>
					</div>
				  </div>
				   <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Comentario:</label>
					<div class="col-sm-10">
					  <textarea name="comentario" class="form-control" id="comentario" placeholder="Comentario" rows="4" cols="50" required></textarea>
					</div>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" id="bt_guardar_comentario" class="btn btn-primary">Guardar</button>
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
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="../js/popper.min.js"></script>
	<script>
	
	$(function(){
		var requiredCheckboxes = $('.options :checkbox[required]');
		requiredCheckboxes.change(function(){
			if(requiredCheckboxes.is(':checked')) {
				requiredCheckboxes.removeAttr('required');
			} else {
				requiredCheckboxes.attr('required', 'required');
			}
		});
	});
	
	
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
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				fe = $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss')).value;
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
				
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id_tarea').val(event.id_tarea);
					$('#ModalEdit #titlem').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #descripcion').val(event.descripcion);
					$('#ModalEdit #prioridad').val(event.prioridad);
					$('#ModalEdit #estado').val(event.estado);
					$('#ModalEdit #fecha_creacion').val(event.fecha_creacion);
					$('#ModalEdit #creado_por').val(event.creado_por);
					$('#ModalEdit #observacion').val(event.observacion);
					$('#ModalEdit #comentarios').val(event.comentario);
					creado_por = document.getElementById('creado_por').value;
					usuario_sesion = document.getElementById('usuario_sesion').value;
					
					if(creado_por === usuario_sesion){
						$( "#color" ).prop( "disabled", true );
						$( "#bt_guardar" ).prop( "disabled", true );
					}
					$('#ModalEdit #comentarios').hide();
					$( "#ModalEdit #comentarios" ).prop( "disabled", false );
					color = document.getElementById('color').value;
					if (color === '#08f508'){
						$( "#color" ).prop( "disabled", true );
						$( "#ModalEdit #comentarios" ).prop( "disabled", false );
						$('#ModalEdit #comentarios').show();
						$( "#bt_guardar" ).prop( "disabled", true );
					}
					$('#ModalEdit').modal('show');
				});
			},
			/*eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},*/
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
					id_tarea: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $event['start']; ?>',
					end: '<?php echo $event['end']; ?>',
					color: '<?php echo $event['color']; ?>',
					descripcion: '<?php echo $event['descripcion']; ?>', 
					prioridad: '<?php echo $event['prioridad']; ?>', 
					estado: '<?php echo $event['estado']; ?>', 
					creado_por: '<?php echo $event['creado_por']; ?>',
					fecha_creacion: '<?php echo $event['fecha_creacion']; ?>',
					comentario: '<?php echo $event['comentario']; ?>'
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
			
			id =  event.id_tarea;
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Evento se ha guardado correctamente');
					}else{
						alert('No se pudo guardar. Inténtalo de nuevo.'); 
					}
				}
			});
		}
		
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
			
			id =  event.id_tarea;
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
	
	$(document).ready(function(){
 
		//Checkbox
		$("input[name=checktodos]").change(function(){
			$('input[type=checkbox]').each( function() {			
				if($("input[name=checktodos]:checked").length == 1){
					this.checked = true;
				} else {
					this.checked = false;
				}
			});
		});
	 
	}); 
	
	$(document).on('click', '#bt_buscar', function() {
        id_tarea = document.getElementById('id_tarea').value;
		creado_por = document.getElementById('creado_por').value;
		usuario_sesion = document.getElementById('usuario_sesion').value;
					
		if(creado_por != usuario_sesion){
			$( "#bt_edit_users" ).prop( "disabled", true );
		}
		$.ajax({
			 url: '../controller/ver_usuarios.php',
			 type: "POST",
			 data: {id_tarea:id_tarea},
			 success: function(rep) {
					if(rep != ''){
						divResultado.innerHTML = rep;
						$('#ModalUser #id_tarea').val(id_tarea);
						$('#ModalUser').modal({backdrop: 'static', keyboard: false});
						$('#ModalUser').modal('show');
					}else{
						alert('No se pudo guardar. Inténtalo de nuevo.'); 
					}
				}
			});
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
	 
	// Guardar las modificaciones de las tareas
	$(document).on('click', '#bt_guardar', function() {
		
		id_tarea = document.getElementById('id_tarea').value;
		color = document.getElementById('color').value;
		title = document.getElementById('titlem').value;
		
		$.ajax({
			url: 'editEventTitle.php',
			type: "POST",
			data: {id_tarea:id_tarea, color:color, title:title},
			success: function(rep) {
				if(rep == 'OK'){
					if (color === '#08f508'){
						$( "#color" ).prop( "disabled", true );
						$('#ModalComentarios #id_tarea').val(id_tarea);
						$('#ModalComentarios #titlec').val(title);
						$('#ModalComentarios').modal({backdrop: 'static', keyboard: false});
						$('#ModalComentarios').modal('show');
					}
					else{
						location.href="index.php";
					}
				}else{
					alert('No se pudo guardar. Inténtalo de nuevo.'); 
				}
			}
		});
			
		
	});
	
	// Guarda los comentarios ingresados a las tareas
	$(document).on('click', '#bt_guardar_comentario', function() {
		
		id_tarea = document.getElementById('id_tarea').value;
		title = document.getElementById('titlec').value;
		comentario = document.getElementById('comentario').value;
		
		if(comentario === ""){
			swal({
					title: "El campo comentario no puede quedar vacio!",
					type: "warning",
					showCancelButton: false,
					confirmButtonText: "Aceptar",
					closeOnConfirm: false
				});
		}else{
			$.ajax({
				url: 'agregarComentario.php',
				type: "POST",
				data: {id_tarea:id_tarea, title:title, comentario:comentario},
				success: function(rep) {
					if(rep == 'OK'){
						location.href="index.php";
					}else{
						alert('No se pudo guardar. Inténtalo de nuevo.'); 
					}
				}
			});	
		}
	
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
