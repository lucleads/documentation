# Métodos que requieren Autenticación

Para simular que estamos logueado con permisos de administrador, debemos poblar la sesión con los datos necesarios.

Para ello utilizamos la información indicada en `isAuthorized()` de **AppController**.

En este ejemplo, el usuario que tiene `true` como valor para su campo `isAdmin` tiene permisos para cualquier acción:

```php
/**
 * Acciones permitidas para VISITANTES CON SESIÓN INICIADA.
 * 
 * @param array $name Los datos del usuario logueado ($this->Auth->user())
 * @return bool Permiso para la acción solicitada por 'request'
 */
public function isAuthorized($user)
{
    if ($user['isAdmin']) {
        return true;
    }

    return false;
}
```

Para simular una acción que requiera de dichos permisos, en el método test hacemos lo siguiente:

```php
public function insertar_nuevo_registro()
{
    $this->session([
            'Auth' => [
                'User' => [
                    'isAdmin' => true,
                ]
            ]
        ]);
}
```

De esta manera, la sesión tendra la información adecuada para `User`.

## CSRF Token

Además de simular una sesión de usuario con permisos de Administrador, es posible que necesitemos incluir el token CSRF para testear un método.

```php
$this->enableCsrfToken();
```

### Fixture Auth

Si queremos simular este tipo de sesión en varios tests, podemos crear un fixture y llamarlo en los test que lo requieran o incluso otro test que haga `return`.

```php
public $simulateAdminSession;

public function setUp()
{
    $this->simulateAdminSession = $this->session([
        'Auth' => [
            'User' => [
                'isAdmin' => true,
            ]
        ]
    ]);
}

/** @test */
public function insertar_nuevo_registro()
{
    $this->simulateAdminSession;
    // Assertions
}
```

### Dependencia

Para crear dependencia entre tests, el test que comprueba la función `isAdmin` debe devolver el valor de la sesión en caso de que su test pase.

```php
//En AppControllerTest.php
/**
 * Compruebo que el usuario con 'group_id' 1 del fixture de Users tiene permisos de Administrador 
 *
 * @test
 * @return array Datos de una sesión con privilegios de Administrador
 */
public function user_is_admin()
{
    $user = $this->Users->get(1)->toArray();

    $this->assertTrue($this->Controller->isAuthorized($user), 'El usuario 1 NO es Administrador');

    return [
        'Auth' => [
            'User' => [
                'isAdmin' => true,
            ]
        ]
    ];
}
```

Ahora, los demás tests que requieran privilegios de administrador, deben tener una dependencia de este test, y recibir como parámetro `$adminSession`.

En caso de que un test dependa de otro test de otra clase, en la notación  `@depends` debemos indicar el **NAMESPACE COMPLETO** al test del que depende.

```php
// En CategoriesControllerTest.php
/**
 * Compruebo que la función view() devuelve la información esperada
 *
 * @test
 * @depends App\Test\TestCase\Controller\AppControllerTest::user_is_admin
 */
public function view_muestra_informacion_esperada($sessionAdmin)
{
    $this->enableCsrfToken();
    $this->session($sessionAdmin);
    $this->get(['controller' => 'categories', 'action' => 'view', 1]);
    $this->assertResponseOk();
}
```