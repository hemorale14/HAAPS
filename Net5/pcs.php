<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	$codigo		=$_POST['txtCodigo'];
	$marca		=$_POST['txtMarca'];
	$modelo		=$_POST['txtModelo'];
	$interfaz	=$_POST['txtInterfaz'];
	$proceador	=$_POST['txtProcesador'];
	$so			=$_POST['txtSO'];
	$ram		=$_POST['txtRam'];
	$discoduro	=$_POST['txtDiscoDuro'];
	$cantidad	=$_POST['lstCantidad'];
	
	sleep(2);

	$bd = bD::getInstance();
	if($codigo!="" && $marca!="" && $modelo!="" && $interfaz!="" && $proceador!="" && $so!="" && $ram!="" && $discoduro!="" && $cantidad!=""){
		if($bd->procedimiento("pa_pcs", "'$codigo','$marca','$modelo','$interfaz','$cantidad','$proceador','$so','$ram','$discoduro'")== true){
			echo 'Registro exitoso';
			}
		else{ echo 'Ocurrio un error en el registro';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

