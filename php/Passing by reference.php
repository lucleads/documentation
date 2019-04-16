<?php

/**
 * Si queremos cambiar el valor de una variable, podemos pasar su referencia
 * para que de esta forma, cualquier operación que hagamos sobre ella se
 * aplique a la variable original en lugar de a su valor.
 * @see https://www.php.net/manual/en/language.references.whatdo.php
 */

 /**
  * Creamos una variable y le asignamos un valor
  */
 $varA = 5;
 echo $varA; // Returns: 5


 /**
  * Creamos otra variable que APUNTE a la dirección de la primera.
  * De esta forma, cuando cambie el valor de la primera, también cambia
  * el valor de la segunda.
  */
 $varB = & $varA;
 echo $varB; // Returns: 5
 /* $varB NO es una copia de $varA, las dos variables apuntan a la misma dirección, y por tanto tienen siempre el mismo valor */


 /**
  * Modificamos el valor de la primera variable, y esto modifica también el valor de la segunda.
  */
 $varA = 12;
 echo $varA; // Returns: 12;
 echo $varB; // Returns: 12;
