<?php
    require 'scripts/funciones.php';
    if(! haIniciadoSesion() || !esAdmin())
    {
      header('Location: index.html');
    }
    conectar();
    $usuarios = getUsuarios();
    desconectar();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name ="description" content="Intranet Panaderia La Victoria">
    <meta name="author" content="La Victoria">
    <title>Panel De Administración</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
  </head>
   <style>
        body  {
            alink = #5a471d;
            background-color: #ebddc3;
            color: #5a471d;
        }
       .navbar-inverse .navbar-brand{
        background-color: #be1e2d;
        color: #ffffff;


       }
        
    </style>
  <body>
    <?php include 'admin/menu-superior.php'; ?>
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
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <h1 class="display-3">Panel De Administración</h1>
        <p>Bienvenido,Administrador.</p>
      </div>
       

        <div>
          <table border= "3" style= "margin: 0 auto;" >
            <thead>
              <tr>
                <th># ID</th>
                <th>Nombre De Usuario</th>
                <th>Edición</th>
              </tr>
            </thead>
            <tbody>
          <?php
            $i = 1;  
            foreach ($usuarios as $usuario):
          ?>
               <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $usuario[0] ?></td>
                <td><a href="admin/permisos.php?usuario=<?=$usuario[0]?>"> <font color= #5a471d >Editar Permisos</a></td>
              </tr>
          <?php endforeach ?>
              
            </tbody> 
          </table>
        </div>
    </div>

      <div class="container">

      <!-- Example row of columns -->
      <div class="row">
        
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