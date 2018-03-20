<?php
require_once("ajax/sesion/seguridad.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Administrador</title>
<script language="javascript" type="text/javascript" src="ajax/ajax.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ajax/validarDato.css" rel="stylesheet" type="text/css" />
</head>
<body onload="enfoque('txtCodigo')">

<div id="main">
<!-- header begins -->
    <div id="buttons">
      <div class="but1"><a class="razd_but"  title="">Administrador</a></div>
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
                  <h2>Teléfono</h2>
                    <div class="text"><span class="color">Registrar</span> <br /> Los campos con * son obligatorios</div>
<div align="center">
<table bgcolor="#CCCCCC">
<form name="frmRegistrar" onsubmit="">
    <tr>
			<td colspan="2">&nbsp;</td>
			</tr>
    <tr>
			<td><span class="color">*</span>Código de barras:</td>
			<td><input name="txtCodigo" type="text" id="txtCodigo" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="15" onblur="validarEquipo(this.value, this.id, 'divCodigo', 'validarTel.php')"/>
      <div id="divCodigo" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td><span class="color">*</span>Marca:</td>
			<td><input name="txtMarca" type="text" id="txtMarca" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="15" onblur="validarEquipo(this.value, this.id, 'divMarca', 'validarTel.php')"/>
      <div id="divMarca" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td><span class="color">*</span>Modelo:</td>
			<td><input name="txtModelo" type="text" id="txtModelo" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="20" onblur="validarEquipo(this.value, this.id, 'divModelo', 'validarTel.php')"/>
     <div id="divModelo" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td>Interfaz:</td>
			<td><input name="txtInterfaz" type="text" id="txtInterfaz" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" value="" />
     <div id="divInterfaz" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
	<td><span class="color">*</span>Memoria:</td>
			<td><input name="txtMemoria" type="text" id="txtMemoria" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="8" onblur="validarEquipo(this.value, this.id, 'divMemoria', 'validarTel.php')"/>
            <div id="divMemoria" class="error" style="margin-left:auto"></div></td>
	</tr>
     <tr>
	<td><span class="color">*</span>Pantalla:</td>
			<td><input name="txtPantalla" type="text" id="txtPantalla" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="45" onblur="validarEquipo(this.value, this.id, 'divPantalla', 'validarTel.php')"/>
            <div id="divPantalla" class="error" style="margin-left:auto"></div></td>
	</tr>
     <tr>
	<td><span class="color">*</span>Num Linea:</td>
			<td><input name="txtLinea" type="text" id="txtLinea" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="45" onblur="validarEquipo(this.value, this.id, 'divLinea', 'validarTel.php')"/>
            <div id="divLinea" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
    <td><span class="color">*</span>Cantidad:</td>
			<td><select name="lstCantidad" type="text" id="txtCantidad" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px">
            <?php
        	for ($i=1; $i<101; $i++)
				{
					echo "<option value='$i'>$i</option>";
				}
        	?>
            </select>
            <div id="divCantidad" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center">&nbsp;
            
            </td>
	</tr>
    <tr>
			<td colspan="2" align="center"><div id="registrar" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2"><input name="btnRegistrar" type="submit" value="Registrar" style="width: 80px;" onclick="enviarTel('telefonos.php'); return false"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input name="txtCancelar" type="reset" value="Cancelar" style="width: 80px;"/></td>
			</tr>
    <tr>
			<td colspan="2" align="center"><div></div></td>
	</tr>
</form>
    </table>
</div>
<div class="text"><span class="color">Actualizar</span> <br /> 
</div>
<div align="center">
<table bgcolor="#CCCCCC">
<form name="frmActualizar" onsubmit="">
    <tr>
			<td colspan="2">&nbsp;</td>
			</tr>
    <tr>
			<td>Código de barras:</td>
			<td><select name="lstCodigo" id="lstCodigo" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" onblur="actTel();">
<?php
require_once('ajax/clases/baseDatos.class.php');
$bd = bD::getInstance();
$equipos = $bd->consultar("equipo", "codigo", "WHERE Tipo='T'");
foreach($equipos as $equipo){
	echo "<option value='".$equipo->codigo ."'>".$equipo->codigo ."</option>";
	} 
?>
            </select></td>
	</tr>
    <tr>
			<td>Marca:</td>
			<td><input name="txtMarca" type="text" id="txtMarca" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px"/>
      <div id="divMarca" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td>Modelo:</td>
			<td><input name="txtModelo" type="text" id="txtModelo" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="20" onblur="validarEquipo(this.value, this.id, 'divModelo', 'validarRouter.php')"/></td>
	</tr>
    <tr>
			<td>Interfaz:</td>
			<td><input name="txtInterfaz" type="text" id="txtInterfaz" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="45"/>
     <div id="divInterfaz" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
	<td>Memoria:</td>
			<td><input name="txtMemoria" type="text" id="txtMemoria" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="8" onblur="validarEquipo(this.value, this.id, 'divFactor', 'validarPc.php')"/></td>
	</tr>
     <tr>
	<td>Pantalla:</td>
			<td><input name="txtPantalla" type="text" id="txtPantalla" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="45" onblur="validarEquipo(this.value, this.id, 'divSW', 'validarRouter.php')"/></td>
	</tr>
     <tr>
	<td>Nun Linea:</td>
			<td><input name="txtLinea" type="text" id="txtLinea" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="45" onblur="validarEquipo(this.value, this.id, 'divCapacidad', 'validarRouter.php')"/></td>
	</tr>
     <tr>
    <td>Cantidad:</td>
			<td><select name="lstCantidad" type="text" id="txtCantidad" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px">
            <?php
        	for ($i=1; $i<101; $i++)
				{
					echo "<option value='$i'>$i</option>";
				}
        	?>
            </select>
            <div id="divCantidad" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center">&nbsp;
            
            </td>
	</tr>
    <tr>
			<td colspan="2" align="center"><div id="divActualizar" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2"><input name="btnActualizar" type="submit" value="Actualizar" style="width: 80px;" onclick="acTel(); return false"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input name="btnCancelar" type="reset" value="Cancelar" style="width: 80px;"/></td>
			</tr>
    <tr>
			<td colspan="2" align="center"><div></div></td>
	</tr>
</form>
    </table>
</div>
<div class="text"><span class="color">Eliminar</span> <br /> 
</div>
<div align="center">
<table bgcolor="#CCCCCC">
<form name="frmEliminar" onsubmit="">
    <tr>
			<td colspan="2">&nbsp;</td>
			</tr>
    <tr>
			<td>Código de barras:</td>
			<td><select name="lstCodigo" id="lstCodigo" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" onblur="actRouter();">
<?php
require_once('ajax/clases/baseDatos.class.php');
$bd = bD::getInstance();
$equipos = $bd->consultar("equipo", "codigo", "WHERE Tipo='T'");
foreach($equipos as $equipo){
	echo "<option value='".$equipo->codigo ."'>".$equipo->codigo ."</option>";
	} 
?>
            </select></td>
	</tr>
    <tr>
			<td colspan="2" align="center">&nbsp;
            
            </td>
	</tr>
    <tr>
			<td colspan="2" align="center"><div id="eliminar" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2"><input name="btnRegistrar" type="submit" value="Eliminar" style="width: 80px;" onclick="eliTel(); return false"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input name="txtCancelar" type="reset" value="Cancelar" style="width: 80px;"/></td>
			</tr>
    <tr>
			<td colspan="2" align="center"><div></div></td>
	</tr>
</form>
    </table>
</div>

<div class="text"></div>
        <div class="read"><br /></div>
                    <br />
            </div>
            <div class="right">
                <h1>Opciones</h1>
                <div class="tit_bot">
                  <ul>
                    <li><a href="salir.php">cerrar sesión</a></li>
                    <li><a href="equipos.php">reporte</a></li>
                   </ul>
                  <br />
              </div>
          </div>
            <div class="right">
                  <h1>Equipos</h1>
                  <div class="tit_bot">
                      <ul>
                        <li><a href="router.php">Router</a></li>
                        <li><a href="pc.php">PC</a></li>
                        <li><a href="servidor.php">Servidor</a></li>
                        <li><a >TelVoIP</a></li>
                        <!--<li><a href="switch.php">Switch</a></li>-->
                      </ul>
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
