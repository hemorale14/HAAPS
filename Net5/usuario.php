<?php
require_once("ajax/sesion/seguridad.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Usuario</title>
<script language="javascript" type="text/javascript" src="ajax/ajax.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ajax/validarDato.css" rel="stylesheet" type="text/css" />
</head>

<body onload="enfoque('txtEmail')">

<div id="main">
<!-- header begins -->
    <div id="buttons">
      <div class="but1"><a class="razd_but"  title="">Usuario</a></div>
      <div class="but2"><a class="razd_but" title=""></a></div>
      <div class="but3"><a class="razd_but" title=""></a></div>
      <div class="but4"><a class="razd_but" title=""></a></div>
      <div class="but5"><a class="razd_but" title=""></a></div>
	  <div class="logo_text">GRUPO NET 5<br /> 
		<h3>Entre más grande la prueba,<br/>
        más glorioso es el triunfo</h3></div>	  
    </div>
<!-- header ends -->
    <div id="cont_out">
        <!-- content begins -->
        <div id="content">
            <div id="left">
                	<h1>Noticias de la Organización</h1>
                    <div class="tit_bot">
                        <div class="list"><span class="dat">06-04-2012 </span><br /><span>Contratación de personal.</span><br />
                            GRUPO NET 5 solicita personal capacitado en el área de sistemas.
El objetivó el puesto es: Efectuar el elevamiento y análisis de los sistemas informáticos....
                              <div class="read"><a href="noticias.php"><img src="images/but_read.gif" alt="" /></a></div>
                        </div>
                        <div class="list"><span class="dat">17-04-2012</span><br /><span>Demostración de  nuestros servicios.</span><br />
                           GRUPO NET 5 para mostrar la capacidad de solución de problemas, participara en la demostración de proyectos en la Universidad Tecnológica... 
                          <div class="read"><a href="noticias.php"><img src="images/but_read.gif" alt="" /></a></div>
                        </div>
                    </div>
            </div>
            <div id="center">
		<h2>Hacer comentario</h2>
		<div class="text"><br />
              ¿Sugerencias, Preguntas o Comentarios?<br />
              Estamos para servirle.
<br /><br /><br />
<div align="center" style="font-family:'Arial Black', Gadget, sans-serif">
<form name="frmRegistrar" onsubmit="">
	<table bgcolor="#CCCCCC">
    <tr>
			<td colspan="2">&nbsp;</td>
			</tr>
    <tr>
			<td>E-mail:</td>
			<td><input name="txtEmail" type="text" id="txtEmail" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="30" onblur="validarEquipo(this.value, this.id, 'divEmail', 'validarComentario.php')"/><div id="divEmail" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td>Comentario:</td>
			<td><textarea name="txtComentario" id="txtComentario" style="font-family:Verdana, Geneva, sans-serif; height:50px; font-size:10px" onblur="validarEquipo(this.value, this.id, 'divComentario', 'validarComentario.php')"></textarea><div id="divComentario" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center"><div id="resultado" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center"></td>
	</tr>
    <tr>
			<td colspan="2"><input name="txtEnviar" type="submit" value="Enviar" style="width: 80px;" onclick="enviarComentario(); return false"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input name="txtCancelar" type="reset" value="Cancelar" style="width: 80px;"/></td>
			</tr>
    <tr>
			<td colspan="2" align="center"><div></div></td>
	</tr>
    </table>
</form>
</div>
</div>
        <div class="read"><br /></div>
                    <br />
            </div>
            <div class="right">
                <h1>Opciones</h1>
                <div class="tit_bot">
                  <ul>
                    <li><a href="salir.php">cerrar sesión</a></li>
                   </ul>
                  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
              </div>
          </div>
            <div style="clear: both"><img src="images/spaser.gif" alt="" width="1" height="1" /></div>
        </div>
    </div>
    <!-- content ends -->
    <!-- footer begins -->
    <div id="footer">
  Copyright  2011. Designed by <a href="http://www.metamorphozis.com/" title="Flash Templates">Flash Templates</a><br />
		<a href="license.txt">Privacy Policy</a> | <a href="license.txt">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></div>
<!-- footer ends -->
</div>
<div style="text-align: center; font-size: 0.75em;">Diseño descargado desde <a href="http://www.misplantillas.com/">plantillas web gratis y profesionales</a>.</div></body>
</html>
