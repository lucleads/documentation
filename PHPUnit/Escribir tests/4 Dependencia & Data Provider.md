# Dependencia & Data Provider

Podemos generar tests que dependan tanto del resultado de otros, como de un set de valores que queramos utilizar.

En este caso, debemos tener en cuenta que el orden en el que el test consumidor recibe los parámetros es:

1. Primero recibe el resultado del test del que depende
2. Después recibe los sets de valores del data provider.

**Ejemplo:**

```php
/**
 * dataProvider
 */
public function valuesProvider()
{
    return [
        "Expected sum 5" => [2, 3, 5],
        "Expected sum 7" => [2, 3, 7]
    ];
}

/**
 * Test productor
 * Comprueba que la instancia de Calculadora es de la clase esperada
 * @test
 * @returns \App\Herramientas\Calculadora
 */
public function calculadora_es_del_tipo_esperado()
{
    $calculadora = new Calculadora;
    
    $this->assertInstanceOf('\App\Herramientas\Calculadora');
    
    return $calculadora;
}

/**
 *
 * @test
 * @depends calculadora_es_del_tipo_esperado
 * @dataProvider valuesProvider
 */
public function operaciones_son_correctas($num1, $num2, $num3, $calculadora)
{
    $resultado = $calculadora->sumar($num1, $num2);
    
    $this->assertEquals($num3, $resultado);
}
```

