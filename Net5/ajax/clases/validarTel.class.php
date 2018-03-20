<?php
require_once("baseDatos.class.php");

class validarTel{
	private $bd;
	function __construct(){
		$this->bd = bD::getInstance();
		}
		
	function __destruct(){
		$this->bd = null;
		}
		
	public function validarTelAJAX($valorEntrada, $idCampo){
	switch($idCampo){
		case 'txtCodigo':
			return $this->validarTelTodo($valorEntrada);
        break;
		case 'txtMarca':
			return $this->validarTelTodo($valorEntrada);
        break;
		case 'txtModelo':
			return $this->validarTelTodo($valorEntrada);
		break;
		case 'txtPantalla':
        	return $this->validarTelTodo($valorEntrada);
        break;
		case 'txtLinea':
        	return $this->validarTelTodo($valorEntrada);
        break;
		case 'txtMemoria':
        	return $this->validarTelTodo($valorEntrada);
        break;
		case 'txtCantidad':
        	return $this->validarTelTodo($valorEntrada);
        break;
    	}
  	}
	
	private function validarTelCodigo($value){
		$value = trim($value);
		if($value != ""){
			if($this->bd->nRegistros("Equipo", "WHERE codigo='".$value."'")!=0){
				return 'Equipo(s) ya registrado(s)';
				}
			else{}
			}
		else{ return 'El campo se encuentra vació'; }
		}
		
	private function validarTelTodo($value){
    	if (trim($value)==""){ echo "El campo se encuentra vació"; }
  		}
	}
?>
