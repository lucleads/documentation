# Parciales (partials)

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#partials>)

Los archivos parciales (partial) no son compilados por Sass a no ser que los importemos directamente.

Se identifican con el prefijo `_` seguido del nombre del archivo.

Si contamos con el archivo `_colores.scss` dentro de nuestra carpeta de estilos, Sass no compilará este archivo en un `colores.css`, ya que interpreta que se trata de un archivo parcial cuya única funcionalidad es la de ser importado.

## Importar partial

Para importar el código de un partial, sólo tenemos que utilizar la función `@import`.

```scss
@import 'colores';
```

==No es necesario que indiquemos ni la barra baja antes del nombre del partial, ni su extensión==.

```scss
@import 'colores';
// Es igual que:
@import '_colores.scss';
```

## Archivos index

Si tenemos un partial con el nombre reservado `_index.scss`, este se importará automáticamente cuando importemos la carpeta que lo contiene.

```bash
styles
├─	sass
│	├─	theme
│	│	├─	_index.scss
│	│	├─	_colors.scss
│	│	└──	_fonts.scss
│	└──	main.scss
└──	main.css
```

```scss
// _index.scss
@import 'colors';
@import 'fonts';
```

```scss
// main.scss
@import 'theme';
```

