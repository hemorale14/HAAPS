<?php
	header("Content-Type: text/text; charset=ISO-8859-1");
	require_once("ajax/clases/validarTel.class.php");
	$evaluador = new validarTel();
	echo $evaluador->validarTelAJAX($_POST['valorEntrada'], $_POST['idCampo']);
?>