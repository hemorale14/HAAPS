<?php
	header("Content-Type: text/text; charset=ISO-8859-1");
	require_once("ajax/clases/validarRouter.class.php");
	$evaluador = new validarRouter();
	echo $evaluador->validarRouterAJAX($_POST['valorEntrada'], $_POST['idCampo']);
?>