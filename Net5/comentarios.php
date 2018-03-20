<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	
	$email 	= trim($_POST['txtEmail']);
  	$comentario	= trim($_POST['txtComentario']);
  			
	sleep(2);
	
	$bd = bD::getInstance();
	$rs=$bd->nRegistros("usuario",  "WHERE correo='".$email."'");
	//$usuario = $bd->consultar("usuario", "usuario", "WHERE correo='".$email."'");
	//$comprueba = trim($usuario['usuario']);
	if($rs==1 && $email!=""){
		if($bd->insertar("comentarios", "comentario", "'".$comentario."'")== true){
			echo 'Registro exitoso';
			}
		else{ echo 'Ocurrio un error en el registro';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

