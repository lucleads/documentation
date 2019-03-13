[Docs](https://book.cakephp.org/3.0/en/intro.html)

# Setup

En XAMPP, la extensión intl está incluida pero debemos descomentar `extension=php_intl.dll` del archivo **php.ini** y reiniciar el servidor.

CakePHP requiere de **Composer** para funcionar.

Una vez instalado, tenemos que crear en la carpeta del proyecto un fichero `composer.json` que contenga la siguiente información:

```json
{
    "require": {
        "cakephp/cakephp": "3.7.*"
    }
}
```

Para iniciar un nuevo proyecto:

```bash
// Si queremos indicar el nombre de la aplicación
composer create-project --prefer-dist cakephp/app nombreProyecto

// Si omitimos el nombre, nos la creará bajo el nombre de 'app'
composer create-project --prefer-dist cakephp/app {app}
```

Esto nos descargará todos los archivos necesarios para generar nuestra aplicación Cake.

Una vez hecho todo esto, podemos comprobar que CakePHP está instalado de forma correcta desde la ruta `localhost/nombreProyecto/`

Para iniciar un servidor desde la ruta actual, utilizamos `bin/cake server`.

