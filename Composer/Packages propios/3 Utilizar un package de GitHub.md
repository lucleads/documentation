## Utilizar un package de GitHub

Por defecto, Composer gestiona los packages alojados desde Packagist.

Si hemos publicado nuestros packages dentro de GitHub, y queremos utilizarlos en un proyecto, debemos indicar que su source original no será Packagist, sino GitHub. Para ello hacemos lo siguiente:

```json
// Dentro del archivo composer.json de nuestro NUEVO proyecto
{
    "name": "ciro/blog", // Nombre del nuevo proyecto (no es necesario)
    "repositories": [
        {
            // Incluimos un objeto por cada package alojado que vamos a necesitar
            "type": "package",
            "package": {
                "name": "gekyzo/tools",
                "version": "1.0.0",
                "source": {
                    "url": "https://github.com/gekyzo/tools.git",
                    "type": "git",
                    "reference": "v1.0.0"
                }
            }
        }
    ],
    "require": {
        // Ahora, al requerir ese package, Composer lo buscará en la ruta indicada
        "gekyzo/tools": "1.0.0" 
    }
}
```

De esta forma, cuando hagamos `composer install`, lo que haremos será instalar la dependencia `ciro/tools` desde el repositorio que hemos indicado, en lugar de desde Packagist.

