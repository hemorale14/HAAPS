<?php
require_once("baseDatos.class.php");

class validarPc{
	private $bd;
	function __construct(){
		$this->bd = bD::getInstance();
		}
		
	function __destruct(){
		$this->bd = null;
		}
		
	public function validarPcAJAX($valorEntrada, $idCampo){
	switch($idCampo){
		case 'txtCodigo':
			return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtMarca':
			return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtModelo':
			return $this->validarPcTodo($valorEntrada);
		break;
		case 'txtProcesador':
        	return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtSO':
        	return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtRam':
        	return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtDiscoDuro':
        	return $this->validarPcTodo($valorEntrada);
        break;
		case 'txtCantidad':
        	return $this->validarPcTodo($valorEntrada);
        break;
    	}
  	}
	
	private function validarPcCodigo($value){
		$value = trim($value);
		if($value != ""){
			if($this->bd->nRegistros("Equipo", "WHERE codigo='".$value."'")!=0){
				return 'Equipo(s) ya registrado(s)';
				}
			else{}
			}
		else{ return 'El campo se encuentra vació'; }
		}
		
	private function validarPcTodo($value){
    	if (trim($value)==""){ echo "El campo se encuentra vació"; }
  		}
	}
?>
