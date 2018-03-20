<?php
	require_once('ajax/clases/baseDatos.class.php');
	header('Content-Type: text/xml');
	$bd = bD::getInstance();
	$proyectos = $bd->consultar("proyecto", "*", "WHERE Nombre='$valorEntrada'");
	echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
	echo "<Proyecto>";
	foreach($proyectos as $proyecto){
	echo "<Descripcion>".$proyecto->Descripcion."</Descripcion>";
	echo "<Responsable>".$proyecto->Responsable."</Responsable>";
	}
	echo "</Proyecto>";
?> 