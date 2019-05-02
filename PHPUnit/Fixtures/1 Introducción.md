# Fixtures

[Documentación](<https://phpunit.readthedocs.io/en/8.1/fixtures.html>)

En ocasiones para realizar tests requerimos de ciertos datos de ejemplo. Estos datos se llaman `fixtures`, y podemos crearlos  y destruirlos para realizar comprobaciones sin tener que depender de información real.

```php
class FirstTest extends TestCase
{
    protected $users = [];

    protected function setUp(): void
    {
        $this->users = ['ciro', 'maria', 'david', 'jorge', 'lucia'];
    }

    public function testUsersEmpty()
    {
        $this->assertEmpty($this->users);
    }
}
```

Mediante el fixture `$users` y el método `setUp(): void`, podemos utilizar el array como un elemento de la clase FirstTest en los demás tests.

En este ejemplo concreto, el test dará ERROR ya que `$this->users` no está vacío.

## Crear un fixture

En primer lugar, creamos las variables que vamos a rellenar  con datos dentro de la clase test.

```php
// Creamos un array vacío
protected $users = [];
```

## Rellenar las fixtures

Para crear o destruir fixtures y su contenido, utilizamos las funciones `setUp()` y `tearDown()`

```php
// Rellenamos con datos
protected function setUp(): void
{
	$this->users = ['ciro', 'maria', 'david', 'jorge', 'lucia'];
}
```

## Utilizar una fixture

Para utilizarlas, sólo tenemos que hacer referencia al nombre que les hayamos asignado dentro del método `setUp()`.

```php
$this->users
```

