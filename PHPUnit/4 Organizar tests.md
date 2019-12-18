# Organizar tests

PHPUnit ofrece varias formas de agrupar tests para poder ejecutar sólo aquellos que nos interesen.

Podemos utilizar filtros y grupos desde la consola o desde el archivo de configuración `phpunit.xml.dist`.

## Suite

Desde el archivo `xml`

Una suite es una agrupación de tests relacionados. Se pueden crear dos tipos de suite, utilizando el **sistema de archivos**, o utilizando **otro archivo xml**.

En cualquiera de las dos formas, debemos modificar el archivo xml principal para indicar la información de la suite.

Dentro de la etiqueta <testsuites>, creamos un nuevo suite indicando su nombre y el directorio o archivos que lo componen.

```xml
<testsuites>
    <testsuite name="app">
        <directory>tests/TestCase/</directory>
    </testsuite>        
    <testsuite name="controllers">
        <directory>tests/TestCase/Controller/</directory>
    </testsuite>
    <testsuite name="models">
        <directory>tests/TestCase/Model/</directory>
    </testsuite>        
</testsuites>
```

Dentro de la etiqueta <testsuite> podemos indicar un directorio completo, que a su vez puede contener **otro archivo xml**, o podemos indicar únicamente los archivos que queremos ejecutar con las etiquetas <file>

### Ejecutar una suite

```bash
--testsuite={nombre suite}
```

## Filter

Desde la línea de comandos.

Podemos filtrar qué método queremos ejecutar dentro de un archivo o una suite. Para ello indicamos la opción dentro del comando, y el nombre del método a ejecutar.

También podemos indicar el nombre del método y la ruta al archivo en caso de que la suite a ejecutar contenga varios métodos con el mismo nombre.

### Ejecutar un filtro

```bash
--filter {método}
--filter {método ruta_al_archivo}
```

## Group

Desde la línea de comandos.

Si queremos por ejemplo ejecutar únicamente dos tests, ya que uno depende del resultado de otro, podemos utilizar la notación `@group` dentro de ambos tests.

```php
/**
 * @test
 * @group auth
 */
public function proveedor()
{
    // Assertions
    return $var;
}

/**
 * @test
 * @group auth
 */
public function consumidor($var)
{
    $this->assertTrue($var);
}
```



### Ejecutar un grupo

```bash
--group={nombre grupo}
```

