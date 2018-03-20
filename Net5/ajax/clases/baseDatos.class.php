<?php
/**
 * bD
 *
 * Conexión a la BD
 *
 * @author  Hector Rocha Morales [TIC-MEX]
 */
require_once('abstracta.class.php');
require_once('interface.class.php');

class bD extends adicion implements ABC{
	
	private static $conn;
	private static $sql;
	private static $rs;
	
	private static $_singleton;
	 
	private function __construct(){
		bD::$conn			= mysql_connect("localhost", "root", "")or die(mysql_error());
							  mysql_select_db("net5", bD::$conn)or die(mysql_error());
		bD::$sql		= null;
		bD::$rs			= null;
		}	
		
	public static function getInstance(){
		if (is_null (self::$_singleton)) {
			self::$_singleton = new bD();
		}
		return self::$_singleton;
	}
	
	public function procedimiento($nombre, $parametros){
		bD::$sql = "CALL " .$nombre ."(".$parametros .")";	
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return false; }
		else { return true; settype(bD::$rs, null); }
		}
	
	public function insertar($tabla, $campos, $valores){
		bD::$sql = "INSERT INTO " .$tabla ." (".$campos .") " ."VALUES (".$valores .")";	
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return false; }
		else { return true; settype(bD::$rs, null); }
		} 
		
	public function eliminar($tabla, $condicion){
		bD::$sql = "DELETE FROM ".$tabla .$condicion;
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return false; }
		else { return true; settype(bD::$rs, null); }
		}
	
	public function consultar($tabla, $campos, $condicion){
		bD::$sql = "SELECT " .$campos ." FROM " .$tabla ." " .$condicion;
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return null; }
		$array = array();
		while ($row = @mysql_fetch_object(bD::$rs)){
			$array[] = $row;
			}
		return $array;
		}

	public function nRegistros($tabla, $condicion){
		bD::$sql = "SELECT COUNT(*) FROM " .$tabla ." " .$condicion;
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return null; }
		else{ $reg = mysql_fetch_array(bD::$rs); return $reg[0]; }
		}
		
	public function actualizar($tabla, $cambios, $condicion){
		bD::$sql = "UPDATE " .$tabla ." SET " .$cambios ." WHERE " .$condicion;
		if(!(bD::$rs = mysql_query(bD::$sql, bD::$conn))){ return false; }
		else { return true; settype(bD::$rs, null); }
		}
		
	public function __destruct(){
		@mysql_free_result(bD::$rs);
		mysql_close(bD::$conn);
		}
	}
?>