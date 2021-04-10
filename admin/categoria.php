
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name ="description" content="Intranet Panaderia La Victoria">
    <meta name="author" content="La Victoria">
    <title>Intranet Panadería La Victoria</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
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
            <button type="submit" class="btn btn-danger"><a href="scripts/cerrar-sesion.php">Cerrar Sesión</a></button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <br>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1  align=center>Bienvenido,Administrador</h1>
        <p  align=center class="lead">Se està modificando los permisos para el usuario:<?=$usuario?></p>
        <div class="row">
          <div class="col-sm-9 col-sm-offset-3">
            <div class="panel panel-default">
              <div class="panel-heading">
               <h3 class="panel-title">Ediciòn De Permisos</h3>
            </div>
            <div class ="panel-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Categoria</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?=$usuario?>">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?=$usuario?>">
                  <label for="exampleInputEmail1">Descripciòn</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?=$usuario?>">
                  <label for="exampleInputEmail1">Ruta</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?=$usuario?>">
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
            </div>
          </div>
        </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h4><a href ="#"><font color= #5a471d>Permisos</a></h4>
          <p>Permiten asignar permisos a los archivos para determinados usuarios y grupos de uauarios. </p>
         
        </div>
        <div class="col-md-4">
          <h4><a href ="#"><font color= #5a471d>Categorias</a></h4>
          <p><p>Acceso a las diversas categorias que el usuario tiene permiso.</p> </p>
         
       </div>
        <div class="col-md-4">
          <h4><a href ="#"><font color= #5a471d>Reportes</a></h4>
          <p>Permite ver los reportes de los permisos.</p>
          
        </div>
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
  </body>
</html>