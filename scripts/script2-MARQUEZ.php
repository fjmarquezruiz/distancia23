<?php
/**
 * @author FRANCISCO JAVIER MARQUEZ RUIZ
 * @version 1.0.0
 */

/**
 * Clase que implementa los cálculos básicos de una calculadora
 */
class Calculadora {
	/**
	 * Método de la clase Calculadora que realiza la operación de multiplicación
	 *
	 * @access	public
	 * @param	integer|float	$num1	Primer número para realizar la multiplicación
	 * @param	integer|float	$num2	Segundo número para realizar la multiplicación, opcional, si no viene toma el valor 1
	 * @return	integer|float|string	Devuelve el resultado de la operación o un mensaje de error si no son números
	 * @version	1.0.0
	 */
	public function multiplicar($num1, $num2 = 1) {
		if (is_numeric($num1) && is_numeric($num2))
			return $num1 * $num2;
		else
			return "Uno de los números no es un valor numérico";
	}

	/**
	 * Método de la clase Calculadora que realiza la operación de división
	 *
	 * @access	public
	 * @param	integer|float	$num1	Primer número para realizar la división
	 * @param	integer|float	$num2	Segundo número para realizar la división, opcional, si no viene toma el valor 1
	 * @return	integer|float|string	Devuelve el resultado de la operación o un mensaje de error si no son números
	 * @version	1.0.0
	 */
	public function dividir($num1, $num2 = 1) {
		if (is_numeric($num1) && is_numeric($num2))
			return $num1 / $num2;
		else
			return "Uno de los números no es un valor numérico";
	}
}
