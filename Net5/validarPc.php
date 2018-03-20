<?php
	header("Content-Type: text/text; charset=ISO-8859-1");
	require_once("ajax/clases/validarPc.class.php");
	$evaluador = new validarPc();
	echo $evaluador->validarPcAJAX($_POST['valorEntrada'], $_POST['idCampo']);
?>