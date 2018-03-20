<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Registrar</title>
<script language="javascript" type="text/javascript" src="ajax/ajax.js"></script>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="ajax/validarDato.css" rel="stylesheet" type="text/css" />
</head>

<body onload="enfoque('txtUsuario')">
<p>Ingresar los datos.</p>
	<table bgcolor="#CCCCCC">
<form name="frmRegistrar" onsubmit="">
    <tr>
			<td colspan="2">&nbsp;</td>
			</tr>
    <tr>
			<td>Usuario:</td>
			<td><input name="txtUsuario" type="text" id="txtUsuario" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="15" onblur="validarDato(this.value, this.id, 'divUsuario', 'validarDato.php')"/>
      <div id="divUsuario" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td>Contraseña:</td>
			<td><input name="txtContrasenia" type="password" id="txtContrasenia" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="15" onblur="validarDato(this.value, this.id, 'divContrasenia', 'validarDato.php')"/>
     <div id="divContrasenia" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td>Verificar Contraseña:</td>
			<td><input name="txtConfirmar" type="password" id="txtConfirmar" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="15" onblur="validarDato(this.value, this.id, 'divConfirmar', 'validarDato.php')"/>
     <div id="divConfirmar" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
	<td>E-mail:</td>
			<td><input name="txtEmail" type="text" id="txtEmail" style="font-family:Verdana, Geneva, sans-serif; height:16px; font-size:10px" maxlength="30" onkeypress="validarDato(this.value, this.id, 'divEmail', 'validarDato.php')" onblur="validarDato(this.value, this.id, 'divEmail', 'validarDato.php')"/><div id="divEmail" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center"><input type="checkbox" id="chkAceptar" name="chkAceptar" onclick="validarDato(this.checked, this.id, 'divAceptar', 'validarDato.php')" onblur="validarDato(this.checked, this.id, 'divAceptar', 'validarDato.php')"/><a href="ajax/condiciones.txt" style="font-size:9px">He leído las condiciones de uso.</a><div id="divAceptar" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2" align="center"><div id="resultado" class="error" style="margin-left:auto"></div></td>
	</tr>
    <tr>
			<td colspan="2"><input name="txtRegistrar" type="submit" value="Registrar" style="width: 80px;" onclick="enviarRegistro(); return false"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input name="txtCancelar" type="reset" value="Cancelar" style="width: 80px;"/></td>
			</tr>
    <tr>
			<td colspan="2" align="center"><div></div></td>
	</tr>
</form>
    </table>

</body>
</html>
