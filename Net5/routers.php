<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	$codigo		=$_POST['txtCodigo'];
	$marca		=$_POST['txtMarca'];
	$modelo		=$_POST['txtModelo'];
	$interfaz	=$_POST['txtInterfaz'];
	$factor		=$_POST['txtFactor'];
	$sw			=$_POST['txtSW'];
	$capacidad	=$_POST['txtCapacidad'];
	$so			=$_POST['txtSO'];
	$cantidad	=$_POST['lstCantidad'];
	
	sleep(2);

	$bd = bD::getInstance();
	if($codigo!="" && $marca!="" && $modelo!="" && $interfaz!="" && $factor!="" && $sw!="" && $capacidad!="" && $so!="" && $cantidad!=""){
		if($bd->procedimiento("pa_router", "'$codigo','$marca','$modelo','$interfaz','$cantidad','$factor','$sw','$capacidad','$so'")== true){
			echo 'Registro exitoso';
			}
		else{ echo 'Ocurrio un error en el registro';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

