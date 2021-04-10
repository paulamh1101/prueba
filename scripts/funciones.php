<?php
    session_start();
    $conexion = null;

    function conectar()
    {
    	global $conexion;
    	$conexion = mysqli_connect('localhost','root','','intranet');
    	mysqli_set_charset($conexion, 'utf8');
    }
    
    function getTodasCategorias()
    {
    	global $conexion;
    	$respuesta = mysqli_query($conexion,"SELECT * FROM  categorias");
    	return $respuesta -> fetch_all();

    }

    function getCategoriasPorUser()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion,"SELECT C.categoria , C.descripcion, C.ruta FROM permisos P INNER JOIN categorias C ON P.id_categoria = C.id_categoria WHERE usuario = '".$_SESSION['usuario']."'");
        return $respuesta -> fetch_all();

    }

    
    function getUsuarios()
    {
        global $conexion;
        $respuesta = mysqli_query($conexion,"SELECT * FROM usuarios  WHERE admin != 1 ");
        return $respuesta -> fetch_all();

    }

    function validarLogin($usuario,$clave)
    {
    	global $conexion;
    	$consulta = "SELECT * FROM usuarios WHERE usuario ='" .$usuario."' AND clave='".$clave."'";
    	$respuesta = mysqli_query($conexion, $consulta);

    	if($fila = mysqli_fetch_array($respuesta))
    	{
    		$_SESSION['usuario'] = $usuario;
            $_SESSION['admin'] = $fila['admin'];
    		return true;
    	}
    	return false;	
    }

    function haIniciadoSesion()
    {
    	return isset($_SESSION['usuario']);
    }

    function esAdmin()
    {
            
         if($_SESSION['admin'] == '1'){
            return true;
         }else{
            return false;
         }

    }
	
	function eliminarPermisos($usuario)
    {
            
        global $conexion;
        mysqli_query($conexion,"DELETE FROM permisos WHERE usuario='".$usuario."'");
    }
	
	function asignarPermisos($usuario,$id_categoria)
	{
		global $conexion;
		mysqli_query($conexion,"INSERT INTO permisos (usuario,id_categoria) VALUES ('".$usuario."',".$id_categoria.")");
		//$usuario=$_POST['usuario'];
        //$id_categoria=$_POST['categoria']; 	
        //if($_POST['ckeckbox'] != "")
        //{
			//if(is_array($_POST['checkbox']))
			//{
				//while(list($key,$value) = each ($_POST['checkbox']))
				//{
					//$sql= mysqli_query("INSERT INTO permisos (usuario,id_categoria) VALUES ('".$usuario."','".$id_categoria."')");
				//}
		    //}
		//}
        //if($sql)
        //echo 'Guardo Exitosamente Los Permisos';
        //else
        //echo 'No Se Guardaron Los Permisos'; 
	}
	
	function getCategoriasUsuario($usuario)
    {
    	global $conexion;
    	$respuesta = mysqli_query($conexion,"SELECT * FROM  permisos where usuario='".$usuario."'");
    	return $respuesta -> fetch_all();

    }
	
	/*function tienePermisos($usuario, $id_categoria)
	{
		global $conexion;
		$result= mysqli_query($conexion, "SELECT COUNT(*) total FROM permisos WHERE usuario='".$usuario."' AND id_categoria =" .$id_categoria);
		$row = mysqli_fetch_assoc($result);
		$numero = $row['total'];
		return $numero > 0;
		
	}*/
	

    function desconectar()
    {
    	global $conexion;
    	mysqli_close($conexion);
    }
?>