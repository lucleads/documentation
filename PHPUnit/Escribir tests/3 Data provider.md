# Data providers

[Documentation](<https://phpunit.readthedocs.io/en/8.1/writing-tests-for-phpunit.html#data-providers>)

Los argumentos de un test se generan mediante la anotación`@dataProvider`

Los dataProvider deben retornar un array de arrays o un objeto que implemente la interfaz `Iterator`.

```php
public function namesProvider()
{
    return [
        ['ciro', 'paco'],
        ['dani', 'marta']
    ];
}

/**
 * @dataProvider namesProvider
 */
public function testCiroFirst($firstName, $secondName)
{
    $this->assertEquals('ciro', $firstName);
}
```

Al ejecutar este test, cada uno de los array que devolvemos en `namesProvider()` es tratado como parámetros para el test `testCiroFirst()` bajo el nombre que indiquemos para las variables en el mismo orden.

PHPUnit ejecuta `testCiroFirst()` contra cada línea del array de arrays.

| # de Test | $firstName | $secondName |
| --------- | ---------- | ----------- |
| 1         | 'ciro'     | 'paco'      |
| 2         | 'dani'     | 'marta'     |

Otro ejemplo:

```php
/**
 * @dataProvider valuesProvider
 */
public function testExpectedSum($firstNum, $secondNum, $expectedSum)
{
    $sum = $firstNum + $secondNum;
    $this->assertSame($sum, $expectedSum);
}

public function valuesProvider()
{
    return [
        [2, 3, 5],
        [2, 3, 7]
    ];
}
```

En este caso, el primer test evalúa OK, ya que 5 es igual a 2+3, pero el segundo test da ERROR ya que 7 no es igual a 2+3.

Es recomendable indicar un nombre para los sets de datos, ya que de esta forma PHPUnit nos devolverá una información más explícita sobre qué test ha fallado.

```php
public function valuesProvider()
{
    return [
        "Expected sum 5" => [2, 3, 5],
        "Expected sum 7" => [2, 3, 7]
    ];
}
```

