<?php
    require '../scripts/funciones.php';
	//Validadciòn de la sesiòn como administrador:
    if(! haIniciadoSesion() || !esAdmin())
    {
      header('Location: index.html');
    }
	//Verificaciòn del parametro GET:
    if (isset($_POST['txtUsuario'])){
	   
       $usuario = $_POST['txtUsuario'];
       conectar();
	   //Eliminar permisos
	   eliminarPermisos($usuario);
	   //$categorias = getTodasCategorias();
	   @$categorias = $_POST['categoria'];
	   @$cantidad = count($categorias);
	   //Reasignamos sus premisos:
	   for($i = 0; $i < $cantidad; $i++){
		   asignarPermisos($usuario,$categorias[$i]);
	   }
	   
	   echo '<script>alert("Se ha modificado los permisos correctamente");
					 location.href = "../panelAdmin.php";
			</script>';
	   
	   
	   /*foreach($categorias as $categoria): 
	       
	       echo categoria;
		   asignarPermisos($usuario,$categoria);
	   endforeach;*/
	   			
	}
	
    else{ 
		echo '<script>alert("No hay permisos seleccionados");
					 location.href = "../panelAdmin.php";
		      </script>';
	}
	//Actualizar Permisos:
	
	
    					
							
	
	//header('Location: permisos.php?='.$usuario);
	
	desconectar();

?> 