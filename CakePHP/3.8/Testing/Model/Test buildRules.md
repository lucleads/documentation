# Test BuildRules

En este test compruebo que las reglas indicadas en la tabla se aplican como es debido.

Para ello, intento almacenar un nuevo registro que SÍ cumple las reglas, y otro que NO las cumple.

En este ejemplo, en el primer test utilizo como `parent_id` el valor de una entidad que está en los fixtures de la tabla, y en el segundo test utilizo un valor que NO existe en dichos fixtures.

```php
/**
 * Compruebo que la función buildRules() es true cuando se envían datos que deberían
 * cumplir todas las reglas
 * Nueva categoría con un 'parent_id' que existe, devuelve TRUE para checkRules()
 *
 * @test
 * @covers CategoriesTable::buildRules
 */
public function nuevo_registro_padre_existe()
{
    $newCategoryExistingParent = $this->Categories->newEntity([
        'parent_id' => 1,
    ]);
    $result = $this->Categories->checkRules($newCategoryExistingParent);

    $this->assertTrue($result);
}

/**
 * Compruebo que la función buildRules() es false cuando se envían datos que no
 * cumplen todas las reglas
 * Nueva categoría con un 'parent_id' que NO existe, devuelve FALSE para checkRules()
 *
 * @test
 * @covers CategoriesTable::buildRules
 */
public function nuevo_registro_padre_no_existe()
{
    $newCategoryNonexistentParent = $this->Categories->newEntity([
        'parent_id' => 1492,
    ]);
    $result = $this->Categories->checkRules($newCategoryNonexistentParent);

    $this->assertFalse($result);
}
```

