<?php
	require_once ('Ajax/clases/baseDatos.class.php');
	$codigo		=$_POST['lstCodigo'];
	
	sleep(2);

	$bd = bD::getInstance();
	if($codigo!=""){
		if($bd->procedimiento("pa_eli_pc", $codigo)== true){
			echo 'Eliminación exitosa';
			}
		else{ echo 'Ocurrio un error en la eliminación';}
		}
	else{echo 'Todos los datos son necesesarios';}
					
?>

