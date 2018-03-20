//Contiene una instancia de XMLHttpRequest
var xmlHttp = objetoAjax();
var cache = new Array();

//Crea una instancia XMLHttpRequest
function objetoAjax() 
{
	//Almacenar la referencia al objeto XMLHttpRequest
	var xmlHttp;
	//Esto debe funcionar para todos los navegadores excepto IE6 y más antiguos
	try
	{
		//Intentar crear el objeto XMLHttpRequest
		xmlHttp = new XMLHttpRequest();
	}
	catch(e)
	{
		//Asume IE6 o más antiguo
		var XmlHttpVersions = new Array("MSXML2.XMLHTTP.6.0",
                                   		"MSXML2.XMLHTTP.5.0",
                                   		"MSXML2.XMLHTTP.4.0",
                                   		"MSXML2.XMLHTTP.3.0",
                                   		"MSXML2.XMLHTTP",
                                   		"Microsoft.XMLHTTP");
    	//Prueba cada id hasta que uno funciona
		for (var i=0; i<XmlHttpVersions.length && !xmlHttp; i++) 
		{
			try 
			{ 
				//Prueba a crear el objeto XMLHttpRequest
				xmlHttp = new ActiveXObject(XmlHttpVersions[i]);
			} 
			catch (e) {} //Ignora error potencial
		}
	}
	//Devuelve el objeto creado o muestra un mensaje de error
	if (!xmlHttp)
		exhibirError("Error al crear el objeto XMLHttpRequest.");
	else 
		return xmlHttp;
}

//Configura el focus en el primer campo del formulario
function enfoque(campo)    
{
	document.getElementById(campo).focus();
}

function validarDato(valorEntrada, idCampo, div, aPHP, inst)
{
	divResultado = document.getElementById(div);
	if(idCampo)
	{
		valorEntrada = encodeURIComponent(valorEntrada);
       	idCampo = encodeURIComponent(idCampo);
		action = inst;
		cache.push("valorEntrada=" + valorEntrada + "&idCampo=" + idCampo + "&action=" + action);
		ajax=objetoAjax();
		ajax.open("POST", aPHP, true);
		ajax.onreadystatechange=function() 
		{
  			if (ajax.readyState==4) 
			{	  
				divResultado.innerHTML = ajax.responseText
  			}
  		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  		ajax.send(cache.shift());
	}
}

function imagen(div, aPHP, inst)
{
	divResultado = document.getElementById(div);
		action = inst;
		cache.push("action=" + action);
		ajax=objetoAjax();
		ajax.open("POST", aPHP, true);
		ajax.onreadystatechange=function() 
		{
  			if (ajax.readyState==4) 
			{	  
				divResultado.innerHTML = ajax.responseText
  			}
  		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  		ajax.send(cache.shift());
}

function limpiarProyectos()
{
	document.frmRegistrar.txtNombre.value="";
	document.frmRegistrar.txtDescripcion.value="";
	document.frmRegistrar.txtResponsable.value="";
	document.frmRegistrar.txtNombre.focus();
}

function tablaProyectos(div, aPHP, inst)
{
	divResultado = document.getElementById(div);
		action = inst;
		cache.push("action=" + action);
		ajax=objetoAjax();
		ajax.open("POST", aPHP, true);
		ajax.onreadystatechange=function() 
		{
  			if (ajax.readyState==4) 
			{	  
				divResultado.innerHTML = ajax.responseText
  			}
  		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  		ajax.send(cache.shift());
}

function enviarProyectos(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst
	nombre=document.frmRegistrar.txtNombre.value;
	descripcion=document.frmRegistrar.txtDescripcion.value;
	responsable=document.frmRegistrar.txtResponsable.value;
	ajax=objetoAjax();
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarProyectos();
			tablaProyectos('divTabla','actions.php','tablaProyectos');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action=" +action +"&txtNombre=" + nombre + "&txtDescripcion=" + descripcion + "&txtResponsable=" + responsable)
}

function xmlProyecto(inst)
{
	action=inst;
	nombre=document.frmActualizar.lstNombre.value;
	ajax=objetoAjax();
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			xmlDoc = ajax.responseXML; 				
			var x=xmlDoc.getElementsByTagName("Proyecto");
			for (i=0;i<x.length;i++)
  			{ 
				descripcion=document.frmActualizar.txtDescripcion.value=x[i].getElementsByTagName("Descripcion")[0].childNodes[0].nodeValue;
				responsable=document.frmActualizar.txtResponsable.value=x[i].getElementsByTagName("Responsable")[0].childNodes[0].nodeValue;
  			}
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action=" + action + "&lstNombre="+nombre)
}

function limProyectos()
{
	document.frmActualizar.txtDescripcion.value="";
	document.frmActualizar.txtResponsable.value="";
	document.frmActualizar.lstNombre.focus();
}

function actProyecto(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst;
	nombre=document.frmActualizar.lstNombre.value;
	descripcion=document.frmActualizar.txtDescripcion.value;
	responsable=document.frmActualizar.txtResponsable.value;
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limProyectos();
			tablaProyectos('divTabla','actions.php','tablaProyectos');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action="+ action +"&lstNombre=" + nombre + "&txtDescripcion=" + descripcion + "&txtResponsable=" + responsable)
}

function eliProyecto(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst;
	nombre=document.frmEliminar.lstNombre.value;
	ajax=objetoAjax();
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			enfoque('lstNombre');
			tablaProyectos('divTabla','actions.php','tablaProyectos');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action=" +action +"&lstNombre=" + nombre)
}

function eliDocumento(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst;
	id=document.frmEliminar.lstId.value;
	ajax=objetoAjax();
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			enfoque('lstId');
			tablaProyectos('divTabla','actions.php','tablaDocumentos2');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action=" +action +"&lstId=" + id)
}

function enviarClientes(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst
	email=document.frmRegistrar.txtEmail.value;
	proyecto=document.frmRegistrar.lstProyecto.value;
	ajax=objetoAjax();
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			document.frmRegistrar.txtEmail.value="";
			document.frmRegistrar.txtEmail.focus();
			tablaProyectos('divTabla','actions.php','tablaUsuarios');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action=" +action +"&txtEmail=" + email +"&lstProyecto=" + proyecto)
}

function actCliente(inst)
{
	divResultado = document.getElementById('divRespuesta');
	divResultado.innerHTML= '<img src="imagenes/cargando.gif" height="32" width="39"/>';
	action=inst;
	email=document.frmActualizar.lstEmail.value;
	ajax.open("POST", "actions.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			document.frmActualizar.lstEmail.focus();
			tablaProyectos('divTabla','actions.php','tablaUsuarios');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("action="+ action +"&lstEmail=" + email)
}
