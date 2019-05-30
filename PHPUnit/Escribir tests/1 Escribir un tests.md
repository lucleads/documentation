# Escribir un test

[Documentation](<https://phpunit.readthedocs.io/en/8.1/writing-tests-for-phpunit.html>)

Por convención, PHPUnit nos recomienda que:

1. Los tests de una clase llamada `Class` se indicarán en otra clase llamada `ClassTest`
2. `ClassTest` hereda desde `PHPUnit\Framework\TestCase`
3. Todos los tests son métodos públicos llamados `test*`

## Personalizar mensaje de error

Podemos indicar qué mensaje queremos que aparezca en la consola en caso de que un test resuelva como ERROR. Para ello tenemos que escribir el mensaje como último argumento de la `assertion` que utilicemos dentro del test.

```php
$var = false;
$this->assertTrue($var, 'Fallo en assertTrue para el valor de $var')
```

Este mensaje debe ser lo más descriptivo posible.