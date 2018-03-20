<?php
require_once("baseDatos.class.php");

class validarDato{
	private $bd;
	function __construct(){
		$this->bd = bD::getInstance();
		}
		
	function __destruct(){
		$this->bd = null;
		}
		
	public function validarDatoAJAX($valorEntrada, $idCampo){
	switch($idCampo){
		case 'txtNombre':
			return $this->validarDatoVacio($valorEntrada);
        break;
		case 'txtEmail':
			return $this->validarDatoEmail($valorEntrada);
		break;
		case 'txtAsunto':
			return $this->validarDatoVacio($valorEntrada);
		break;
		case 'txtMensaje':
        	return $this->validarDatoVacio($valorEntrada);
        break;
		case 'txtCargarIMG':
        	return $this->cargarIMG();
        break;
		case 'txtDescripcion':
        	return $this->validarDatoVacio($valorEntrada);
        break;
		case 'txtResponsable':
        	return $this->validarDatoVacio($valorEntrada);
        break;
    	}
  	}
	
	private function validarDatoVacio($value){
		if (trim($value)==""){ echo "El campo se encuentra vació"; }
		}
	
	private function cargarIMG(){
		echo '<img src="ajax/imagen.php" width="182" height="63" />';
		}

	private function validarDatoEmail($value){
		$mail_correcto = 0; $value = trim($value);
		if ((strlen($value) >= 6) && (substr_count($value,"@") == 1) && (substr($value,0,1) != "@") && (substr($value,strlen($value)-1,1) != "@")){
			if ((!strstr($value,"'")) && (!strstr($value,"\"")) && (!strstr($value,"\\")) && (!strstr($value,"\$")) && (!strstr($value," "))){
				if (substr_count($value,".") >= 1){
					$term_dom = substr(strrchr ($value, '.'),1); 
					if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@"))){
						$antes_dom = substr($value,0,strlen($value) - strlen($term_dom) - 1); 
						$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
						if ($caracter_ult != "@" && $caracter_ult != "."){ 
						$mail_correcto = 1; 
						} 
					} 
				}
			} 
		} 
		if ($mail_correcto){} 
		else { return 'No es un mail valido'; } 
		}
	}
?>
