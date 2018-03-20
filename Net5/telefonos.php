<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	$codigo		=$_POST['txtCodigo'];
	$marca		=$_POST['txtMarca'];
	$modelo		=$_POST['txtModelo'];
	$interfaz	=$_POST['txtInterfaz'];
	$memoria	=$_POST['txtMemoria'];
	$pantalla	=$_POST['txtPantalla'];
	$linea		=$_POST['txtLinea'];
	$cantidad	=$_POST['lstCantidad'];
	
	sleep(2);

	$bd = bD::getInstance();
	if($codigo!="" && $marca!="" && $modelo!="" && $interfaz!="" && $memoria!="" && $pantalla!="" && $linea!="" && $cantidad!=""){
		if($bd->procedimiento("pa_TelVoIPs", "'$codigo','$marca','$modelo','$interfaz','$cantidad','$memoria','$pantalla','$linea'")== true){
			echo 'Registro exitoso';
			}
		else{ echo 'Ocurrio un error en el registro';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

