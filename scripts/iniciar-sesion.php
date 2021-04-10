<?php
    require 'funciones.php';
    $usuario = $_POST['txtUsuario'];
    $clave =  $_POST['txtClave'];
    conectar();

    if(validarLogin ($usuario,$clave) ){
    // Accedemos al sistema
        
        if( esAdmin() ){
                
            header ('Location: ../panelAdmin.php');
        }
        else {
            echo $usuario; echo $clave;
            header ('Location: ../PanelUsuario.php');
        }
    } else {
	//Sino Volvemos al formulario inicial
?>
    
    <script>
    alert('Los datos ingresados son incorrectos')
    location.href = "../index.html";
    </script>
<?php
     desconectar();
}
?>
