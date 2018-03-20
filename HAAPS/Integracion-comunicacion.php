<?php
session_start();
if(isset($_POST['btnEnviar'])){
	$texto=trim($_POST['txtTexto']);
	$cadena = $_SESSION['cadena'];
	$nombre=trim($_POST['txtNombre']);
	$email=trim($_POST['txtEmail']);
	$asunto=trim($_POST['txtAsunto']);
	$mensaje=trim($_POST['txtMensaje']);
	if($nombre!=""&&$email!=""&&$asunto!=""&&$mensaje!=""){
		if($texto === $cadena){
			$mensaje = "\nNombre: ". $nombre;
  			$mensaje.= "\nEmail: ". $email;
 			$mensaje.= "\nMensaje: \n". $mensaje;
  			$destino= "hectorrochamorales@gmail.com";
  			$remitente = $email;
  			mail($destino,$asunto,$mensaje,"FROM: $remitente");
			echo '<script type="text/javascript"> function myFunction() { alert("Mensaje enviado"); } </script>';
			session_destroy();
			}
		else{ echo '<script type="text/javascript"> function myFunction() { alert("El texto no coincide con la imagen"); } </script>';
			session_destroy(); 
			}
		}
	else {
		echo '<script type="text/javascript"> function myFunction() { alert("Todos los datos son necesarios"); } </script>'; 
		session_destroy();
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyectos exitosos - En base a Análisis de Requerimientos</title>
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="30 days" />
<meta name="description" content="El contacto con el cliente es sumamente importante para el éxito de un proyecto, la atención debe ser constante y el uso de la tecnología informática lo facilita" />
<meta name="keywords" content="Satisfacer, Necesidades, Especialización, Discontinuidad, Cambio, Integración, Efectividad, Servicios, Productos, Mercadeo" />
<script language="javascript" type="text/javascript" src="ajax/ajax.js"></script>
<link href="css/principal.css" rel="stylesheet" type="text/css" />
<link href="css/contenidos.css" rel="stylesheet" type="text/css" />
</head>

<body onload="enfoque('txtNombre'); imagen('divTexto', 'actions.php', 'img'); myFunction();" >
<script src="ajax/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
</script>
<script src="ajax/jquery.tipsy.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(function() {
	  $('#forgot_username_link').tipsy({gravity: 'w'});   
    });
  </script>

    <div id="main">
    <!-- inicio flash -->
     <object data="flash/tecnologia.swf" type="application/x-shockwave-flash" style="width: 1004px; height: 127px;">
      <param name="wmode" value="transparent" />
	  <param name="movie" value ="flash/tecnologia.swf" />
	  <param name="quality" value="High" />
	 </object>
    <!-- fin flash -->
    
    <!-- inicio botones -->
     <div id="buttons">
      <div id="but1"><a href="HAAPS.Soft-Telecom-Tecnología.html" title="">Inicio</a></div>
      <div id="but2"><a href="Estrategia-Emprendedora-TI.html" title="">Conócenos</a></div>
      <div id="but3"><a href="Productos-Servicios-Informáticos.html" title="">Servicios</a></div>
      <div id="but4"><a href="Competencia-Difusión-InformaciónTI.html" title="">Noticias</a></div>
      <div id="but5"><a class="selected" href="contacto.html" title="">Contacto</a></div>
      <div id="x">
      <table width="200">
       <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
       <tr>
        <td align="right"><form action="http:\\www.twitter.com/HAAPSSoftOficial" target="_blank"><input type="image" src="imagenes/iconos/twitter-sistemas.ico" /></form></td>
        <td align="center"><form action="http:\\www.facebook.com/HAAPSSoftOficial" target="_blank"><input type="image" src="imagenes/iconos/facebook-sistemas.ico" /></form></td>
        <td align="left"><form action="sitemap-HAAPS.SoftTelecom.html" target="_blank"><input type="image" src="imagenes/iconos/sitemap-HAAPS.SoftTelecom.gif" /></form></td>
       </tr>
      </table>
      </div>  
     </div>
    <!-- fin botones -->
     
    <!-- inicio cuerpo -->
     <div id="cont_out">
     <!-- content begins -->
      <div id="content">
       <div id="left">
        <h1>Noticias de la Organización</h1>
        <div class="tit_bot">
         <div class="list">
          <span class="dat">06-04-2012 </span><br />
          <span>Contratación de personal.</span><br />
          HAAPS.Soft Telecom solicita personal capacitado en el área de sistemas.
          El objetivó el puesto es: Efectuar el elevamiento y análisis de los sistemas informáticos....
          <div class="read"><a href="noticias.php"><img src="css/imagenes/notas-Informaticas.gif"/></a></div>
         </div>
        <br /> 
        <h1>Ofrertas y Paquetes</h1>
        <div class="list"><span class="dat">17-04-2012</span><br /><span>Demostración de  nuestros servicios.</span><br />
        HAAPS.Soft Telecom  para mostrar la capacidad de solución de problemas, participara en la demostración de proyectos en la Universidad Tecnológica... 
        <div class="read"><a href="noticias.php"><img src="css/imagenes/notas-Informaticas.gif"/></a></div>
       </div>
      </div>
     </div>     
     <table width="700px">
      <tr>
        <td colspan="3">
        <div id="container">
          <div id="topnav" class="topnav"><a href="login" class="signin"><span style="color:#FFFFFF">Iniciar Sesión</span></a></div>
          <fieldset id="signin_menu">
           <form method="post" id="signin" action="control.php">
           <p class="letra">
            <label for="lblEmail"><b>Email</b></label>
            <input id="txtEmail" name="txtEmail" value="" title="txtEmail" tabindex="4" type="text">
           </p>
           <p class="letra">
            <label for="lblContrasenia"><b>Contraseña</b></label>
            <input id="txtContrasenia" name="txtContrasenia" value="" title="txtContrasenia" tabindex="5" type="password">
           </p>
           <p class="letra">
            <input id="signin_submit" name="btnISesion" value="Iniciar Sesión" tabindex="6" type="submit">
           </p>
           <p class="letra" style="color:#0033FF">  </p>
           </form>
          </fieldset>
         </div>
        </td>
      </tr>
      <tr>
        <td width="50px"></td>
        <td width="600px"><div>
      <h2><span class="color">Le Informamos Sin Ningún Compromiso </span></h2>
      <div style="font-family:Verdana, Geneva, sans-serif; font-size:12px; text-align:justify; line-height:20px;">
       <p><br />
       ¿Tiene un proyecto inconcluso?<br />
¿Tiene un sitio web que no atrae visitas?<br />
¿Requiere un software que se adapte a sus necesidades?<br />
¿Requiere compartir información?<br />
¿Tienes problemas con su equipo de cómputo?<br />
</p>
      </div>
      <div class="read"><br /></div><br /> 
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
    <tr align="right">
      <td>&nbsp;</td>
    <td>&nbsp;</td>
			<td><div id="divTexto" class="error"></div>
            <!--<div align="right">-->
			</td>
			<td><input id="form_submit" name="btnCambiar" type="button" value="Cambiar" onclick="imagen('divTexto', 'actions.php', 'img');" /></td>
			</tr>
    <tr>
      <td>&nbsp;</td>
			<td><b>Texto de la imagen:</b></td>
			<td><input id="txTexto" name="txtTexto"/></td>
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
      <br />
     </div></td>
        <td width="50px">
        </td>
       </tr>
       <tr>
       <td width="50px"></td>
       <td width="600px"><p style="font-family:Verdana, Geneva, sans-serif; font-size:12px; text-align:justify; line-height:20px;"><br /><b>Dirección:</b><br />
Calle 5 de mayo n. 50-B, San Martín Texmelucan, Puebla. 
<br />
<br />
<b>Teléfono:</b> 01 (248) 120-4963<br />
<b>Facebook:</b> HAAPS.SoftOficial<br />
<b>twitter@</b>HAAPSSoftOficial<br />
<b>Correo:</b> HAAPS_Soft@hotmail.com <br /><br /> </p></td>
       <td width="50px"></td>
       </tr>
       
      </table>
     <div style="clear: both"><img src="images/spaser.gif" alt="" width="1" height="1" /></div>
     </div>
    </div>
    <!-- fin cuerpo -->
   
    <!-- inicio pie página-->
     <div id="footer">
      <p>&nbsp;</p>
      <table width="100%">
       <tr>
        <td width="50%" align="left">
        <table cellspacing="5">
          <tr>
            <td><a href="HAAPS.Soft-Telecom-Tecnología.html">Inicio</a> | </td>
            <td><a href="Estrategia-Emprendedora-TI.html">Conócenos</a> | </td>
            <td><a href="Productos-Servicios-Informáticos.html">Servicios</a> | </td>
            <td><a href="Competencia-Difusión-InformaciónTI.html">Noticias</a> | </td>
            <td><a>Contacto</a></td>
          </tr>
        </table></td>
        <td width="50%">Copyright © 2012 <a>HAAPS.soft Telecom</a> Todos los Derechos Reservados.</td>
       </tr>
      </table>
     </div>
    <!-- fin pie página -->
   </div>
    
</body>
</html>
