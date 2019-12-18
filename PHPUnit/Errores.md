# Errores

## Notice: indefined index {varName}

En caso de recibir este error, lo que ocurre es que el test no encuentra el valor para la variable que indique.

Por ejemplo, si en una vista tenemos el siguiente código:

```php
// En AppController.php
$currentUser = $this->Auth->user();
$this->set('currentUser', $currentUser);

// En header.ctp
echo $currentUser['name'];
```

Si recibimos el error de que 'name' no está definido, será porque en nuestro test al mandar los datos a Auth no hemos definido esa clave ni su valor.

```php
// en AppControllerTest.php
$adminSession = [
    'Auth' => [
        'User' => [            
            'isAdmin' => true,
        ]
    ]
];
```

Para comprobar que ese es el error, podemos hacer `debug()` en el controlador donde se asigne la variable que aparezca como indefinida.

Para corregir este fallo, únicamente hay que especificar la clave solicitada y su valor:

```php
$adminSession = [
    'Auth' => [
        'User' => [
            'name' => 'Admin',
            'isAdmin' => true,
        ]
    ]
];
```

