<?php
include_once('clases/HAAPS.class.php');
    session_start();
	$img = new HAAPS();
	$cadena = $img->ramdom(6, true, false, false);
	$img->imagen($cadena);
	$_SESSION['cadena']=$cadena;

?>