<?php
require_once("baseDatos.class.php");

class validarRouter{
	private $bd;
	function __construct(){
		$this->bd = bD::getInstance();
		}
		
	function __destruct(){
		$this->bd = null;
		}
		
	public function validarRouterAJAX($valorEntrada, $idCampo){
	switch($idCampo){
		case 'txtCodigo':
			return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtMarca':
			return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtModelo':
			return $this->validarRouterTodo($valorEntrada);
		break;
		case 'txtFactor':
        	return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtSW':
        	return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtCapacidad':
        	return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtSO':
        	return $this->validarRouterTodo($valorEntrada);
        break;
		case 'txtCantidad':
        	return $this->validarRouterTodo($valorEntrada);
        break;
    	}
  	}
	
	private function validarRouterCodigo($value){
		$value = trim($value);
		if($value != ""){
			if($this->bd->nRegistros("Equipo", "WHERE codigo='".$value."'")!=0){
				return 'Equipo(s) ya registrado(s)';
				}
			else{}
			}
		else{ return 'El campo se encuentra vació'; }
		}
		
	private function validarRouterTodo($value){
    	if (trim($value)==""){ echo "El campo se encuentra vació"; }
  		}
	}
?>
