# Dependencia entre tests

[Documentation](<https://phpunit.readthedocs.io/en/8.1/writing-tests-for-phpunit.html#test-dependencies>)

Podemos definir que un test tenga una relación de dependencia de otro. Por ejemplo, **si en un test generamos una instancia de una clase**, podemos hacer que ese test haga `return` de dicha instancia, y utilizarlo en otros tests.

Conceptos:

- **Test productor**: el método que realiza sus tests y del que depende el consumidor.
- **Test consumidor**: el método que depende de lo que devuelva el productor y utiliza esos datos para sus propios tests.

Ejemplo:

1. `testCreateUser` genera una instancia de la clase `User`, realiza comprobaciones sobre dicha instancia, y la última línea es `return $user`;
2. `testDeleteUser` tiene una relación de dependencia de `testCreateUser`, ya que requiere que un usuario Exista para poder eliminarlo.

Para indicar una relación de dependencia, tenemos que utilizar la anotación `@depends` dentro de la documentación del test consumidor.

## Dependencia de datos

Dentro de un test podemos devolver una serie de datos, array, objeto, etc... y reutilizarlo dentro de otro.

Ejemplo práctico:

```php
public function testEmpty()
{
    $stack = [];
    $this->assertEmpty($stack);

    return $stack;
}

/**
 * @depends testEmpty
 */
public function testPush(array $stack)
{
    array_push($stack, 'foo');
    $this->assertSame('foo', $stack[count($stack)-1]);
    $this->assertNotEmpty($stack);
}
```

Como podemos ver en el ejemplo anterior, el primer test genera un array vacío sobre el que realiza sus comprobaciones y que acaba devolviendo (return). El segundo test depende del primero, modifica el contenido del array y realiza sus comprobaciones.

## Dependencia del resultado

Explotando la dependencia entre tests, podemos indicar que uno no pueda funcionar si otro ha dado error durante su evaluación.

```php
public function testOne()
{
    $this->assertTrue(false);
}

/**
 * @depends testOne
 */
public function testTwo()
{
}
```

Al ejecutar estos tests obtendremos un ERROR en la evaluación del primero ,y un SKIP en el segundo, ya que depende del primero.

## Dependencia múltiple

Cuando definimos una dependencia de datos entre tests, lo que estamos haciendo indirectamente es pasar dichos datos como parámetro. Gracias a esto podemos depender del resultado de varios tests.

```php
public function testProducerFirst()
{
    $this->assertTrue(true);
    return 'first';
}

public function testProducerSecond()
{
    $this->assertTrue(true);
    return 'second';
}

/**
 * @depends testProducerFirst
 * @depends testProducerSecond
 */
public function testConsumer($a, $b)
{
    $this->assertSame('first', $a);
    $this->assertSame('second', $b);
}
```

