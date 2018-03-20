<?php
require_once("baseDatos.class.php");

class validarComentario{
	private $bd;
	function __construct(){
		$this->bd = bD::getInstance();
		}
		
	function __destruct(){
		$this->bd = null;
		}
		
	public function validarComentarioAJAX($valorEntrada, $idCampo){
	switch($idCampo){
		case 'txtEmail':
			return $this->validarComentarioTodo($valorEntrada);
        break;
		case 'txtComentario':
			return $this->validarComentarioTodo($valorEntrada);
        break;
		}
  	}
	
	private function validarComentarioCodigo($value){
		$value = trim($value);
		if($value != ""){
			if($this->bd->nRegistros("Equipo", "WHERE codigo='".$value."'")!=0){
				return 'Equipo(s) ya registrado(s)';
				}
			else{}
			}
		else{ return 'El campo se encuentra vació'; }
		}
		
	private function validarComentarioTodo($value){
    	if (trim($value)==""){ echo "El campo se encuentra vació"; }
  		}
	}
?>
