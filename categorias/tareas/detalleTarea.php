<?php
require '../../scripts/funciones.php';
if(! haIniciadoSesion())
{
  //header('Location: ../../index.html');
}
$id_usuario = $_SESSION['usuario'];	

require_once('../controller/bdd.php');

$id = $_GET['id'];

$sql = "SELECT id, start, end, title, color, descripcion, prioridad, estado, creado_por, fecha_creacion, comentario FROM tareas as A
		LEFT JOIN respuestas AS B 
		ON A.id = B.id_tarea
		WHERE tipo = 'tarea' AND id=$id
		UNION 
		SELECT id, start, end, title, color, descripcion, prioridad, estado, creado_por, fecha_creacion, comentario comentario FROM respuestas AS A 
		RIGHT JOIN tareas AS B 
		ON A.id_tarea = B.id
		WHERE tipo = 'tarea' and id=$id";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();
foreach($events as $event):
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
			  <button type="submit" class="btn btn-danger btn-lg">Intranet Panader??a La Victoria </button>
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
					<button type="button" class="btn btn-danger"><a href="../../scripts/cerrar-sesion.php"><font color= "white">Cerrar Sesi??n</a></font></button>
				</div>
			</div>
        </div>
        <!-- /.container -->
    </nav>
	                       

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Detalle tarea</h1>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal Modificar -->
		<div class="row" id="info">
		  <div class="col-lg-12">
			<div class="row">
			<form class="form-horizontal" id="formulario" method="POST" action="editEventTitle.php">
			  <div class="row">
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label"># Tarea</label>
					<div class="col-sm-10">
					  <input type="text" name="id_tarea" class="form-control" id="id_tarea" value="<?php echo $event['id']?>" placeholder="Titulo" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="titlem" class="form-control" id="titlem" value="<?php echo $event['title']?>" placeholder="Titulo" readonly>
					</div>
				  </div>
				   <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Descripci??n:</label>
					<div class="col-sm-10">
					  <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Descripci??n" rows="4" cols="50" readonly><?php echo $event['descripcion']?></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Prioridad:</label>
					<div class="col-sm-10">
						<select name="prioridad" class="form-control" id="prioridad" disabled>
						  <option value="">Seleccionar</option>
						  <option value="Baja" <?php if($event['prioridad'] == "Baja"){ echo "selected";}?>>Baja</option>						  
						  <option value="Media" <?php if($event['prioridad'] == "Media"){ echo "selected";}?>>Media</option>
						  <option value="Alta" <?php if($event['prioridad'] == "Alta"){ echo "selected";}?>>Alta</option>
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Estado:</label>
					<div class="col-sm-10">
						<select name="color" class="form-control" id="color">
						  <option value="">Seleccionar</option>
						  <option style="color:#FF0000;" value="red" <?php if($event['color'] == "red"){ echo "selected";}?>>&#9724; Pendiente</option>					  
						  <option style="color:#FFD700;" value="yellow" <?php if($event['color'] == "yellow"){ echo "selected";}?>>&#9724; En proceso</option>
						  <option style="color:#08f508;" value="#08f508" <?php if($event['color'] == "#08f508"){ echo "selected";}?>>&#9724; Terminado</option>	
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Fecha solicitud:</label>
					<div class="col-sm-10">
					  <input type="text" name="fecha_creacion" class="form-control" value="<?php echo $event['fecha_creacion']?>" id="fecha_creacion" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Solicitud por:</label>
					<div class="col-sm-10">
					  <input type="text" name="creado_por" class="form-control" value="<?php echo $event['creado_por']?>" id="creado_por" readonly>
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
				  <!--<div id="ModalUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"> 
								<label for="color" class="col-sm-2 control-label">Usuarios:</label>
							</div> 
								<div class="modal-body"> 
									<div class="scroll" id='divResultado' style="height: 400px;">
										
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										<span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cerrar</span>
									</button>
									<button type="submit" id="bt_edit_users" class="btn btn-primary">Guardar</button>
								</div>
						</div>
					</div>
				  </div>-->
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Comentario:</label>
					<div class="col-sm-10">
					  <textarea name="comentarios" class="form-control" id="comentarios" placeholder="Sin Comentario" rows="4" cols="50" readonly><?php echo $event['comentario']?></textarea>
					</div>
				  </div>
			  </div>
<?php endforeach; ?>
			  <div class="modal-footer">
				<?php 
					$pagina = $_GET['pag'];
					if($pagina == "notificaciones"){
						echo '<a href="../controller/verNotificaciones.php"><button type="button" class="btn btn-info" data-dismiss="modal">';
					}else if($pagina == "tarea"){
						echo '<a href="listarTareas.php"><button type="button" class="btn btn-info" data-dismiss="modal">';
					}
				?>
					<span class="glyphicon glyphicon-arrow-left"></span>
					<span id="cerrar" class="hidden-xs"> Volver</span> 
				</button></a>
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
		creado_por = document.getElementById('creado_por').value;
		usuario_sesion = document.getElementById('usuario_sesion').value;
		
		if(creado_por === usuario_sesion){
			$( "#info #color" ).prop( "disabled", true );
			$( "#info #bt_guardar" ).prop( "disabled", true );
		}
		
		$('#info comentarios').hide();
		$( "#info #comentarios" ).prop( "disabled", false );
		color = document.getElementById('color').value;
		if (color === '#08f508'){
			$( "#info #color" ).prop( "disabled", true );
			$( "#info #comentarios" ).prop( "disabled", false );
			$('#info #comentarios').show();
			$( "#info #bt_guardar" ).prop( "disabled", true );
		}
		
		color = document.getElementById('color').value;
		if (color === '#08f508'){
			document.getElementById('color').disabled = true;
			document.getElementById('bt_guardar').disabled = true;
		}
	});
		
	$(document).on('click', '#bt_buscar', function() {
        id_tarea = document.getElementById('id_tarea').value;
		$.ajax({
			 url: '../controller/ver_usuarios.php',
			 type: "POST",
			 data: {id_tarea:id_tarea},
			 success: function(rep) {
					if(rep != ''){
						$('#ModalUser #id_tarea').val(id_tarea);
						divResultado.innerHTML = rep;
						$('#ModalUser').modal('show');
					}else{
						alert('No se pudo guardar. Int??ntalo de nuevo.'); 
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
						swal({
							title: "Desea agregar un comentario?",
							text: "",
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Aceptar',
							cancelButtonText: "Cancelar",
							closeOnConfirm: true,
							closeOnCancel: false},
							function (isConfirm) {
								if (isConfirm) {
									$( "#color" ).prop( "disabled", true );
									$('#ModalComentarios #id_tarea').val(id_tarea);
									$('#ModalComentarios #titlec').val(title);
									$('#ModalComentarios').modal({backdrop: 'static', keyboard: false});
									$('#ModalComentarios').modal('show');
								} else {
									location.href="listarTareas.php";
								}
						});
					}
					else{
						location.href="listarTareas.php";
					}
				}else{
					alert('No se pudo guardar. Int??ntalo de nuevo.'); 
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
						location.href="listarTareas.php";
					}else{
						alert('No se pudo guardar. Int??ntalo de nuevo.'); 
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
		//Obteniendo una variable con la m??scara d-m-Y H:i:s
		
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
	
	websocket.onerror	= function(ev){$('#conexion').append("<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Error: No se ha establecido la comunicaci??n - "+ev.data+"</div>");}; 
	websocket.onclose 	= function(ev){$('#conexion').append("<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Conexi??n cerrada: Comuniquese con el administrador del sistema</div>");}; 
	
});	
	
</script>

</body>

</html>
