# Mapas

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#maps>)

Un mapa representa una asociación entre claves y valores relacionadas dentro de un mismo grupo.

```scss
$colores: (
    'principal': #cfcfcf,
    'secundario': #999999,
);
```

## Utilizar un mapa

Para recoger el valor de un mapa, podemos utilizar la función de Sass `map-get()`

```scss
body {
    background-color: map-get($colores, 'principal');
}
```

## Mapas anidados

Podemos crear una estructura de mapas profunda, anidando un mapa dentro de otro. Para utilizar el valor de estos mapas debemos recurrir a funciones personalizadas:

```scss
$core: (
    // Breakpoint values
    'bp': (        
        's-max': 480px,
        'm-min': 481px,
        'm-max': 1024px,
        'l-min': 1025px,
        'l-max': 2440px,
    ),    
    // Margin values
    'margin': (
        'xs': 1%,
        's': 5%,
        'm': 10%,
        'l': 15%,
        'xl': 25%,        
    )
)

@function deep-map($map, $keys...) {
    @each $key in $keys {
        $map: map-get($map, $key);
    }
    @return $map;
}

body {
    margin-top: deep-map($core, 'margin', 'm');
    /* Compila como
     * margin-top: 10%;
     */
}
```

