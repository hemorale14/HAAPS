<?php
	require_once("ajax/clases/validarDatos.class.php");
	require_once ('Ajax/clases/baseDatos.class.php');
$action = $_POST['action'];

switch($action){
		case 'validarDato':
			return datos($_POST['valorEntrada'], $_POST['idCampo']);
        break;
		case 'img':
			return datos('',"txtCargarIMG");
		break;
		case 'insProyecto':
			return insProyecto($_POST['txtNombre'], $_POST['txtDescripcion'], $_POST['txtResponsable']);
		break;
		case 'tablaProyectos':
			return tablaProyectos();
		break;
		case 'generarXMLProyecto':
			return generarXMLProyecto($_POST['lstNombre']);
		break;
		case 'actProyecto':
			return actProyecto($_POST['lstNombre'], $_POST['txtDescripcion'], $_POST['txtResponsable']);
		break;
		case 'eliProyecto':
			return eliProyecto($_POST['lstNombre']);
		break;
		case 'tablaDocumentos':
			return tablaDocumentos();
		break;
		case 'tablaDocumentos2':
			return tablaDocumentos2();
		break;
		case 'eliDocumento':
			return eliDocumento($_POST['lstId']);
		break;
		case 'tablaUsuarios':
			return tablaUsuarios();
		break;
		case 'insUsuario':
			return insUsuario($_POST['txtEmail'], $_POST['lstProyecto']);
		break;
		case 'actCliente':
			return actCliente($_POST['lstEmail']);
		break;
		case 'eliUsuario':
			return eliUsuario($_POST['lstEmail']);
		break;
    	}

function datos($valorEntrada, $idCampo){
	$evaluador = new validarDato();
	echo $evaluador->validarDatoAJAX($valorEntrada, $idCampo);
	}

function insProyecto($nombre, $descripcion, $responsable){
	sleep(2);
	$bd = bD::getInstance();
	if($nombre!="" && $descripcion!="" && $responsable!=""){
		if($bd->procedimiento("pa_proyecto","'$nombre','$descripcion', '$responsable'")== true){
			echo 'Registro Exitoso';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}

function tablaProyectos(){
	$bd = bD::getInstance();
	
	$proyectos = $bd->consultar("proyectos", "*", "");
	echo '<table width="432" border="2" class="auto-style2">';
	echo '<tr>';
    echo '<td colspan="3" align="center" class="auto-style1"><strong>Proyectos en Desarrollo</strong></td>';
    echo '</tr>';
    echo '<tr align="center">';
    echo '<td class="auto-style1">Proyecto</td>';
    echo '<td class="auto-style1">Descripcion</td>';
    echo '<td class="auto-style1">Responsable</td>';
    echo '</tr>';
	foreach($proyectos as $proyecto){ 
    echo '<tr>';
    echo '<td class="auto-style3">'.$proyecto->Proyecto .'</td>';
    echo '<td class="auto-style3">'.$proyecto->Descripcion .'</td>';
    echo '<td class="auto-style3">'.$proyecto->Responsable .'</td>';
	echo '</tr>';
	}
    echo '</table>';
	}

function generarXMLProyecto($valorEntrada){
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
	}

function actProyecto($nombre, $descripcion, $responsable){
	sleep(2);
	$bd = bD::getInstance();
	if(trim($nombre)!="" && trim($descripcion)!="" && trim($responsable)!=""){
		if($bd->procedimiento("pa_act_proyecto", "'$nombre','$descripcion','$responsable'")== true){
			echo 'Actualizacion Exitosa';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}

function eliProyecto($valorEntrada){
	sleep(2);
	$bd = bD::getInstance();
	if($valorEntrada!=""){
		if($bd->procedimiento("pa_eli_proyecto", "'$valorEntrada'")== true){
			echo 'Eliminacion Exitosa';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}
	
function tablaDocumentos(){
	$bd = bD::getInstance();
	
	$documentos = $bd->consultar("TDocumentos", "*", "");
	echo '<table width="432" border="2" class="auto-style2" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;">';
	echo '<tr>';
    echo '<td colspan="3" align="center" class="auto-style1"><strong>Documentos en el Servidor</strong></td>';
    echo '</tr>';
    echo '<tr align="center">';
    echo '<td class="auto-style1">Nombre</td>';
    echo '<td class="auto-style1">Descripcion</td>';
    echo '<td class="auto-style1">PDF</td>';
    echo '</tr>';
	foreach($documentos as $documento){ 
    echo '<tr>';
    echo '<td class="auto-style3">'.$documento->Nombre .'</td>';
    echo '<td class="auto-style3">'.$documento->Descripcion .'</td>';
    echo '<td class="auto-style3"> <a href="pdf.php?id='.$documento->Id .'" target="_blank"><img src="imagenes/iconos/pdf.gif" /></a></td>';
	echo '</tr>';
	}
    echo '</table>';
	}
	
	function tablaDocumentos2(){
	$bd = bD::getInstance();
	
	$documentos = $bd->consultar("Documentos", "*", "");
	echo '<table width="432" border="2" class="auto-style2" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;">';
	echo '<tr>';
    echo '<td colspan="4" align="center" class="auto-style1"><strong>Documentos en el Servidor</strong></td>';
    echo '</tr>';
    echo '<tr align="center">';
    echo '<td class="auto-style1">Id</td>';
    echo '<td class="auto-style1">Nombre</td>';
    echo '<td class="auto-style1">PDF</td>';
	echo '<td class="auto-style1">Proyecto</td>';
    echo '</tr>';
	foreach($documentos as $documento){ 
    echo '<tr>';
    echo '<td class="auto-style3">'.$documento->Id .'</td>';
    echo '<td class="auto-style3">'.$documento->Nombre .'</td>';
    echo '<td class="auto-style3"> <a href="pdf.php?id='.$documento->Id .'" target="_blank"><img src="imagenes/iconos/pdf.gif" /></a></td>';
	echo '<td class="auto-style3">'.$documento->Proyecto .'</td>';
	echo '</tr>';
	}
    echo '</table>';
	}

function eliDocumento($valorEntrada){
	sleep(2);
	$bd = bD::getInstance();
	if($valorEntrada!=""){
		if($bd->procedimiento("pa_eli_documento", "'$valorEntrada'")== true){
			echo 'Eliminacion Exitosa';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}

function tablaUsuarios(){
	$bd = bD::getInstance();
	
	$usuarios = $bd->consultar("usuarios", "*", "");
	echo '<table width="432" border="2" class="auto-style2">';
	echo '<tr>';
    echo '<td colspan="3" align="center" class="auto-style1"><strong>Usuarios Registrados</strong></td>';
    echo '</tr>';
    echo '<tr align="center">';
    echo '<td class="auto-style1">Usuario</td>';
	echo '<td class="auto-style1">Proyecto</td>';
	echo '<td class="auto-style1">Clasificacion</td>';
    echo '</tr>';
	foreach($usuarios as $usuario){ 
    echo '<tr>';
    echo '<td class="auto-style3">'.$usuario->Email .'</td>';
	echo '<td class="auto-style3">'.$usuario->Proyecto .'</td>';
    echo '<td class="auto-style3">'.$usuario->Tipo .'</td>';
	echo '</tr>';
	}
    echo '</table>';
	}

function insUsuario($email, $proyecto){
	sleep(2);
	$bd = bD::getInstance();
	if($email!="" && $proyecto!=""){
		if($bd->procedimiento("pa_cliente","'$email','HAAPSSoft', '$proyecto'")== true){
			echo 'Registro Exitoso';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}
	
function actCliente($valorEntrada){
	sleep(2);
	$bd = bD::getInstance();
	if(trim($valorEntrada)!=""){
		if($bd->procedimiento("pa_act_cliente", "'$valorEntrada','HAAPS'")== true){
			echo 'Actualizacion Exitosa';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}

function eliUsuario($valorEntrada){
	sleep(2);
	$bd = bD::getInstance();
	if($valorEntrada!=""){
		if($bd->procedimiento("pa_eli_usuarios", "'$valorEntrada'")== true){
			echo 'Eliminacion Exitosa';
			}
		else{ echo 'Ocurrio un Error';}
		}
	else{echo 'Informacion Incompleta';}
	}

?>