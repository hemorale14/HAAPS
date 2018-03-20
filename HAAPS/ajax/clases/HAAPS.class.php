<?php
/**
 * HAAPS
 *
 * Implementar funciones a la aplicacion web
 *
 * @author  Hector Rocha Morales [TIC-MEX]
 */
class HAAPS{
	
	public function __construct(){
		}
	public function ramdom($length, $mayusculas, $numeros, $caracteres){
		$cadena = 'abcdefghijklmnopqrstuvwxyz';
		if($mayusculas==1) $cadena .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    if($numeros==1) $cadena .= '1234567890';
	    if($caracteres==1) $cadena .= '|@#~$%()=^*+[]{}-_';
	    if($length>0){
	        $result = "";
	        $cadena = str_split($cadena, 1);
	        for($i=1; $i<=$length; $i++){
            mt_srand((double)microtime() * 1000000);
	            $num = mt_rand(1, count($cadena));
            $result .= $cadena[$num-1];
	        }
	    }
	    return $result;
		}
			
	public function imagen($texto){
		header('Content-type: image/jpeg');
		$cadena=$texto;
		$numeroDeFondo=rand (1,3);
		$coloresDeTexto=array(1=>array("r"=>0, "g"=>0, "b"=>128), array("r"=>255, "g"=>204, "b"=>255), array("r"=>0, "g"=>0, "b"=>0));
		$longitudCadena=strlen($cadena)-5;
		$imagenFondo="fondos/fondo_".$numeroDeFondo.".jpg";
		$imagenJPG=imagecreatefromjpeg ($imagenFondo);
		$colorDeCadena=imagecolorallocate ($imagenJPG, $coloresDeTexto[$numeroDeFondo]["r"], $coloresDeTexto[$numeroDeFondo]["g"], 		$coloresDeTexto[$numeroDeFondo]["b"]);
		$talla=30;
	  	$angulo=rand(-18,18);
  		$x=65-($longitudCadena*12);
  		$y=60+($angulo*2);
  		$fuente="fuentes/arial.ttf";
  		imagettftext($imagenJPG, $talla, $angulo, $x, $y, $colorDeCadena, $fuente, $cadena);
  		for ($contador=1; $contador<=10; $contador++){
			$xOrigen=rand(0,249);
    		$yOrigen=rand(0,99);
    		$xFinal=rand(0,249);
    		$yFinal=rand(0,99);
    		imageline ($imagenJPG, $xOrigen, $yOrigen, $xFinal, $yFinal, $colorDeCadena);
  			}
  		imagejpeg($imagenJPG);
		imagedestroy($imagenJPG);
		return $imagenJPG;
		}
		
	public function __destruct(){
		
		}	
		
	}
?>