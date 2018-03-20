<?php
/**
 * general
 *
 * En globa funciones necesarias de conexion a
 * una BD pero debemos adecuarlas a nuestro uso.
 *
 * @package  BaseDatos.class.php
 * @author  Hector Rocha Morales [TIC-MEX]
 */
abstract class adicion{
	/**
	* Abre la base de datos.
	*/
	abstract function nRegistros($tabla, $condicion);
	}
?>