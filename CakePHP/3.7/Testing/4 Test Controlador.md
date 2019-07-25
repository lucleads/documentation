# Test Controlador

Si queremos testear las funciones de un controlador, debemos crear una variable con la información de dicho controlador.

Es decir, creamos un fixture manual cuyo valor seteamos dentro de `setUp()` como una nueva instancia del controlador.

De esta forma podemos acceder a todos sus métodos.

Ejemplo: 

En el controlador **UsersController.php** tenemos un método `LongEnough()`

```php
public function LongEnough($username) {
    if (strlen($username > 4) {
        return true;
    } else {
        return false;
    }
}
```

Para testear que funcione correctamente, en **UsersControllerTest.php**:

```php
// 1. Creamos el fixture 
public $User;

// 2. Instanciamos el controlador
public function setUp():void
{
	$this->User = new UsersController;
}

// 3. Comprobamos el método
public function testLongEnough()
{
    $usernameFixture = 'myusername';
    $res = $this->User->LongEnough($usernameFixture);
    
    $this->assertTrue($res);
}


```

