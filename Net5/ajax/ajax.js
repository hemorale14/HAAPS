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

function validarDato(valorEntrada, idCampo, div, aPHP)
{
	divResultado = document.getElementById(div);
	if(idCampo)
	{
		valorEntrada = encodeURIComponent(valorEntrada);
       	idCampo = encodeURIComponent(idCampo);
		contra=document.frmRegistrar.txtContrasenia.value;
		cache.push("valorEntrada=" + valorEntrada + "&idCampo=" + idCampo + "&txtContra=" + contra);
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

function limpiarCampos()
{
	document.frmRegistrar.txtUsuario.value="";
	document.frmRegistrar.txtContrasenia.value="";
	document.frmRegistrar.txtConfirmar.value="";
	document.frmRegistrar.txtEmail.value="";
	document.frmRegistrar.chkAceptar.checked="";
	document.frmRegistrar.txtUsuario.focus();
}

function enviarRegistro()
{
	divResultado = document.getElementById('resultado');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	
	usuario=document.frmRegistrar.txtUsuario.value;
	contrasenia=document.frmRegistrar.txtContrasenia.value;
	email=document.frmRegistrar.txtEmail.value;
	
	ajax=objetoAjax();
	ajax.open("POST", "usuarios.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarCampos();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("txtUsuario=" + usuario + "&txtContrasenia=" + contrasenia + "&txtEmail=" + email)
}

function validarEquipo(valorEntrada, idCampo, div, aPHP)
{
	divResultado = document.getElementById(div);
	if(idCampo)
	{
		valorEntrada = encodeURIComponent(valorEntrada);
       	idCampo = encodeURIComponent(idCampo);
		cache.push("valorEntrada=" + valorEntrada + "&idCampo=" + idCampo);
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

function limpiarRRouter()
{
	document.frmRegistrar.txtCodigo.value="";
	document.frmRegistrar.txtMarca.value="";
	document.frmRegistrar.txtModelo.value="";
	document.frmRegistrar.txtInterfaz.value="";
	document.frmRegistrar.txtFactor.value="";
	document.frmRegistrar.txtSW.value="";
	document.frmRegistrar.txtCapacidad.value="";
	document.frmRegistrar.txtSO.value="";
	document.frmRegistrar.lstCantidad.value="1";
	document.frmRegistrar.txtCodigo.focus();
}

function limpiarARouter()
{
	document.frmActualizar.txtMarca.value="";
	document.frmActualizar.txtModelo.value="";
	document.frmActualizar.txtInterfaz.value="";
	document.frmActualizar.txtFactor.value="";
	document.frmActualizar.txtSW.value="";
	document.frmActualizar.txtCapacidad.value="";
	document.frmActualizar.txtSO.value="";
	document.frmActualizar.lstCantidad.value="1";
	document.frmActualizar.lstCodigo.focus();
}

function enviarRouter()
{
	divResultado = document.getElementById('registrar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmRegistrar.txtCodigo.value;
	marca=document.frmRegistrar.txtMarca.value;
	modelo=document.frmRegistrar.txtModelo.value;
	interfaz=document.frmRegistrar.txtInterfaz.value;
	factor=document.frmRegistrar.txtFactor.value;
	sw=document.frmRegistrar.txtSW.value;
	capacidad=document.frmRegistrar.txtCapacidad.value;
	so=document.frmRegistrar.txtSO.value;
	cantidad=document.frmRegistrar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", "routers.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarRRouter();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("txtCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtFactor=" + factor + "&txtSW=" + sw + "&txtCapacidad=" + capacidad + "&txtSO=" + so + "&lstCantidad=" + cantidad)
}

function actRouter()
{
	codigo=document.frmActualizar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", "generarXMLRouter.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			xmlDoc = ajax.responseXML; 				
			var x=xmlDoc.getElementsByTagName("Router");
			for (i=0;i<x.length;i++)
  			{ 
				marca=document.frmActualizar.txtMarca.value=x[i].getElementsByTagName("Marca")[0].childNodes[0].nodeValue;
				modelo=document.frmActualizar.txtModelo.value=x[i].getElementsByTagName("Modelo")[0].childNodes[0].nodeValue;
				interfaz=document.frmActualizar.txtInterfaz.value=x[i].getElementsByTagName("Interfaz")[0].childNodes[0].nodeValue;
				factor=document.frmActualizar.txtFactor.value=x[i].getElementsByTagName("Factor")[0].childNodes[0].nodeValue;
				sw=document.frmActualizar.txtSW.value=x[i].getElementsByTagName("SW")[0].childNodes[0].nodeValue;
				capacidad=document.frmActualizar.txtCapacidad.value=x[i].getElementsByTagName("Capacidad")[0].childNodes[0].nodeValue;
				so=document.frmActualizar.txtSO.value=x[i].getElementsByTagName("SO")[0].childNodes[0].nodeValue;
				cantidad=document.frmActualizar.lstCantidad.value=x[i].getElementsByTagName("Cantidad")[0].childNodes[0].nodeValue;
  			}
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo="+codigo)
}

function acRouter()
{
	divResultado = document.getElementById('divActualizar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmActualizar.lstCodigo.value;
	marca=document.frmActualizar.txtMarca.value;
	modelo=document.frmActualizar.txtModelo.value;
	interfaz=document.frmActualizar.txtInterfaz.value;
	factor=document.frmActualizar.txtFactor.value;
	sw=document.frmActualizar.txtSW.value;
	capacidad=document.frmActualizar.txtCapacidad.value;
	so=document.frmActualizar.txtSO.value;
	cantidad=document.frmActualizar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", "act_routers.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarARouter();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtFactor=" + factor + "&txtSW=" + sw + "&txtCapacidad=" + capacidad + "&txtSO=" + so + "&lstCantidad=" + cantidad)
}

function eliRouter()
{
	divResultado = document.getElementById('eliminar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmEliminar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", "eli_routers.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			enfoque('lstCodigo');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo)
}

function limpiarRPc()
{
	document.frmRegistrar.txtCodigo.value="";
	document.frmRegistrar.txtMarca.value="";
	document.frmRegistrar.txtModelo.value="";
	document.frmRegistrar.txtInterfaz.value="";
	document.frmRegistrar.txtProcesador.value="";
	document.frmRegistrar.txtSO.value="";
	document.frmRegistrar.txtRam.value="";
	document.frmRegistrar.txtDiscoDuro.value="";
	document.frmRegistrar.lstCantidad.value="1";
	document.frmRegistrar.txtCodigo.focus();
}

function enviarPc(aPHP)
{
	divResultado = document.getElementById('registrar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmRegistrar.txtCodigo.value;
	marca=document.frmRegistrar.txtMarca.value;
	modelo=document.frmRegistrar.txtModelo.value;
	interfaz=document.frmRegistrar.txtInterfaz.value;
	procesador=document.frmRegistrar.txtProcesador.value;
	so=document.frmRegistrar.txtSO.value;
	ram=document.frmRegistrar.txtRam.value;
	discoduro=document.frmRegistrar.txtDiscoDuro.value;
	cantidad=document.frmRegistrar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", aPHP,true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarRPc();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("txtCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtProcesador=" + procesador + "&txtSO=" + so + "&txtRam=" + ram + "&txtDiscoDuro=" + discoduro + "&lstCantidad=" + cantidad)
}

function actPc(aXML)
{
	codigo=document.frmActualizar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", aXML,true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			xmlDoc = ajax.responseXML; 				
			var x=xmlDoc.getElementsByTagName("Pc");
			for (i=0;i<x.length;i++)
  			{ 
				marca=document.frmActualizar.txtMarca.value=x[i].getElementsByTagName("Marca")[0].childNodes[0].nodeValue;
				modelo=document.frmActualizar.txtModelo.value=x[i].getElementsByTagName("Modelo")[0].childNodes[0].nodeValue;
				interfaz=document.frmActualizar.txtInterfaz.value=x[i].getElementsByTagName("Interfaz")[0].childNodes[0].nodeValue;
				procesador=document.frmActualizar.txtProcesador.value=x[i].getElementsByTagName("Procesador")[0].childNodes[0].nodeValue;
				so=document.frmActualizar.txtSO.value=x[i].getElementsByTagName("SO")[0].childNodes[0].nodeValue;
				ram=document.frmActualizar.txtRam.value=x[i].getElementsByTagName("Ram")[0].childNodes[0].nodeValue;
				discoduro=document.frmActualizar.txtDiscoDuro.value=x[i].getElementsByTagName("DiscoDuro")[0].childNodes[0].nodeValue;
				cantidad=document.frmActualizar.lstCantidad.value=x[i].getElementsByTagName("Cantidad")[0].childNodes[0].nodeValue;
  			}
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo="+codigo)
}

function limpiarAPc()
{
	document.frmActualizar.txtMarca.value="";
	document.frmActualizar.txtModelo.value="";
	document.frmActualizar.txtInterfaz.value="";
	document.frmActualizar.txtProcesador.value="";
	document.frmActualizar.txtSO.value="";
	document.frmActualizar.txtRam.value="";
	document.frmActualizar.txtDiscoDuro.value="";
	document.frmActualizar.lstCantidad.value="1";
	document.frmActualizar.lstCodigo.focus();
}

function acPc(aPHP)
{
	divResultado = document.getElementById('divActualizar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmActualizar.lstCodigo.value;
	marca=document.frmActualizar.txtMarca.value;
	modelo=document.frmActualizar.txtModelo.value;
	interfaz=document.frmActualizar.txtInterfaz.value;
	procesador=document.frmActualizar.txtProcesador.value;
	so=document.frmActualizar.txtSO.value;
	ram=document.frmActualizar.txtRam.value;
	discoduro=document.frmActualizar.txtDiscoDuro.value;
	cantidad=document.frmActualizar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", aPHP,true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarAPc();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtProcesador=" + procesador + "&txtSO=" + so + "&txtRam=" + ram + "&txtDiscoDuro=" + discoduro + "&lstCantidad=" + cantidad)
}

function eliPc(aPHP)
{
	divResultado = document.getElementById('eliminar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmEliminar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", aPHP,true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			enfoque('lstCodigo');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo)
}
/*-------------*/
function limpiarRTel()
{
	document.frmRegistrar.txtCodigo.value="";
	document.frmRegistrar.txtMarca.value="";
	document.frmRegistrar.txtModelo.value="";
	document.frmRegistrar.txtInterfaz.value="";
	document.frmRegistrar.txtMemoria.value="";
	document.frmRegistrar.txtPantalla.value="";
	document.frmRegistrar.txtLinea.value="";
	document.frmRegistrar.lstCantidad.value="1";
	document.frmRegistrar.txtCodigo.focus();
}

function enviarTel(aPHP)
{
	divResultado = document.getElementById('registrar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmRegistrar.txtCodigo.value;
	marca=document.frmRegistrar.txtMarca.value;
	modelo=document.frmRegistrar.txtModelo.value;
	interfaz=document.frmRegistrar.txtInterfaz.value;
	memoria=document.frmRegistrar.txtMemoria.value;
	pantalla=document.frmRegistrar.txtPantalla.value;
	linea=document.frmRegistrar.txtLinea.value;
	cantidad=document.frmRegistrar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", aPHP,true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarRTel();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("txtCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtMemoria=" + memoria + "&txtPantalla=" + pantalla + "&txtLinea=" + linea + "&lstCantidad=" + cantidad)
}

function actTel()
{
	codigo=document.frmActualizar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", "generarXMLTel.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			xmlDoc = ajax.responseXML; 				
			var x=xmlDoc.getElementsByTagName("Tel");
			for (i=0;i<x.length;i++)
  			{ 
				marca=document.frmActualizar.txtMarca.value=x[i].getElementsByTagName("Marca")[0].childNodes[0].nodeValue;
				modelo=document.frmActualizar.txtModelo.value=x[i].getElementsByTagName("Modelo")[0].childNodes[0].nodeValue;
				interfaz=document.frmActualizar.txtInterfaz.value=x[i].getElementsByTagName("Interfaz")[0].childNodes[0].nodeValue;
				memoria=document.frmActualizar.txtMemoria.value=x[i].getElementsByTagName("Memoria")[0].childNodes[0].nodeValue;
				pantalla=document.frmActualizar.txtPantalla.value=x[i].getElementsByTagName("Pantalla")[0].childNodes[0].nodeValue;
				linea=document.frmActualizar.txtLinea.value=x[i].getElementsByTagName("Linea")[0].childNodes[0].nodeValue;
				cantidad=document.frmActualizar.lstCantidad.value=x[i].getElementsByTagName("Cantidad")[0].childNodes[0].nodeValue;
  			}
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo="+codigo)
}

function limpiarATel()
{
	document.frmActualizar.txtMarca.value="";
	document.frmActualizar.txtModelo.value="";
	document.frmActualizar.txtInterfaz.value="";
	document.frmActualizar.txtMemoria.value="";
	document.frmActualizar.txtPantalla.value="";
	document.frmActualizar.txtLinea.value="";
	document.frmActualizar.lstCantidad.value="1";
	document.frmActualizar.lstCodigo.focus();
}

function acTel()
{
	divResultado = document.getElementById('divActualizar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmActualizar.lstCodigo.value;
	marca=document.frmActualizar.txtMarca.value;
	modelo=document.frmActualizar.txtModelo.value;
	interfaz=document.frmActualizar.txtInterfaz.value;
	memoria=document.frmActualizar.txtMemoria.value;
	pantalla=document.frmActualizar.txtPantalla.value;
	linea=document.frmActualizar.txtLinea.value;
	cantidad=document.frmActualizar.lstCantidad.value;
	ajax=objetoAjax();
	ajax.open("POST", "act_tels.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarATel();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo + "&txtMarca=" + marca + "&txtModelo=" + modelo + "&txtInterfaz=" + interfaz + "&txtMemoria=" + memoria + "&txtPantalla=" + pantalla + "&txtLinea=" + linea + "&lstCantidad=" + cantidad)
}

function eliTel()
{
	divResultado = document.getElementById('eliminar');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	codigo=document.frmEliminar.lstCodigo.value;
	ajax=objetoAjax();
	ajax.open("POST", "eli_tel.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			enfoque('lstCodigo');
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("lstCodigo=" + codigo)
}

function limpiarComentario()
{
	document.frmRegistrar.txtEmail.value="";
	document.frmRegistrar.txtComentario.value="";
	document.frmRegistrar.txtEmail.focus();
}

function enviarComentario()
{
	divResultado = document.getElementById('resultado');
	divResultado.innerHTML= '<img src="images/cargando.gif" height="32" width="39"/>';
	email=document.frmRegistrar.txtEmail.value;
	comentario=document.frmRegistrar.txtComentario.value;
	ajax=objetoAjax();
	ajax.open("POST", "comentarios.php",true);
  	ajax.onreadystatechange=function() 
	{
  		if (ajax.readyState==4) 
		{	  
			divResultado.innerHTML = ajax.responseText
			limpiarComentario();
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("txtEmail=" + email + "&txtComentario=" + comentario)
}
