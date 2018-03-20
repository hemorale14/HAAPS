<?php
	header("Content-Type: text/text; charset=ISO-8859-1");
	require_once("ajax/clases/validarDato.class.php");
	$evaluador = new validarDato();
	echo $evaluador->validarDatoAJAX($_POST['valorEntrada'], $_POST['idCampo'], $_POST['txtContra']);
?>