<?php
include_once('ajax/seguridad/seguridad.php');

if(isset($_POST['btnEnviar'])){
	$nombre=trim($_POST['txtNombre']);
	$email=trim($_POST['txtEmail']);
	$asunto=trim($_POST['txtAsunto']);
	$mensaje=trim($_POST['txtMensaje']);
	if($nombre!=""&&$email!=""&&$asunto!=""&&$mensaje!=""){
		$mensaje = "\nNombre: ". $nombre;
  		$mensaje.= "\nEmail: ". $email;
 		$mensaje.= "\nMensaje: \n". $mensaje;
  		$destino= "hectorrochamorales@gmail.com";
  		$remitente = $email;
  		mail($destino,$asunto,$mensaje,"FROM: $remitente");
		echo '<script type="text/javascript"> function myFunction() { alert("Mensaje enviado"); } </script>';
	}
	else {
		echo '<script type="text/javascript"> function myFunction() { alert("Todos los datos son necesarios"); } </script>'; }
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

<body onload="enfoque('txtNombre')">

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
       <p><span class="color">Hacer una Pregunta.</span> </p>
       <div>&nbsp;</div>
       <div>&nbsp;</div>
       <div align="center">
       <form id="" method="post" action="Integracion-comunicacion.php">
	<table class="form_tabla" width="65%" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; text-align:justify; line-height:20px;" >
    <tr>
			<td colspan="4">&nbsp;</td>
			</tr>
    <tr>
      <td width="2%">&nbsp;</td>
			<td width="26%" ><b>Nombre:</b></td>
			<td width="47%"><input type="text" id="txtNombre" name="txtNombre" maxlength="" onblur="validarDato(this.value, this.id, 'divNombre', 'actions.php', 'validarDato');"/><div id="divNombre" class="error"></div></td>
			<td width="25%">&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Email:</b></td>
			<td><input type="text" id="txtEmail" name="txtEmail" maxlength="" onkeypress="validarDato(this.value, this.id, 'divEmail', 'actions.php', 'validarDato')" onblur="validarDato(this.value, this.id, 'divEmail', 'actions.php', 'validarDato')"/><div id="divEmail" class="error"></div></td>
			<td>&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Asunto:</b></td>
			<td><input type="text" id="txtAsunto" name="txtAsunto" maxlength="" onblur="validarDato(this.value, this.id, 'divAsunto', 'actions.php', 'validarDato');"/><div id="divAsunto" class="error"></div></td>
			<td>&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Mensaje:</b></td>
			<td><textarea id="txtMensaje" name="txtMensaje" onblur="validarDato(this.value, this.id, 'divMensaje', 'actions.php', 'validarDato');"></textarea><div id="divMensaje" class="error"></div></td>
			<td>&nbsp;</td>
	</tr>
    <tr>
      <td colspan="4" align="center"><input id="form_submit" name="btnEnviar" type="submit" value="Enviar" />
        <input id="form_submit" name="btnCancelar" type="reset" value="Cancelar" /></td>
    </tr>
    <tr>
			<td colspan="4" align="center">
            <div id="divCatch" class="error"></div>
            </td>
	</tr>
    </table>
</form>
       </div>
      </div>
     </div>
     <div class="right">
      <h1>Opciones</h1>
      <div class="tit_bot">
       <ul>
        <li><a href="cliente.php">Documentación</a></li>
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
