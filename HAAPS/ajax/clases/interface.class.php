<?php
/**
 * ABC
 *
 * Obliga el uso de funciones basicas q' se requieren
 * en una BD.
 *
 * @package  BaseDatos.class.php
 * @author  Hector Rocha Morales [TIC-MEX]
 */
interface ABC {
	/**
	* Inserta los datos a una BD.
	*
	* @return boolean true si la inserción es correcta
	* @param string $tabla nombre de la entidad en la q' se ejecuta la inserción
	* @param string $campos atributos de la entidad q' se decean insertar
	* @param string $valores datos q' serán insertados
	*/
	public function insertar($tabla, $campos, $valores);
	/**
	* Elimina los datos a una BD.
	*
	* @return boolean true si la eliminacion es correcta
	* @param string $tabla nombre de la entidad en la q' se ejecuta la eliminación
	* @param string $condición restricción que determina q' datos se borraran
	*/
	public function eliminar($tabla, $condicion);
	/**
	* Consulta los datos a una BD.
	*
	* @return boolean true si la direccion es correcta
	* @param string $email direccion de correo
	*/
	/*public function consultar();
	/**
	* Actualiza los datos a una BD.
	*
	* @return boolean true si la actualización es correcta
	* @param string $tabla nombre de la entidad en la q' se ejecuta la actualización
	* @param string $cambios atributos y datos para actualizar
	* @param string $condición restricción que determina q' datos se actualizarán
	*/
	public function actualizar($tabla, $cambios, $condicion);
	
	}
?>