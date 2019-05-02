# Requerir packages de Satis en un proyecto

Suponiendo en este ejemplo que queramos requerir un package llamado `gekyzo/tools` que hemos incluido previamente en nuestro Satis, y que nos encontramos en un nuevo proyecto, debemos incluir lo siguiente dentro de nuestro `composer.json`

```json
{
    "name": "ciro/blog",
    "repositories": [
        {
            "type": "composer",
            "url": "http://localhost/composer/satis/web/"
        }
    ],
    "require": {
        "gekyzo/tools": "1.0.0"
    },
    "config": {
        "secure-http": false
    }
}
```

En este caso, dentro de la propiedad `config` he establecido `secure-http` como false, ya que la URL del repositorio no es ni HTTPS ni SSH. ==Es mucho más conveniente realizar una conexión segura==.

## Ignorar packages de Packagist

Dentro del archivo `composer.json` de un proyecto, podemos definir que se ignore todo el repositorio de Packagist. De esta manera, **la única fuente de packages que tendremos serán los repositorios privados** de tipo composer que declaremos.

Para ello, dentro de la clase "repositories", indicamos lo siguiente:

```json
"repositories": [
	{
		"packagist": false
	},
	{
		"type": "composer",
		"url": "http://localhost/composer/satis/web/"
	}
],
```
