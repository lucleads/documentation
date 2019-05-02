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
dadadadadadadadaaaaaaaaaaadddddddddddddddddaaaaaaaaaaaaaaaadddddddddddddddddddaaaaaaaaaaaaaaad
```

## Listar packages disponibles

Podemos ver un listado de los paquetes disponibles dentro de un repositorio mediante el comando `composer show`. Este comando cuenta con algunas opciones para refinar los resultados:

### composer show -a

Muestra packages disponibles (availables)

### composer show --all

Muestra todos los packages (platform, availables, installed)

## Ver información sobre un package

Gracias al mismo comando `composer show` , podemos ver toda la información de un package. Para ello, indicamos el nombre del package después de show.

```
composer show gekyzo/tools
```
Nos mostrará datos similares a estos:


```bash
name     : gekyzo/tools
descrip. : Best tools in the market
keywords :
versions : * 1.0.0
type     : library
source   : [git] https://github.com/Gekyzo/tools.git ca2f2e57f3e214186c6436cb2296609b76f8e325
dist     : [zip] https://api.github.com/repos/Gekyzo/tools/zipball/ca2f2e57f3e214186c6436cb2296609b76f8e325 ca2f2e57f3e214186c6436cb2296609b76f8e325
path     : C:\LocalServer\php\composer\require\vendor\gekyzo\tools
names    : gekyzo/tools

support
source : https://github.com/Gekyzo/tools/tree/v1.0.0
issues : https://github.com/Gekyzo/tools/issues
```
