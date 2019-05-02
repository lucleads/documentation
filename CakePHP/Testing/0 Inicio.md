# Testing

[Documentacion](https://book.cakephp.org/3.0/en/development/testing.html)

Los tests unitarios nos permiten comprobar la robustez de nuestra aplicación.

Por defecto, CakePHP nos permite hacer `bake` de los tests básicos para comprobar la existencia de todas las tablas y entidades que sean necesarias para el funcionamiento de la web.

Debemos escribir nuestros propios tests dentro de la carpeta `/tests`.

## Configuración

Para poder realizar tests, debemos haber configurado dentro de `config/app.php` el modo de **debug como true** y los **datos de acceso a la BD**.

```php
'test' => [
	'username' => 'my_app',
	'password' => 'secret',
	'database' => 'app_database_test',
    ],
```

## Instalación de PHPUnit

Para poder realizar los tests que hayamos definido, se requiere la instalación de **PHPUnit** a través de Composer.

```bash
composer.phar require --dev phpunit/phpunit:"^5.7|^6.0"
```

## Realizar los tests con PHPUnit

Para ejecutar todos los tests que hayamos escrito, ejecutamos cualquiera de los comandos:

```bash
composer tests
vendor/bin/phpunit --colors=always
```

Ambos equivalen a `phpunit --colors=always`