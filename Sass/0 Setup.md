# Configuración del entorno SASS en Windows

[Documentación](<https://sass-lang.com/install>)

En primer lugar, instalamos mediante Node.js el packete de sass de forma global con el siguiente comando:

```bash
npm install -g sass
```

Desde un proyecto, en la consola ejecutamos el comando para que sass

vigile los archivos de extensión `.scss` y los compile a `.css`.

```bash
sass --watch <input folder>:<output folder>
```
Ejemplo:

```bash
sass --watch style/sass:style/main
```

Esto nos vigilará y compilará automáticamente los archivos de tipo `.scss`

que se encuentren en la carpeta `style/sass` a la carpeta `style/css`

## Configuración de compilación

Podemos definir ciertas opciones de compilación para generar el archivo CSS.

### Estilo de compilación

```scss
sass --watch style/sass:style/main --style=compressed
```

- expanded: estilo clásico de CSS (valor por defecto)
- compressed: una línea minimizada

### Generar mapa de fuentes

==Para que funcionen los sourceMaps en Chrome, debemos lanzar nuestra web desde un servidor web.==

```scss
sass --watch style/sass:style/main --[no-]source-map
```

Por defecto está habilitado. Pero si queremos generar una hoja de estilos para producción minimizada, donde sólo subamos el archivo CSS sin mapa ni las partes Sass, podemos combinar estas opciones.

```scss
sass --watch style/sass:style/main --no-source-map --style=compressed
```

