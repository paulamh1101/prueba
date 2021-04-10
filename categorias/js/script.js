// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) { 
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//habilitar tecla enter en el formulario inicio de sesion
function iniciarSesionKey(event) {
    var tecla = (document.all) ? event.keyCode : event.which;
    if (tecla === 13) {
       iniciarSesion();
    }
}

//instanciamos el objetoAjax
			ajax=objetoAjax();

//funcion para validar los datos ingresados en el formulario de login
function iniciarSesion(){
	
	//Recogemos los valores introducimos en los campos de texto del formulario login
	usuario = document.getElementById('usuario').value;
	contrasena = document.getElementById('contrasena').value;
	
	if(usuario == ""){
		//Mensaje "Debe ingresar un nombre de usuario."
		swal({   
			title: "Debe ingresar un nombre de usuario!",
			type: "warning",   
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Aceptar",  
			closeOnConfirm: false,
			allowEscapeKey: false
		});	
	}else if(contrasena == ""){
		//Mensaje "Debe ingresar una contrasena!"
		swal({   
			title: "Debe ingresar una contrasena!",
			type: "warning",   
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Aceptar",  
			closeOnConfirm: false,
			allowEscapeKey: false
		});	
	}
	else{
		
		var dataString = {usuario : usuario, contrasena : contrasena};
		// AJAX Code To Submit Form, para validar si la informacion del usuario ingresada en el usuario coincide con la de la base de datos en la tabla usuario_web
		$.ajax({
			type: "POST",
			url: "controller/ValidarIngreso.php",
			data: dataString,
			cache: false,
			success: function(result){
				if(result === "ok"){
					location.href="solicitudes/index.php";	
				}else if(result === "error"){
					swal({   
						title: "Error en usuario o contraseña",
						text: "Intente de nuevo por favor!",
						type: "error",   
						confirmButtonColor: "#5cb85c",
						confirmButtonText: "Aceptar",  
						closeOnConfirm: false 
					});	
				}
			},
			error: function () {
				sweetAlert("", "Error al momento de ingresar", "error");
			}
		});	
				
			
	}
} 