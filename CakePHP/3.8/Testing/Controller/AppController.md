# AppController Test

Compruebo la función `initialize()` de AppController para confirmar que los componentes que es esperan están cargados.

```php
/**
 * Compruebo que AuthController está cargado y que la autenticación se realiza mediante los campos indicados
 *
 * @test
 * @return void
 */
public function initialize()
{
    $this->Controller->initialize();

    // AuthComponent está cargado
    $authComponent = $this->Controller->Auth;
    $this->assertInstanceOf('\Cake\Controller\Component\AuthComponent', $authComponent, 'AuthComponent no aparece cargado en AppController');

    // Autenticación mediante campos indicados
    $authForm = $authComponent->getConfig('authenticate');
    $authFormExpected = [
        'Form' => [
            'fields' => [
                'username' => 'email',
                'password' => 'password'
            ]
        ]
    ];
    $this->assertEquals($authFormExpected, $authForm, 'Los campos utilizados para AuthForm no son los indicados en AppController');
}
```

