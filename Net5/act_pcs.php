<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	$codigo		=$_POST['lstCodigo'];
	$marca		=$_POST['txtMarca'];
	$modelo		=$_POST['txtModelo'];
	$interfaz	=$_POST['txtInterfaz'];
	$procesador	=$_POST['txtProcesador'];
	$so			=$_POST['txtSO'];
	$ram		=$_POST['txtRam'];
	$discoduro	=$_POST['txtDiscoDuro'];
	$cantidad	=$_POST['lstCantidad'];
	
	sleep(2);

	$bd = bD::getInstance();
	if($codigo!="" && $marca!="" && $modelo!="" && $interfaz!="" && $procesador!="" && $so!="" && $ram!="" && $discoduro!="" && $cantidad!=""){
		if($bd->procedimiento("pa_act_pc", "'$codigo','$marca','$modelo','$interfaz','$cantidad','$procesador','$so','$ram','$discoduro'")== true){
			echo 'Actualización exitosa';
			}
		else{ echo 'Ocurrio un error la actualización';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

