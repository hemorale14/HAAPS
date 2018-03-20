<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Invetario</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body bgcolor="#CCCCCC">
<table width="634" >
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><b>Inventario</b></td>
  </tr>
  <tr>
    <td width="76"><img src="images/img1.jpg" width="129" height="81" class="img" alt=""  /></td>
    <td width="542" align="center">GRUPO NET 5<br />
Entre más grande la prueba,
más glorioso es el triunfo</td>
  </tr>
</table>

<?php
	require_once('ajax/clases/baseDatos.class.php');
	require_once("ajax/sesion/seguridad.php");
	$bd = bD::getInstance();
	
	$routers = $bd->consultar("routers", "*", "");
	       	echo  '<p><b>Router:</b></p>';
           	echo  '<p>';
		   	echo  '<table width="634" border="2">';
           	echo  '<tr bordercolor="#000000">';
           	echo  '<td>Código</td>';
           	echo  '<td>Marca</td>';
           	echo  '<td>Modelo</td>';
           	echo  '<td>Interfaz</td>';
           	echo  '<td>Factor Forma</td>';
           	echo  '<td>SW General</td>';
           	echo  '<td>Capacidad</td>';
           	echo  '<td>SO</td>';
           	echo  '<td>Cantidad</td>';
           	echo  '</tr>';
			foreach($routers as $router){  
  			echo	'<tr>';
    		echo 		'<td>'.$router->Codigo .'</td>';
    		echo 		'<td>'.$router->Marca.'</td>';
    		echo		'<td>'.$router->Modelo.'</td>';
    		echo		'<td>'.$router->Interfaz.'</td>';
			echo		'<td>'.$router->Factor_forma.'</td>';
			echo		'<td>'.$router->SWG.'</td>';
			echo		'<td>'.$router->Capacidad.'</td>';
			echo		'<td>'.$router->SO.'</td>';
			echo		'<td>'.$router->Cantidad.'</td>';			
  			echo	'</tr>';
			} 
		  	echo '</table>';
		  	echo '</p>';
			echo '<br/>';
			
			$pcs = $bd->consultar("pcs", "*", "");
			echo  '<p><b>PC:</b></p>';
           	echo  '<p>';
		   	echo  '<table width="634" border="2">';
           	echo  '<tr bordercolor="#000000">';
           	echo  '<td>Código</td>';
           	echo  '<td>Marca</td>';
           	echo  '<td>Modelo</td>';
           	echo  '<td>Interfaz</td>';
           	echo  '<td>Procesador</td>';
           	echo  '<td>SO</td>';
           	echo  '<td>RAM</td>';
           	echo  '<td>Disco Duro</td>';
           	echo  '<td>Cantidad</td>';
           	echo  '</tr>';
			foreach($pcs as $pc){  
  			echo	'<tr>';
    		echo 		'<td>'.$pc->Codigo .'</td>';
    		echo 		'<td>'.$pc->Marca.'</td>';
    		echo		'<td>'.$pc->Modelo.'</td>';
    		echo		'<td>'.$pc->Interfaz.'</td>';
			echo		'<td>'.$pc->Procesador.'</td>';
			echo		'<td>'.$pc->SO.'</td>';
			echo		'<td>'.$pc->RAM.'</td>';
			echo		'<td>'.$pc->DiscoDuro.'</td>';
			echo		'<td>'.$pc->Cantidad.'</td>';			
  			echo	'</tr>';
			} 
		  	echo '</table>';
		  	echo '</p>';
			echo '<br/>';
			
			$servidores = $bd->consultar("servidores", "*", "");
			echo  '<p><b>Servidores:</b></p>';
           	echo  '<p>';
		   	echo  '<table width="634" border="2">';
           	echo  '<tr bordercolor="#000000">';
           	echo  '<td>Código</td>';
           	echo  '<td>Marca</td>';
           	echo  '<td>Modelo</td>';
           	echo  '<td>Interfaz</td>';
           	echo  '<td>Procesador</td>';
           	echo  '<td>SO</td>';
           	echo  '<td>RAM</td>';
           	echo  '<td>Disco Duro</td>';
           	echo  '<td>Cantidad</td>';
           	echo  '</tr>';
			foreach($servidores as $servidor){  
  			echo	'<tr>';
    		echo 		'<td>'.$servidor->Codigo .'</td>';
    		echo 		'<td>'.$servidor->Marca.'</td>';
    		echo		'<td>'.$servidor->Modelo.'</td>';
    		echo		'<td>'.$servidor->Interfaz.'</td>';
			echo		'<td>'.$servidor->Procesador.'</td>';
			echo		'<td>'.$servidor->SO.'</td>';
			echo		'<td>'.$servidor->RAM.'</td>';
			echo		'<td>'.$servidor->DiscosDuros.'</td>';
			echo		'<td>'.$servidor->Cantidad.'</td>';			
  			echo	'</tr>';
			} 
		  	echo '</table>';
		  	echo '</p>';
			echo '<br/>';
			
			$TelVoIPs = $bd->consultar("TelVoIPs", "*", "");
			echo  '<p><b>TelVoIP:</b></p>';
           	echo  '<p>';
		   	echo  '<table width="634" border="2">';
           	echo  '<tr bordercolor="#000000">';
           	echo  '<td>Código</td>';
           	echo  '<td>Marca</td>';
           	echo  '<td>Modelo</td>';
           	echo  '<td>Interfaz</td>';
           	echo  '<td>Memoria</td>';
           	echo  '<td>Pantalla</td>';
           	echo  '<td>Numero de Linea</td>';
           	echo  '<td>Cantidad</td>';
           	echo  '</tr>';
			foreach($TelVoIPs as $TelVoIP){  
  			echo	'<tr>';
    		echo 		'<td>'.$TelVoIP->Codigo .'</td>';
    		echo 		'<td>'.$TelVoIP->Marca.'</td>';
    		echo		'<td>'.$TelVoIP->Modelo.'</td>';
    		echo		'<td>'.$TelVoIP->Interfaz.'</td>';
			echo		'<td>'.$TelVoIP->Memoria.'</td>';
			echo		'<td>'.$TelVoIP->Pantalla.'</td>';
			echo		'<td>'.$TelVoIP->NLinea.'</td>';
			echo		'<td>'.$TelVoIP->Cantidad.'</td>';			
  			echo	'</tr>';
			} 
		  	echo '</table>';
		  	echo '</p>';
			echo '<br/>';
			/*
			$switches = $bd->consultar("switches", "*", "");
			echo  '<p><b>Switch:</b></p>';
           	echo  '<p>';
		   	echo  '<table border="3" bordercolor="#000000">';
           	echo  '<tr bordercolor="#000000">';
           	echo  '<td>Código</td>';
           	echo  '<td>Marca</td>';
           	echo  '<td>Modelo</td>';
           	echo  '<td>Interfaz</td>';
           	echo  '<td>Puertos</td>';
           	echo  '<td>Transferencia</td>';
           	echo  '<td>Cable</td>';
           	echo  '<td>Topologia</td>';
			echo  '<td>Buffer</td>';
			echo  '<td>Transmision</td>';
           	echo  '<td>Cantidad</td>';
           	echo  '</tr>';
			foreach($switches as $switch){  
  			echo	'<tr>';
    		echo 		'<td>'.$switch->Codigo .'</td>';
    		echo 		'<td>'.$switch->Marca.'</td>';
    		echo		'<td>'.$switch->Modelo.'</td>';
    		echo		'<td>'.$switch->Interfaz.'</td>';
			echo		'<td>'.$switch->NumeroPuertos.'</td>';
			echo		'<td>'.$switch->TasaTransferencia.'</td>';
			echo		'<td>'.$switch->TipoCable.'</td>';
			echo		'<td>'.$switch->Topologia.'</td>';
			echo		'<td>'.$switch->RAMBuffer.'</td>';	
			echo		'<td>'.$switch->MTransmision.'</td>';
			echo		'<td>'.$switch->Cantidad.'</td>';		
  			echo	'</tr>';
			} 
		  	echo '</table>';
		  	echo '</p>';
			echo '<br/>';*/
			
			echo '<SCRIPT LANGUAGE="JavaScript">'; 
			echo 'if (window.print) {';
			echo "document.write('<form>";
			echo '<input type=button name=print value="Imprimir" onClick="window.print()">';
			echo "</form>');}</script>";
			
?>
</body>
</html>
