# Setup

[Documentation](<https://phpunit.readthedocs.io/en/8.1/installation.html>)

PHPUnit 8.1 requiere PHP 7.2.

## Instalación mediante Composer

La forma más sencilla de instalar PHPUnit es mediante su package para Composer.

Para incluirlo, simplemente añadimos una dependencia para el entorno de desarrollo.

```bash
composer require --dev phpunit/phpunit ^8.0
```

Una vez añadida, la instalamos:

```
composer install
```

Ahora, creamos el script para ejecutar PHPUnit desde la carpeta vendor del proyecto.

```json
"scripts": {
	"tests": "phpunit --colors=always"
}
```

## Archivo de configuración

Podemos crear un archivo `phpunit.xml` en la raíz del proyecto con la configuración general.

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true" verbose="true" stopOnFailure="false">
    <testsuites>
        <testsuite name="Application Test Suite">
            <directory>./tests/</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

### Logs

Dentro del archivo de configuración `phpunit.xml` podemos indicar si queremos que se almacene un registro de los tests que realizamos.

```xml
<logging>    
	<log type="testdox-text" target="logs/testdox.txt"/>
</logging>
```

El archivo que se genera será parecido a:

```
Proyecto\tests\Exception
 [ ] Exception

Proyecto\tests\First
 [x] True assets to true
 [x] Push and pop

Proyecto\tests\Fixtures
 [ ] Fixture is empty
```

