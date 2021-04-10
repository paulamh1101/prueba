<?php
    require 'scripts/funciones.php';
    if(! haIniciadoSesion())
    {
      header('Location: index.html');
    }
    conectar();
    $categorias = getCategoriasPorUser();
    desconectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name ="description" content="Intranet Panaderia La Victoria">
    <meta name="author" content="La Victoria">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="categorias/css/notificacion_chat.css">
    <title>Intranet Panadería La Victoria</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
          width: 70%;
          margin: auto;
  }
  </style>
    
  </head>
  <style>
        body  {
            background-color: #ebddc3;
            color: #5a471d;
        }
		   .navbar-inverse .navbar-brand{
			background-color: #be1e2d;
			color: #ffffff;
		}
  </style>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e7931a" >
      <div class="container">
        <div class="navbar-header">
          <button type="button"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navba" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only>"> Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <button type="button" class="btn btn-danger btn-lg">Intranet Panadería La Victoria </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
          <form class="navbar-form navbar-right" action="scripts/cerrar-sesion.php" method= "POST">
            <div class="form-group">
              
            </div>
            <div class = "form-group">
              <button type="button" class="btn btn-danger"><a href="PanelUsuario.php"><font color= "white">Inicio</a></font></button>
            </div>
            <button type="submit" class="btn btn-danger"><a href="scripts/cerrar-sesion.php"><font color= "white">Cerrar Sesión</a></font></button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <!-- Contenedor Para Diapositivas  -->
    <div class="container">
      <br>
      <br>
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <!-- Inserta imagen Archivo --> 
            <img src="images/Archivo.png" alt="Archivos" width="600px" height="400px">
            <div class="carousel-caption">
                <h3>Compartir Archivos</h3>
                <p>This is the first image slide</p>
            </div>
          </div>
  
        <div class="item">
            <!-- Inserta imagen chat --> 
            <img src="images/Chat.png" alt="Chat" width="600px" height="400px">
            <div class="carousel-caption">
                <h3>Chat</h3>
                <p>This is the second image slide</p>
            </div>
        </div>
        
        <div class="item">
            <!-- Inserta imagen tarea --> 
            <img src="images/Tarea.jpg" alt="Tareas" width="600px" height="400px">
            <div class="carousel-caption">
                <h3>Tareas Programadas</h3>
                <p>This is the third image slide</p>
            </div>
        </div>
        <!-- Inserta imagen evento --> 
        <div class="item">
            <img src="images/Evento.jpg" alt="Eventos" width="600px" height="400px">
            <div class="carousel-caption">
                <h3>Eventos Gestión Humana</h3>
                <p>This is the third image slide</p>
            </div>
        </div>
        <!-- Inserta imagen reunion -->  
        <div class="item">
            <img src="images/Reunion.jpg" alt="Calendario" width="600px" height="400px">
            <div class="carousel-caption">
                <h3> Reuniones Agendadas</h3>
                <p>This is the third image slide</p>
            </div>

        </div>
      </div>
         <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Next</span>
        </a>
    </div>
    <h1  align=center>Bienvenido,<?= $_SESSION['usuario']?>.</h1>
    <p  align=center class="lead">Desde está sección podras acceder a diversas categorias de nuestro sitio.</p>
    <div class="container">
	   <div class="row">
	        <!--<div class="col-md-4">-->
                 <?php foreach ($categorias as $fila): ?>
                   <div class="col-sm-3">
                      <h4><a href ="categorias/<?php echo $fila[2]?>"><?php echo $fila[0] ?></a></h4>
				      <p><?php echo $fila[1]?></p>
                   </div>
				 <?php endforeach ?>
           <!-- </div> -->
        </div>
        <hr>
        <footer>
           <p>&copy; 2018 Company, Inc.   Todos Los Derechos Reservados Panadería La Victoria y Deli Apa S.A.
           <p>&copy; Carrera 23 # 59-67 Av Santander  Teléfono PBX:8810037</p>
           <p>&copy; E-mail:recepcion@panaderialavictoria.com.co </p>
        </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script>
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
			$('body').append('<a href="categorias/chat/chat.php"><div id="conversacion" class="alert alert-danger alert-dismissible"><b>Mensaje chat <span>'+ hora +'</b></span><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			$('#conversacion').show();
			$('#conversacion').append('<div class=\"ventana\" class="direct-chat-msg"></div><span class="direct-chat-name pull-left">'+unombre_user_sesion+': '+ umsg +'</span><br></a>');
			
			
			var audio = new Audio('categorias/chat/sounds/notify.mp3');
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