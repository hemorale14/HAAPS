<?php
	include('ajax/clases/baseDatos.class.php');
	session_start();
	
	$usuario	= trim($_POST['txtUsuario']);
	$contraseña	= trim($_POST['txtContrasenia']);
	$valido = "";
	$bd 	= bD::getInstance();
	$resultado = $bd->consultar("usuario","Tipo", "WHERE Usuario='".$usuario."' and Contrasenia='".$contraseña."'");
	
	foreach($resultado as $res){
		$valido = trim($res->Tipo); 
		 }
	
	if($valido=="usuario"){
		$_SESSION['autentificado']="1";
		$_SESSION['user']=$_POST['txtUsuario'];
		$_SESSION['pass']=$_POST['txtContrasenia'];
		header("Location: usuario.php");
		}
	elseif($valido=="administrador"){
		$_SESSION['autentificado']="1";
		$_SESSION['user']=$_POST['txtUsuario'];
		$_SESSION['pass']=$_POST['txtContrasenia'];
		header("Location: admin.php");
		}
	else{
		header("Location: contacto.php");
	}
?>