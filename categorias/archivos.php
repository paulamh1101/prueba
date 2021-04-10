<?PHP
require '../scripts/funciones.php';
if(! haIniciadoSesion())
{
	header('Location: ../index.html');
}
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
          <button type="submit" class="btn btn-danger btn-lg">Intranet Panadería La Victoria </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
          <form class="navbar-form navbar-right" action="scripts/iniciar-sesion.php" method= "POST">
            <div class="form-group">
              
            </div>
            <div class = "form-group">
              <button type="submit" class="btn btn-danger"><a href="index.html">Inicio</a></button>
            </div>
            <button type="submit" class="btn btn-danger">Acerca De</button>
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
     <div>
      <div class="row">
        <div class="col-md-4">
          
             <?php foreach ($categorias as $fila): ?>
                 <div class="col-lg-6">
                  <h4><a href ="categorias/<?php echo $fila[3]?>"><?php echo $fila[1] ?></a></h4>
                  <p><?php echo $fila[2]?></p>
                 </div>
          
              <?php endforeach ?>
        </div>
      </div>
      <hr>
      <footer>
        <p>&copy; 2018 Company, Inc.   Todos Los Derechos Reservados Panadería La Victoria y Deli Apa S.A.
        <p>&copy; Carrera 23 # 59-67 Av Santander  Teléfono PBX:8810037</p>
        <p>&copy; E-mail:recepcion@panaderialavictoria.com.co </p>
      </footer>
      </div>
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
  </body>
</html>