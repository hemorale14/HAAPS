<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	
	$usuario 	= trim($_POST['txtUsuario']);
  	$contraseña	= trim($_POST['txtContrasenia']);
  	$email		= trim($_POST['txtEmail']);
  			
	sleep(2);
	
	$bd = bD::getInstance();
	if($usuario!="" && $contraseña!="" && $contraseña!='0000' && $email!=""){
		if($bd->insertar("usuario", "usuario, contrasenia, correo", "'".$usuario."','".$contraseña."','".$email."'")== true){
			echo 'Usuario registrado exitosamente <br /><a href="contacto.php" style="font-size:9px">Iniciar Sesión</a>';
			}
		else{ echo 'Ocurrio un error en el registro';}
		}
	else{echo 'Todos los datos son necesesarios <br /> o la contraseña no es valida';}
					
?>

