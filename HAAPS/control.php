<?php
	include('ajax/clases/baseDatos.class.php');
	session_start();
	
	$email	= trim($_POST['txtEmail']);
	$contraseña	= trim($_POST['txtContrasenia']);
	$valido = "";
	$bd 	= bD::getInstance();
	$resultado = $bd->consultar("usuario","Tipo", "WHERE Email='".$email."' and Contrasenia='".$contraseña."'");
	
	foreach($resultado as $res){
		$valido = trim($res->Tipo); 
		 }
	if($valido=="Cliente"){
		if($_POST['txtContrasenia']=="HAAPS"){
			$_SESSION['autentificado']="1";
			$_SESSION['user']=$_POST['txtEmail'];
			$_SESSION['pass']=$_POST['txtContrasenia'];
			header("Location: cambiar.php");
			}
		else{
		$_SESSION['autentificado']="1";
		$_SESSION['user']=$_POST['txtEmail'];
		header("Location: cliente.php");}
		}
	elseif($valido=="Admin"){
		if($_POST['txtContrasenia']==="HAAPS"){
			$_SESSION['autentificado']="1";
			$_SESSION['user']=$_POST['txtEmail'];
			$_SESSION['pass']=$_POST['txtContrasenia'];
			header("Location: cambiar.php");
			}
		else{$_SESSION['autentificado']="1";
		$_SESSION['user']=$_POST['txtEmail'];
		header("Location: admin.php");}
		}
	else{
		header("Location: Integracion-comunicacion.php");
	}
?>