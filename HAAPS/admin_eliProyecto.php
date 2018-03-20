<?php
include_once('ajax/seguridad/seguridad.php');
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

<body onload="enfoque('lstNombre'); tablaProyectos('divTabla', 'actions.php', 'tablaProyectos');">

    <div id="main">
     
    <!-- inicio botones -->
     <div id="buttons">
      <div class="but1"><a class="selected" title="">Proyectos</a></div>
      <div  class="but2"><a href="documentos.php"  title="">Documentos</a></div>
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
      <h2><span class="color">Gestión de Proyectos</span></h2>
      <div class="text">
        <div align="right"></div>
      <br /><br />
      <div align="center">
       <form id="frmEliminar" name="frmEliminar" onsubmit="">
	<table class="form_Admin" width="63%" >
    <tr>
			<td colspan="4">&nbsp;</td>
			</tr>
    <tr>
      <td width="2%">&nbsp;</td>
			<td width="38%" ><b>Nombre:</b></td>
			<td width="54%"><select name="lstNombre" id="lstNombre"">
<?php
require_once('ajax/clases/baseDatos.class.php');
$bd = bD::getInstance();
$proyectos = $bd->consultar("proyecto", "*", "");
foreach($proyectos as $proyecto){
	echo "<option value='".$proyecto->Nombre ."'>".$proyecto->Nombre ."</option>";
	} 
?>
            </select><div id="divNombre" class="error"></div></td>
			<td width="6%">&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input id="form_submit" name="btnEliminar" type="submit" value="Eliminar" onclick="eliProyecto('eliProyecto'); return false;" /></td>
    </tr>
    <tr>
			<td colspan="4" align="center"><div id="divRespuesta" class="error"></div></td>
	</tr>
    </table>
</form>
<p>&nbsp;</p>
<div id="divTabla">
</div>
</div>
      </div>
      <br />
     </div>
            
     <div class="right">
      <h1>Opciones</h1>
      <div class="tit_bot">
       <ul>
        <li><a href="admin.php">Nuevo</a></li>
        <li><a href="admin_actProyecto.php">Actualizar</a></li>
        <li><a href="#">Eliminar</a></li>
        <li><a href="salir.php">Salir</a></li>
       </ul>
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
