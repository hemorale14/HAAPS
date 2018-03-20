<?php
	require_once('ajax/clases/baseDatos.class.php');
	header('Content-Type: text/xml');
	$bd = bD::getInstance();
	$equipos = $bd->consultar("routers", "*", "WHERE Codigo='0'");
	
	echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
	echo "<Router>";
	foreach($equipos as $equipo){
	echo "<Marca>".$equipo->Marca."</Marca>";
	echo "<Modelo>".$equipo->Modelo."</Modelo>";
	echo "<Interfaz>".$equipo->Interfaz."</Interfaz>";
	echo "<Factor>".$equipo->Factor_forma."</Factor>";
	echo "<SW>".$equipo->SWG."</SW>";
	echo "<Capacidad>".$equipo->Capacidad."</Capacidad>";
	echo "<SO>".$equipo->SO."</SO>";
	echo "<Cantidad>".$equipo->Cantidad."</Cantidad>";
	}
	echo "</Router>";
?> 