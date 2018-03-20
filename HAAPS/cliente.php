<?php
include_once('ajax/seguridad/seguridad.php');
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

<body onload="tablaProyectos('divTabla', 'actions.php', 'tablaDocumentos');">

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
       <p><span class="color">Documentación.</span> </p>
       <p>       
       <p>
       <div id="divTabla">
       </div>
      </div>
     </div>
     <div class="right">
      <h1>Opciones</h1>
      <div class="tit_bot">
       <ul>
        <li><a href="cliente_pregunta.php">Hacer preguntas</a></li>
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
