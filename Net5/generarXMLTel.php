<?php
	require_once('ajax/clases/baseDatos.class.php');
	header('Content-Type: text/xml');
	$codigo = $_POST['lstCodigo'];
	$bd = bD::getInstance();
	$equipos = $bd->consultar("telvoips", "*", "WHERE Codigo='$codigo'");
	
	echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
	echo "<Tel>";
	foreach($equipos as $equipo){
	echo "<Marca>".$equipo->Marca."</Marca>";
	echo "<Modelo>".$equipo->Modelo."</Modelo>";
	echo "<Interfaz>".$equipo->Interfaz."</Interfaz>";
	echo "<Memoria>".$equipo->Memoria."</Memoria>";
	echo "<Pantalla>".$equipo->Pantalla."</Pantalla>";
	echo "<Linea>".$equipo->NLinea."</Linea>";
	echo "<Cantidad>".$equipo->Cantidad."</Cantidad>";
	}
	echo "</Tel>";
?> 