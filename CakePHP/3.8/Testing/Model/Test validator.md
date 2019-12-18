# Test validation

En este test compruebo que la función `validationDefault()` devuelve una instancia de 'Validator', y hago return de dicha instancia para comprobar los campos en el siguiente test.

```php
/**
 * Compruebo que la función validationDefault() devuelve una instancia de 'Validator'
 *
 * @test
 * @covers CategoriesTable::validationDefault
 * @return \Cake\Validation\Validator
 */
public function validator_devuelve_objeto_del_tipo_esperado()
{
    $validator = $this->Categories->validationDefault(new \Cake\Validation\Validator);

    $this->assertInstanceOf('\Cake\Validation\Validator', $validator, 'validationDefault debe devolver una instancia de `Validator`');

    return $validator;
}
```

En este test compruebo que la función `validationDefault()` contiene los campos esperados.

Utilizo el dataProvider indicado anteriormente con todos los campos que debería tener la tabla, y utilizo también una dependencia del test anterior que hacía return de la instancia de 'Validator'.

```php
/**
 * Compruebo que la función validationDefault() contiene todos los campos necesarios
 *
 * @test
 * @covers CategoriesTable::validationDefault
 * @depends validator_devuelve_objeto_del_tipo_esperado
 * @dataProvider validatorFields
 */
public function validator_contiene_campos_esperados($field, $validator)
{
    $this->assertTrue($validator->hasField($field), 'El validador no contiene el campo `' . $field . '`');
}
```

