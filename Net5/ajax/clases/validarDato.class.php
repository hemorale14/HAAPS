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
		
	public function validarDatoAJAX($valorEntrada, $idCampo, $contra){
	switch($idCampo){
		case 'txtUsuario':
			return $this->validarDatoUsuario($valorEntrada);
        break;
		case 'txtContrasenia':
			return $this->validarDatoContrasenia($valorEntrada);
		break;
		case 'txtConfirmar':
			return $this->validarDatoConfirmar($valorEntrada, $contra);
		break;
		case 'txtEmail':
        	return $this->validarDatoEmail($valorEntrada);
        break;
		case 'chkAceptar':
        	return $this->validarDatoCondiciones($valorEntrada);
        break;
    	}
  	}
	
	private function validarDatoUsuario($value){
		$value = trim($value);
		if($value != ""){
			if($this->bd->nRegistros("usuario", "WHERE usuario='".$value."'")!=0){
				return 'Usuario no disponible';
				}
			else{}
			}
		else{ return 'El campo se encuentra vació'; }			
  		}
	
	private function validarDatoContrasenia($value){
		$value = trim($value);
    	if ($value == "") { return 'El campo se encuentra vació'; }
		elseif($value == 0000){ return 'No es una contraseña valida para el sistema';}
    	else{}
  		}
	
	private function validarDatoConfirmar($value, $contra){
		$value = trim($value);
    	if ( $value != $contra){
			echo "La contaseña no coincide"; 
			}
		if ( trim($contra) == ""){
			echo "El campo se encuentra vació"; 
			}
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
	
  	private function validarDatoCondiciones($value){
		if($value == 'true' || $value == 'on'){}
		else{ return 'Las condiciones deben ser aceptadas';}
		//return ($value == 'true' || $value == 'on') ? 1 : 0;
  		}
	}
?>
