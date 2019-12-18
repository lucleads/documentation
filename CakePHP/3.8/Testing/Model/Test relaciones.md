# Test relaciones

En este test compruebo que existen relaciones con las tabla esperadas, y que dicha relación es del tipo esperado.

Utilizo el `dataProvider` que he creado anteriormente en el punto **Setup**, para iterar sobre todas las tablas sobre las que debería tener relaciones. En este ejemplo, todas las relaciones que espero son del tipo `BelongsToMany`, de forma que lo indico como una variable dentro del test.

```php
/**
 * Compruebo que existe una relación con la tabla 'Documents'
 * y que dicha relación es del tipo esperado
 *
 * @test
 * @covers CategoriesTable::initialize
 * @dataProvider relatedTables
 */
public function existen_relaciones_con_otras_tablas($associationTable)
{
    $objectType = '\Cake\ORM\Association\BelongsToMany';
    $result_hasAssociation = $this->Categories->hasAssociation($associationTable);
    $result_getAssociation = $this->Categories->getAssociation($associationTable);

    $this->assertTrue($result_hasAssociation, 'La tabla `Categories` NO tiene una relación con `' . $associationTable . '`.');
    $this->assertInstanceOf($objectType, $result_getAssociation, 'La relación de la tabla `Categories` con `' . $associationTable . '` no es del tipo esperado.');
}
```

