<?php
session_start();
require_once ('lib/config.php');
include 'lib/socialnetwork-lib.php';

ini_set('error_reporting',0);

if(!isset($_SESSION['usuario']))
{
  header("Location: ../../index.html");
}else{
	$user = mysqli_real_escape_string($connect, $_SESSION['usuario']);
	$sess = $_SESSION['usuario'];
	$chats = mysqli_query($connect, "SELECT * FROM usuarios where usuario = '$sess'");
	while($ch = mysqli_fetch_array($chats)) { 
		$_SESSION['id'] = $ch['id_use'];
	}
}

if(isset($_GET['leido'])) {
  $leido = mysqli_real_escape_string($connect, $_GET['leido']);
  $usuariod = mysqli_real_escape_string($connect, $_SESSION['usuario']);

  $tchats = mysqli_query($connect, "SELECT * FROM chats WHERE de = '$usuariod' OR para = '$usuariod'");
  $tc = mysqli_fetch_array($tchats);
  if($tc['de'] != $_SESSION['id']) {
  $update = mysqli_query($connect, "UPDATE chats SET leido = '1' WHERE de = '$usuariod' OR para = '$usuariod'");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Sweetalert -->
  <script src="../js/sweetalert.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="../js/sweetalert.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Style CSS -->
  <link href='../css/style.css' rel='stylesheet' />
  <style>
    body {
        padding-top: 70px;
		background-color: #ebddc3;
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

  
  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
		
		  <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Usuarios</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body" id="nuevosMensajes">
				
            </div>
			
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9" id="mostrar_chat">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <!-- /.mailbox-read-info -->
                <div class="mailbox-read-message">
              
					<!-- Direct Chat -->
					<div class="row">
						<div class="col-md-12">
						  <!-- DIRECT CHAT PRIMARY -->
							<div class="box-header with-border">
							
							  <h3 class="box-title" id="nombre"></h3><input type="hidden" name="chat_con" id="chat_con">
							</div>
							<!-- /.box-header -->
							<div class="box-body">
							  <!--conversaciones-->
								<div class="direct-chat-messages"  id="conversacion" style="overflow: scroll; height: 400px;">
								
								</div>
							  <!-- Contacts are loaded here -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer">

							<?php
								$usuario = $_SESSION['usuario'];
								$chat = mysqli_query($connect, "SELECT id_use FROM usuarios WHERE usuario = '$usuario'");
								$cha = mysqli_fetch_array($chat);
								;
							?>
							  <form action="" method="post">
								<div class="input-group">
								  <input type="hidden" value='<?php echo $cha['id_use']?>'name="id_chat_con" id="id_chat_con">
								  <input type="hidden" value='<?php echo $_SESSION['usuario']?>'name="nombre_chat_con" id="nombre_chat_con">
								  <input type="hidden" name="para" id="para">
								  <input type="hidden" name="nombre_msg" id="nombre_msg">
								  <input type="text" name="mensaje" id="mensaje" placeholder="Escribe un mensaje" class="form-control" onkeypress="pulsar(event)">
									  <span class="input-group-btn">
										<input type="button" value="Enviar" name="btn_enviar" id="btn_enviar" onclick="enviar()" class="btn btn-primary btn-flat"></button>
									  </span>
								</div>
							  </form>
							</div>
							<!-- /.box-footer-->
						</div>
						<!-- /.col -->
					</div>
				  <!-- /.mailbox-read-message -->
				</div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          </div>
        <!-- /.col -->
		</div>
	  
		
      <!-- /.row -->
    </section>
	<div id="conexion">
		</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Push -->
<script src="js/push.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$.ajax({
		url: "nuevosMensajes.php",
		cache: false,
		type: "POST",
		success: function(html){		
			$("#nuevosMensajes").html(html); //Insert usuarios con nuevos mensajes
		},
	});
	
});

	function nuevosMensajes(){
		$.ajax({
			url: "nuevosMensajes.php",
			cache: false,
			type: "POST",
			success: function(html){		
				$("#nuevosMensajes").html(html); //Insert usuarios con nuevos mensajes
			},
		});
	}
	
	$('#mostrar_chat').hide(); 
	//create a new WebSocket object.
	var wsUri = "ws://localhost:9000/www/Intranet/categorias/chat/server.php"; 	
	websocket = new WebSocket(wsUri); 
	
	websocket.onopen = function(ev) { // connection is open 
		//$('#conversacion').append("<div class=\"system_msg\">Connected!</div>"); //notify user
	}
	
	function pulsar(e) {
		if (e.keyCode === 13 && !e.shiftKey) {
			enviar();
		}
	}
	
	
	function enviar(){ //use clicks message send button	
		var mymessage = $('#mensaje').val(); //get message text
		var myname = document.getElementById('nombre_msg').value; //get nombre usuario
		var mypara = document.getElementById('para').value; //get usuario remitente mensaje
		var btn_enviar = document.getElementById('btn_enviar').value;
		var id_chat_con = document.getElementById('id_chat_con').value;
		var nombre_chat_con = document.getElementById('nombre_chat_con').value;
		
		if(mymessage != ""){
			$.ajax({
				url: "conversaciones.php",
				cache: false,
				type: "POST",
				data: {mensaje:mymessage,btn_enviar:btn_enviar,usuario:mypara},
				success: function(html){		
				},
			});
			var objDiv = document.getElementById("conversacion");
			objDiv.scrollTop = objDiv.scrollHeight;
			//prepare json data
			var msg = {
			message: mymessage,
			name: myname,
			para : mypara,
			de : '<?php print $_SESSION['id']; ?>',
			nombre_user_sesion : '<?php print $_SESSION['usuario']; ?>',
			id_chat_con: id_chat_con,
			nombre_chat_con: nombre_chat_con
			};
			//convert and send data to server
			websocket.send(JSON.stringify(msg));
		}
		
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
		var uid_chat_con = msg.id_chat_con; 
		var unombre_chat_con = msg.nombre_chat_con;
		
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
		//alert(uid_chat_con + ' ' + ude);		
		if(type == 'usermsg' && ude == id_user_sesion) 
		{
			//$('#conversacion').append("<div><span class=\"user_name\">"+unombre_user_sesion+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
			$('#conversacion').append('<div class="direct-chat-msg right"><div class="direct-chat-info clearfix"><span class="direct-chat-name pull-right">'+unombre_user_sesion+'</span><span class="direct-chat-timestamp pull-left">'+ fechaYhora +'</span></div><img class="direct-chat-img" src="avatars/defect.jpg"><div class="direct-chat-text">'+umsg+'</div></div>');
		
			
		}
		if(type == 'usermsg' && upara == id_user_sesion) 
		{
			var chat_con = document.getElementById('chat_con').value;
			if(chat_con === ude){
			//$('#conversacion').append("<div><span class=\"user_name\">"+unombre_user_sesion+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
				$('#conversacion').append('<div class="direct-chat-msg"><div class="direct-chat-info clearfix"><span class="direct-chat-name pull-left">'+unombre_user_sesion+'</span><span class="direct-chat-timestamp pull-right">'+ fechaYhora +'</span></div><img class="direct-chat-img" src="avatars/defect.jpg"><div class="direct-chat-text">'+umsg+'</div></div>');
				
				
			}
			var audio = new Audio('sounds/notify.mp3');
			audio.play();
		}
		if(type == 'system')
		{
			//$('#conversacion').append("<div class=\"system_msg\">"+umsg+"</div>");
			//$('#conexion').append('<br><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Mensaje: '+umsg+'</div>');
			
			
		}
		
		
		nuevosMensajes();
		$('#mensaje').val(''); //reset text
		
		var objDiv = document.getElementById("conversacion");
		objDiv.scrollTop = objDiv.scrollHeight;
	};
	
	
	websocket.onerror	= function(ev){$( "#mensaje" ).prop( "disabled", true );$( "#btn_enviar" ).prop( "disabled", true );};
	websocket.onclose 	= function(ev){$('#conexion').append("<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Conexión cerrada: Comuniquese con el administrador del sistema</div>");}; 

	
	$(document).ready(function() {
    $("form").keypress(function(e) {
			if (e.which == 13) {
				return false;
			}
		});
	});
	
	function datos(usuario,nombre) {
		$('#mostrar_chat').show();
		
		var chat_con = document.getElementById('chat_con').value = usuario; //get usuario remitente mensaje
		nombre = 'Chat con ' + nombre;
		$("#nombre").html(nombre);
		user = document.getElementById('para').value = usuario;
		nombre = document.getElementById('nombre_msg').value = nombre;
        $.ajax({
			url: "conversaciones.php",
			cache: false,
			type: "POST",
			data: {usuario:usuario},
			success: function(html){		
				$("#conversacion").html(html); //Insert chat log into the #chatbox div
				updateScroll();
				nuevosMensajes();
		  	},
		});
    }

	function updateScroll(){
		var element = document.getElementById("conversacion");
		element.scrollTop = element.scrollHeight;
	}
	
</script>
</body>
</html>
