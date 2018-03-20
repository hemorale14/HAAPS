<?php
include_once('ajax/seguridad/seguridad.php');
require_once('ajax/clases/baseDatos.class.php');
$bd = bD::getInstance();
if(isset($_POST['btnEnviar'])){
	$archivo = $_FILES["archivo"]["tmp_name"];
	$tamanio = $_FILES["archivo"]["size"];
	$tipo = $_FILES["archivo"]["type"];
	$nombre = $_POST["txtNombre"];
	$descripcion = $_POST["txtDescripcion"];
	$proy = $_POST['lstProyecto'];
		if ( $archivo != "none" ){
			$fp = fopen($archivo, "rb");
			$contenido = fread($fp, $tamanio);
			$contenido = addslashes($contenido);
			fclose($fp);
			if ($bd->insertar("Documentos","nombre, descripcion, contenido, tipo, proyecto","'$nombre', '$descripcion', '$contenido', '$tipo', '$proy'")==true){
				echo '<script type="text/javascript"> function myFunction() { alert("Registro Exitoso"); } </script>';
				}
			else { echo '<script type="text/javascript"> function myFunction() { alert("Ocurrio un Error"); } </script>';}
		}
		else {'<script type="text/javascript"> function myFunction() { alert("No se ha podido subir el archivo al servidor"); } </script>';}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Administración</title>
<script language="javascript" type="text/javascript" src="ajax/ajax.js"></script>
<link href="css/principal.css" rel="stylesheet" type="text/css" />
<link href="css/contenidos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	text-decoration: underline;
	border-style: solid;
	border-width: 1px;
	background-color: #999999;
}
.auto-style2 {
	border-width: 0px;
}
.auto-style3 {
	/*text-decoration: underline;*/
	border-style: solid;
	border-width: 1px;
}
</style>
</head>

<body onload="enfoque('txtNombre'); tablaProyectos('divTabla', 'actions.php', 'tablaDocumentos');  myFunction();">

    <div id="main">
     
    <!-- inicio botones -->
     <div id="buttons">
      <div class="but1"><a href="admin.php" title="">Proyectos</a></div>
      <div class="but2"><a class="selected" href="#" title="">Documentos</a></div>
      <div class="but3"><a href="usuarios.php" title="">Usuarios</a></div>
      <div class="but4"><a href="#" >Noticias</a></div>
      <div class="but5"><a href="#" title="">Promociones</a></div>
      <div class="user_text">Bienvenido<br /> 
		<h3><?php echo $_SESSION['user']; ?></h3></div>  
     </div>
    <!-- fin botones -->
     
    <!-- inicio cuerpo -->
     <div id="cont_out">
     <!-- content begins -->
      <div id="content">
       <div id="leftSesion"><!-- <h1>Noticias de la Organización</h1> -->
      <!-- <div class="tit_bot">--><!--</div>-->
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     <img src="imagenes/tecnologia.jpg" width="225" height="108" />
     </div>
      
     <div id="center">
      <h2><span class="color">Gestión de Documentos</span></h2>
      <div class="text">
        <div align="right"></div>
      <br /><br />
      <div align="center">
       <form  id="frmRegistrar" name="frmRegistrar" enctype="multipart/form-data" action="documentos.php" method="post" >
	<table class="form_Admin" width="63%" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;">
    <tr>
			<td colspan="4">&nbsp;</td>
			</tr>
    <tr>
      <td width="2%">&nbsp;</td>
			<td width="38%" ><b>Nombre:</b></td>
			<td width="54%"><input type="text" id="txtNombre" name="txtNombre" maxlength="" onblur="validarDato(this.value, this.id, 'divNombre', 'actions.php', 'validarDato');" /><div id="divNombre" class="error"></div></td>
			<td width="6%">&nbsp;</td>
	</tr>
    <tr>
      <td width="2%">&nbsp;</td>
			<td width="38%" ><b>Descripción:</b></td>
			<td width="54%"><textarea  id="txtDescripcion" name="txtDescripcion" maxlength="" onblur="validarDato(this.value, this.id, 'divDescripcion', 'actions.php', 'validarDato');"></textarea><div id="divDescripcion" class="error"></div></td>
			<td width="6%">&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Proyecto:</b></td>
			<td><select name="lstProyecto" id="lstProyecto" onblur="">
<?php
$proyectos = $bd->consultar("proyecto", "*", "");
foreach($proyectos as $proyecto){
	echo "<option value='".$proyecto->Nombre ."'>".$proyecto->Nombre ."</option>";
	} 
?>
            </select><div id="divProyecto" class="error"></div></td>
			<td>&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Archivo:</b></td>
			<td><input type="file" id="archivo" name="archivo"/><div id="divResponsable" class="error"></div></td>
			<td>&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input id="form_submit" name="btnEnviar" type="submit" value="Enviar"/></td>
    </tr>
    <tr>
			<td colspan="4" align="center"><div id="divRespuesta" class="error"></div></td>
	</tr>
    </table>
       </form>
<p>&nbsp;</p>
<div id="divTabla" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;">
</div>
</div>
      </div>
      <br />
     </div>
            
     <div class="right">
      <h1>Opciones</h1>
      <div class="tit_bot">
       <ul>
        <li><a href="#">Nuevo</a></li>
        <li><a href="admin_eliDocumento.php">Eliminar</a></li>
        <li><a href="salir.php">Salir</a></li>
       </ul>
       <br />
      </div>
     </div>
     <div style="clear: both"><img src="images/spaser.gif" alt="" width="1" height="1" /></div>
     </div>
    </div>
    <!-- fin cuerpo -->
   
    <!-- inicio pie página-->
     <div id="footer">
      <p>&nbsp;</p>
      <table width="100%">
       <tr>
        <td width="50%" align="left">&nbsp;</td>
        <td width="50%">Copyright © 2012 <a href="http://www.metamorphozis.com/" title="Flash Templates">HAAPS.soft Telecom</a> Todos los Derechos Reservados.</td>
       </tr>
      </table>
     </div>
    <!-- fin pie página -->
   </div>
    
</body>
</html>
