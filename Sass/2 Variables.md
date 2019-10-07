# Variables

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#variables_>)

Aunque CSS incluye variables (llamadas *custom properties*), estas todavía no son totalmente compatibles con todos los navegadores y todas las versiones.

Actualmente, cualquier navegador anterior a 2016 NO es compatible con variables nativas de CSS.

Cuando compilamos un Sass, este modifica todas las ocurrencias de una variable por su valor. ==NO crea variables CSS, sino que compila el valor de la variable a cada regla donde la utilicemos==

```scss
/* Ejemplo con Sass
 * Reemplaza todas las ocurrencias de una variable por su valor.
 */
$size: 1.2rem;
body {
    font-size: $size; // Se compila como font-size: 1.2rem;
}
```

```css
/* Ejemplo con CSS
 * NO es 100% compatible con todos los navegadores.
 */
--size: 1.2rem;
body {
    font-size: var(--size);
}
```

## Tipos de datos

Sass permite crear variables de ocho tipos:

1. Numéricas
2. Cadenas de texto
3. Colores: código #ffaa0 o rgba(255,13,15,7)

4. Boolean: true / false
5. Null
6. Lista de valores separados por espacios o comas
7. Mapas
8. Referencias de funciones

## Crear una variable

Para crear una nueva variable, utilizamos el prefijo `$` delante del nombre de la variable, y asignamos su valor con `:`.

```scss
$main-font: 'Open Sans';
```

## Utilizar una variable

Para utilizarlas dentro de una regla, sólo tenemos que indicar su nombre.

```scss
body {
    font-family: $main-font;
}
```

## Ámbito

==Las variables existen únicamente en su ámbito de declaración==

Esto significa, si indicamos una variable dentro del selector de body, sólo podremos utilizarla con el valor asignado dentro de body y sus selectores hijos.

```scss
body {
    $main-font: 'Open Sans';
    font-family: $main-font; // Compila como: 'Open Sans'
    header {
        font-family: $main-font; // Compila como: 'Open Sans'
    }
}

footer {
    font-family: $main-font; // Error de compilación. Variable no definida
}
```

Podemos **declarar variables de forma global** de dos formas:

1. Declarándolas en un archivo partial que importemos al principio de nuestro archivo sass, y de esta forma contar con sus valores durante todas las reglas.

2. Incluyendo el sufijo `!global`

## Convención de nomenclatura

Por razones históricas, las variables declaradas en Sass pueden utilizar guión `-` y raya baja `_` indistintamente.

```scss
$main-font = 'Open Sans';
header {
    font-family: $main_font; // Compila OK
}
main {
    font-family: $main-font; // Compila OK
}
```

## Interpolación de variables

Para realizar interpolación dentro de una regla, operación, mixin o cualquier otro ámbito que necesitamos, utilizamos la siguiente sintaxis `#{$variable}`

```scss
$author: 'Ciro Mora';
footer:after {
    content: "Diseñado por #{$author}";
    /* Compila como:
     * content: "Diseñado por Ciro Mora";
     */
}

$padding: 8px;
header {
    margin: calc(#{$padding} * 2);
    /* Compila como:
     * margin: calc(8px * 2)
     */
}
```
