<?php
	require_once('ajax/clases/baseDatos.class.php');
	header('Content-Type: text/xml');
	$codigo = $_POST['lstCodigo'];
	$bd = bD::getInstance();
	$equipos = $bd->consultar("servidores", "*", "WHERE Codigo='$codigo'");
	
	echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
	echo "<Pc>";
	foreach($equipos as $equipo){
	echo "<Marca>".$equipo->Marca."</Marca>";
	echo "<Modelo>".$equipo->Modelo."</Modelo>";
	echo "<Interfaz>".$equipo->Interfaz."</Interfaz>";
	echo "<Procesador>".$equipo->Procesador."</Procesador>";
	echo "<SO>".$equipo->SO."</SO>";
	echo "<Ram>".$equipo->RAM."</Ram>";
	echo "<DiscoDuro>".$equipo->DiscoDuro."</DiscoDuro>";
	echo "<Cantidad>".$equipo->Cantidad."</Cantidad>";
	}
	echo "</Pc>";
?> 