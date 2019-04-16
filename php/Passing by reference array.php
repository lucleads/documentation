<?php

/**
 * Si queremos cambiar el valor de una variable, podemos pasar su referencia
 * para que de esta forma, cualquier operación que hagamos sobre ella se
 * aplique a la variable original en lugar de a su valor.
 * @see https://www.php.net/manual/en/language.references.whatdo.php
 */

 /**
  * Creamos un array con distintos nombres.
  */
$names = ['Ciro', 'Paco', 'Maria'];

/**
 * Mostramos por pantalla cada nombre
 */
foreach ($names as $name) {
    echo "$name. "; // Returns: Ciro. Paco. Maria.
}

/**
 * Si pasamos las variables por referencia, se modifica su valor en la posición original.
 */
foreach ($names as &$name) {
    $name = "Hola $name "; // Returns Hola Ciro Hola Paco Hola Maria
    echo $name;
}

/**
 * Como hemos modificado el valor original de la variable en su posición inicial, ahora si volvemos a utilizar
 * esa variable, veremos que no tiene el mismo valor que cuando la hemos declarado, sino que tiene el valor
 * modificado.
 */
foreach ($names as $e) {
    echo "$e "; // Returns Hola Ciro Hola Paco Hola Maria
}