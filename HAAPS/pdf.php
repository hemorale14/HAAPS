<?php
include_once('ajax/clases/dbconnect.inc.php');

header("Content-type: application/pdf");
$qry = "SELECT contenido FROM documentos WHERE id=".$_GET['id'];
$res = mysql_query($qry);
$contenido = mysql_result($res, 0, "contenido");
print '<img src="' .$contenido .'" />'
?>