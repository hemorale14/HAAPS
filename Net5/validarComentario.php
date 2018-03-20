<?php
	header("Content-Type: text/text; charset=ISO-8859-1");
	require_once("ajax/clases/validarComentario.class.php");
	$evaluador = new validarComentario();
	echo $evaluador->validarComentarioAJAX($_POST['valorEntrada'], $_POST['idCampo']);
?>