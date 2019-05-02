# Versiones

Para empezar a utilizar Composer lo único que necesitamos es un archivo `composer.json` en la raíz de nuestro proyecto. Este fichero incluye las dependencias y otros metadatos.

### Operadores de comparación

Utilizando operadores de comparación podemos especificar el rango de las versiones válidas para nuestro proyecto de una librería.

Los operadores válidos son: `>` `>=` `<` `<=` `!=`

Podemos definir múltiples rangos, separándolos por espacio o coma serán tratados como el operador `AND`, y la doble tubería `||` será tratado como `OR`. `AND` tiene mayor prioridad que `OR`.

```
// Ejemplos
>=1.0
>=1.0 <2.0
>=1.0 <1.1 || >= 1.2
```

## Rango

Podemos indicar un rango entre versiones válidas con el caracter `-`.

```
1.0 - 2.0
```

Esto equivale a `>=1.0 <=2.0` 

### Comodín (Wildcard)

Podemos especificar un patrón con el símbolo `*`

```
1.0.*
```

Esto equivale a `>=1.0 <1.1`

### Tilde

Si queremos indicar que un paquete se pueda instalar en un rango de versiones no superior a X, podemos hacerlo con el  operador `~`

```
~1.2
```

Equivale a `>=1.2 <2.0`

```
~1.2.3
```

Equivale a `>= 1.2.3 <1.3.0`

### Intercalación (Caret)

Este operador tiene un comportamiento similar al anterior, con la diferencia de que únicamente permite instalar actualizaciones que no tengan incompatibilidades con versiones anteriores.

```
^1.2
```

Equivale a `>=1.2 <2.0` Siempre y cuando no haya incompatibilidades entre esas versiones.

==Este es el operador recomendado a la hora de indicar la versión de un paquete==

## Resumen

```json
"require": {
    "vendor/package": "1.3.2", // exactly 1.3.2

    // >, <, >=, <= | specify upper / lower bounds
    "vendor/package": ">=1.3.2", // anything above or equal to 1.3.2
    "vendor/package": "<1.3.2", // anything below 1.3.2

    // * | wildcard
    "vendor/package": "1.3.*", // >=1.3.0 <1.4.0

    // ~ | allows last digit specified to go up
    "vendor/package": "~1.3.2", // >=1.3.2 <1.4.0
    "vendor/package": "~1.3", // >=1.3.0 <2.0.0

    // ^ | doesn't allow breaking changes (major version fixed - following semver)
    "vendor/package": "^1.3.2", // >=1.3.2 <2.0.0
    "vendor/package": "^0.3.2", // >=0.3.2 <0.4.0 // except if major version is 0
}
```

