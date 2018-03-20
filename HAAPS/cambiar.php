<?php
include_once('ajax/seguridad/seguridad.php');
include_once('ajax/clases/baseDatos.class.php');
$bd = bD::getInstance();
$email = $_SESSION['user'];
if(isset($_POST['btnAceptar'])){
	$contrasenia=trim($_POST['txtContrasenia']);
	if($contrasenia!=""){
		if($bd->procedimiento("pa_act_cliente", "'$email','$contrasenia'")== true){
			echo '<script type="text/javascript"> function myFunction() { alert("Actualizacion exitosa"); } </script>';
            }
		else{ echo '<script type="text/javascript"> function myFunction() { alert("Ocurrio un Error"); } </script>';}
		}
	else {
		echo '<script type="text/javascript"> function myFunction() { alert("Nueva Contraseña Necesaria"); } </script>'; 
		session_destroy();
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cliente</title>
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

<body onload="enfoque('txtContrasenia');  myFunction();">

    <div id="main">
    <!-- inicio botones -->
     <div id="buttons">
       
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
      <h2><span class="color">Bienvenido </span> <?php echo " ".$_SESSION['user']; ?></h2>
      <div class="text">
       <p>&nbsp;</p>
       <p><span class="color">Cambiar Contraseña.</span> </p>
       <p>       
       <p>
       <div align="center">
       <form id="frmActualizar" name="frmActualizar" method="post" action="cambiar.php" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;">
	<table class="form_Admin" width="63%" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;" >
    <tr>
			<td colspan="4">&nbsp;</td>
			</tr>
    <tr>
      <td width="2%">&nbsp;</td>
      <td width="38%" ><b>Nueva Contraseña:</b></td>
      <td width="54%">
        <input type="password" name="txtContrasenia" id="txtContrasenia" />
        <div id="divContrasenia" class="error"></div></td>
      <td width="6%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input id="form_submit" name="btnAceptar" style="width:auto" type="submit" value="Aceptar" />
    </td>
    </tr>
    <tr>
			<td colspan="4" align="center"><div id="divRespuesta" class="error"></div></td>
	</tr>
    </table>
</form>
<p>&nbsp;</p></div>
      </div>
     </div>
     <div class="right">
      <h1>Servicios</h1>
      <div class="tit_bot">
        <ul>
        <li><a href="salir.php">Salir</a></li>
       </ul>
      </div>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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
