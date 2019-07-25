# Convenciones

Inspirado en [Sass Guidelines](<https://sass-guidelin.es/#syntax--formatting>)

## Strings (Cadenas de caracteres)

CSS no requiere que las cadenas de caracteres sean entrecomilladas, por esa misma razón Sass tampoco lo requiere.

A pesar de eso, en ciertos elementos de Sass se recomienda el uso de comillas para evitar posibles errores. Por ejemplo, puede confundirse el nombre de un color con el propio color.

## Mapas

El nombre de las claves en los mapas deben indicarse **CON comillas**.

```scss
$colores: (
    'primary': #FF0000,
    'secondary': #CFCFCF,
    'accent': #B4E200,
    'white': #F2F2F2,
);
```

## Archivos

Utilizando las características de los partials, podemos organizar los archivos en una estructura de carpetas.

En dicha estructura, se organizarán todos los partials según su tipo, y se importarán desde un archivo `main.scss`.

La primera línea del archivo compilado debe ser el charset, por esta razón, la primera línea de nuestro archivo `main.scss` deberá ser: 

```scss
// En main.scss
@charset 'utf-8';
```

### Estructura de carpetas

```
sass /
│
├── settings /
│	├── _variables.scss		# Variables, Mapas y funciones map-get
│	├── _functions.scss
│	└── _mixins.scss
├── base /
│	├── _reset.scss / _normalize.scss
│	└── _box-sizing.scss
├── elements /
│	├── _heading.scss
│	├── _table.scss
│	└──
├── layout /
│	├── _aside.scss
│	├── _footer.scss
│	├── _header.scss
│	└── _main.scss
├── components /
│	├── _alert.scss
│	├── _button.scss
│	└── _product.scss
├── pages /
│	├── _home.scss
│	├── _contact.scss
│	└── _profile.scss
├── vendor /
│	├── _bootstrap.scss
│	├── _jquery.scss
│	└── _slick.scss
└── main.scss
```

