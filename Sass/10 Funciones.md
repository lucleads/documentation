# Funciones

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#function_directives>)

Podemos crear nuestras propias funciones mediante las sintaxis de Sass.

## Crear una función

La sintaxis es similar a la de cualquier lenguaje de programación, con la diferencia de que todas las directivas de control deben tener el prefijo `@`.

```scss
@function setTextColor($backgroundColor) {
  @if (lightness($backgroundColor) > 50) {
    @return #000;
  } @else {
    @return 'cyan';
  }
}
```

Ahora, para utilizarla sólo tenemos que indicar el nombre de la función, y sus parámetros en caso de que los requiera.

```scss
body {
    color: setTextColor('#FAFAFA');
}
```

## Funciones con parámetros variables

Sass permite definir funciones con un número indeterminado de parámetros indicándolo mediante los caracteres `...`.

```scss
@function fonts($fonts...) {
    $defaultFonts: Arial, Helvetica, sans-serif;
    $font-family: null;
    @each $font in $fonts {
        $font-family: append($font-family, $font, "comma");
    }
    @each $font in $defaultFonts {
        $font-family: append($font-family, $font, "comma");
    }
    @return $font-family;
}

body {
    font-family: fonts('Roboto', 'Open Sans');
}
```



## Funciones predefinidas

Además, Sass cuenta con ciertas funciones predefinidas que nos permiten operar con colores, textos, números... 

[Funciones de Sass](funciones sass.md)