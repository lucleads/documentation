# Organizar los tests

Podemos organizar los tests en distintas carpetas para aumentar la claridad a la hora de gestionarlos.

También podemos especificar distintas **suites** de tests para aumentar la especificidad a la hora de ejecutar los tests y poder localizar más rápidamente donde están los fallos o incluso ejecutar sólo ciertos grupos de tests.

Por ejemplo, podemos crear una estructura de carpeta como esta:

```
Tests
├── Productos
│	├── TestUno.php
│	└── TestDos.php
├── Usuarios
│	├── TestTres.php
│	└── TestCuatro.php
└── ...
```

Y podemos organizar esos tests en distintas suites dentro del archivo de configuración:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit></phpunit>
    <testsuites>
        <testsuite name="Productos">
            <directory>Tests/Productos</directory>
        </testsuite>
        <testsuite name="Usuarios">
            <directory>Tests/Usuarios</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

Ahora, cuando ejecutemos los tests podemos utilizar argumentos específicos para ejecutar todos los tests del proyecto o sólo algunas suites.

```bash
phpunit --testsuite Productos
```

