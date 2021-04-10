
<?php
    require '../scripts/funciones.php';
	
	$usuario = $_POST["txtUsuario"];
	$clave = $_POST["txtClave"];
	conectar();
	
	$insertar = "INSERT INTO usuarios (usuario,clave,admin) VALUES ('$usuario','$clave', '0')";
	
	//VERIFICAMO SI EL USUARIO YA ESTA REGISTRADO
	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario  = '$usuario'");
	if (mysqli_num_rows($verificar_usuario) > 0)
	{
		echo '<script>
		       alert ("El Usuario Ya Está Registrado");
			   window.history.got(-1);
			   </script>';
		exit;
	}
		
	//EJECUTAR CONSULTA
	$resultado = mysqli_query($conexion,$insertar);
    if(!$resultado)
	{
		echo '<script>
		       alert ("Error Al Registrarse");
			   window.history.got(-1);
			   </script>';
	}
	else
	{
		echo '<script>
		       alert ("Usuario Registrado Exitosamente");
			   window.history.got(-1);
			   </script>';
			   header('Location: ../panelAdmin.php');
    			   
	}
?>

