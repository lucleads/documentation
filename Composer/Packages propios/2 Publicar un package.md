# Publicar un package

En el momento en el que hemos indicado el nombre del package, ya podemos utilizarlo como instalable. Para ello sólo tenemos que publicarlo en sus fuentes (repositorios) e indicar estos repositorios en su `composer.json`.

## Publicar en Packagist

**Packagist es el principal repositorio de Composer**, y está habilitado por defecto. Todo lo que sea publicado en Packagist está disponible mediante Composer.

Para publicar un package, debemos registrarnos y hacer `Submit`.

Si publicamos un package aquí, no será necesario que indiquemos el origen del repositorio de nuestros packeges dentro del archivo `composer.json` de cualquier nuevo proyecto que realicemos.

Simplemente con indicar el nombre del package, Composer lo buscará dentro de Packagist y nos lo incluirá.

```
composer require monolog/monolog
```

## Publicar en GitHub

Es posible que queremos utilizar un package que hemos alojado en GitHub en lugar de en Packagist (por comodidad). En este caso, en todos los proyectos donde queramos que Composer instale esos packages, debemos indicar que su fuente será un repositorio concreto.

Para ello, dentro del proyecto que requiere un package que está alojado en GitHub, debemos indicar su repositorio como fuente.

[Más información en Utilizar un package de GitHub.](utilizar-un-package-de-github.md)