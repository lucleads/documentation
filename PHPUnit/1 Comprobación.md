# Comprobación

Para comprobar si PHPUnit está instalado correctamente, podemos generar un simple test y ejecutarlo:

```php
// Ruta: ./tests/FirstTest.php
<?php
namespace UnitTestFiles\Test;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testTrueAssetsToTrue()
    {
        $condition = true;
        $this->assertTrue($condition);
    }
}
```

Ahora, ejecutamos el script de composer que hemos definido anteriormente, y comprobamos que nos devuelve OK.

```bash
$ composer run tests
> phpunit --colors=always
PHPUnit 8.1.3 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.3.2
Configuration: C:\LocalServer\php\Proyecto\phpunit.xml

.                                                                   1 / 1 (100%)

Time: 611 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
```
