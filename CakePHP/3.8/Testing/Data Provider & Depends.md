# Data Provider & Depends

Un mismo test puede requerir datos de un `@dataProvider` y un `@depends` a la vez.

En estos casos, es vital conocer que el orden en el que recibe los datos dicho test es siempre el siguiente:

1. En primer lugar, se reciben los datos del `@dataProvider`
2. En segundo lugar, se reciben los datos de la dependencia `@depends`

Conociendo esto, podemos realizar un test como el segundo este ejemplo:

```php
/**
 * dataProvider para los campos que contiene la tabla
 */
public function validatorFields()
{
    return [
        'Campo ID' => ['id'],
        'Campo Nombre' => ['name'],
    ];
}

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

El test `validator_devuelve_objeto_del_tipo_esperado()` tiene un return del validator sobre le que hace las comprobaciones.

El test `validator_contiene_campos_esperados()` recibe dos parámetros, en primer lugar el `$field` que provee el `@dataProvider` y en segundo lugar el `$validator` que devuelve el test anterior.