# Test initialize

En este test compruebo que el campo display, los behavior y las primary key son las definidas en la tabla.

```php
/**
 * Compruebo que el campo display, los behavior y las primarys key son las definidas en la tabla
 *
 * @test
 * @covers CategoriesTable::initialize
 */
public function initialize()
{
    $this->Categories->initialize([]);

    $hasBehavior = $this->Categories->hasBehavior('Tree');

    $this->assertEquals('name', $this->Categories->getDisplayField(), 'El display field de Categories debe ser `name`');
    $this->assertEquals('id', $this->Categories->getPrimaryKey(), 'La primary key de Categories debe ser `id`');
    $this->assertTrue($hasBehavior, 'La tabla `Categories` NO tiene el behavior `Tree`');
}
```

