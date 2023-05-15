<?php
/**
 * @author FRANCISCO JAVIER MARQUEZ RUIZ
 * @version 1.0.0
 */

/**
 * Función que realiza la suma de dos números.
 *
 * @param	integer|float	$num1 	Primer número para la suma
 * @param	integer|float	$num2 	Segundo número para la suma, opcional, si no aparece toma valor 0
 * @return	integer|float|string	Devuelve el resultado de la suma o un mensaje de error
 * @version 	1.0.0
 * @since	15/15/2023
 */
function sumar($num1, $num2=0){
	if (is_numeric($num1) && is_numeric($num2))
		return $num1 + $num2;
	else
		return "Uno de los números no es un valor numérico";
}

/**
 * Función que realiza la resta de dos números.
 *
 * @param	integer|float	$num1 	Primer número para la resta
 * @param	integer|float	$num2 	Segundo número para la resta, opcional, si no aparece toma valor 0
 * @return	integer|float|string	Devuelve el resultado de la resta o un mensaje de error
 * @version 	1.0.0
 * @since	15/15/2023
 */
function restar($num1, $num2=0){
	if (is_numeric($num1) && is_numeric($num2))
		return $num1 - $num2;
	else
		return "Uno de los números no es un valor numérico";
}


