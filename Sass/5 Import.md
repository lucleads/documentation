# Import

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#import>)

CSS cuenta de forma nativa con una función `@import` que incorpora las reglas de otras hojas de estilos. El principal problema de esta función, es que carga todas las hojas que indiquemos en serie en lugar de en paralelo, aumentando así el tiempo de carga de la página entera.

Sass redefine la función `@import`, ya que en lugar de compilarse en CSS directamente, lo que hace es incluir todas las reglas de la hoja que importamos dentro de la hoja compilada.

Es decir, en lugar de cargar la hoja de estilos principal y todas sus hojas importadas, **compila todas las importaciones dentro de la principal**. Esto permite aumentar la velocidad de carga de la página web de forma considerable, además de contar con todas las reglas en un sólo archivo final.

## Utilizar import

La sintaxis para utilizar el import en Sass es muy similar a la de CSS.

```scss
@import 'estilos';
```

No es necesario indicar la extensión del archivo `.css`

## Importar varios archivos

Podemos separar los archivos que queremos importar por comas.

```scss
@import 'theme/colors', 'theme/fonts';
```

También es posible utilizar saltos de línea:

```scss
@import
    'theme/settings','
    'theme/colors',
    'theme/fonts',
    'theme/forms',
    'theme/mails'
;
```

