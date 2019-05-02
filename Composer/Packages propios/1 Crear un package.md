# Crear un package

Para crear un package instalable desde otros proyectos, debemos:

- Crear una carpeta con el código que queremos que incluya el package.
- Iniciar un proyecto Composer dentro de dicha carpeta.
- Indicar ciertas propiedades en su `composer.json`

```json
{
    "name": "ciro/tools",
    "description": "Short definition of the package features",
    "version": "1.0.0"
}
```

En este caso, `ciro` será el vendor name, mientras que `tools` será el nombre de la librería.

La propiedad version sirve para mantener este package.

Dentro de su repositorio, iremos creando `tags` por cada versión nueva del package.

Podemos ver todas las propiedades que se pueden indicar dentro de un package [en este enlace](<https://getcomposer.org/doc/04-schema.md>).

Después, [publicar un package](publicar-un-package.md).