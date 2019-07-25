[Docs](https://book.cakephp.org/3.0/en/tutorials-and-examples/cms/authentication.html)

# Explicación

Para poder gestionar usuarios y permisos dentro de una aplicación de Cake (CMS), debemos utilizar el **componente Auth**.

Para ello, dentro del controlador **AppController**, en la función inicializar, cargamos y configuramos el componente.

```php
// En /src/AppController.php
/**
 * User Auth
 */
$this->loadComponent('Auth', [
    'authorize' => 'Controller',
    'authenticate' => [
        'Form' => [
            'fields' => [
                'username' => 'email',
                'password' => 'password'
            ]
        ]
    ],
    'loginAction' => [
        'controller' => 'Users',
        'action' => 'login'
    ],
    // If unauthorized, return them to page they were just on
    'unauthorizedRedirect' => $this->referer(),

]);
```

Podemos definir las opciones de configuración según [nos indica la documentación](https://book.cakephp.org/3.0/en/controllers/components/authentication.html).

## Autenticación

En primer lugar, debemos contar con la **tabla** de **usuarios** que será la encargada de realizar la autenticación.

Como mínimo, debe contener las columnas nombre y contraseña, aunque podemos crear también rol, última fecha de actividad...

En el **controlador de Usuarios**, tendremos que indicar ciertas acciones y vistas básicas para realizar login(), logout() y add().

## Control de permisos

Una vez hemos implementado el módulo de autenticación, debemos implementar las funciones de control de permisos para cada controlador.

### Nivel global (AppController)

En primer lugar, debemos mandar la información de usuario para que la valide **Auth**. Para ello, dentro de la función **beforeFilter()** creamos la variable con esta información y la pasamos a todas las vistas (también podemos hacer esto dentro de la función **initialize()**).

```php
// En /src/AppController.php
/**
 * Creo la variable $currentUser para enviar a las vistas.
 */
public function beforeFilter($event)
{
    $user = $this->Auth->user();
    $this->set('currentUser', $user);
}
```

Podemos también definir que ciertos usuarios o roles cuenten con todos los permisos por defecto. Esto se realiza desde la función **isAuthorized()**.

```php
// En /src/AppController.php
/**
 * Defino permisos para visitantes CON SESIÓN INICIADA.
 * Los usuarios con rol 'admin' tienen todos los permisos.
 */
public function isAuthorized($user)
{
    if ($user['role'] === 'admin') {
        return true;
    }
    return false;
}
```

Esta función recoge el valor de la variable **$user** que hemos definido anteriormente, y comprueba cual es su rol. Si el rol del usuario conectado es *admin*, devuelve true, lo que significa que le otorga permiso para realizar la acción que haya intentado acceder (index, view, edit, delete...).

### Nivel específico (cada controlador)

Con las acciones anteriores, hemos limitado el acceso a cualquier acción de cualquier controlador para que **únicamente el usuario con rol admin tenga permiso**. Podemos controlar a nivel de controlador las acciones que queremos permitir a cada usuario o grupo de usuarios.

Dentro de cada controlador, tenemos tres niveles de control, **initialize()** (se resuelve antes de cargar la vista), **beforeFilter()** (se resuelve después de initialize) y **isAuthorized()** (se resuelve después de cargar la vista).

**¿Para qué sirve esto?**

Podemos definir en qué momento queremos comprobar contra Auth los permisos, de forma que unos usuarios o visitantes tengan unos permisos, y otros usuarios tengan otros.

Por ejemplo, si queremos que TODOS los visitantes (sin necesidad de estar logueados) puedan hacer index y view en un controlador, lo definiremos en initialize() o beforeFilter(), pero nunca en isAuthorized().

Si queremos que ciertos usuarios logueados puedan realizar una acción, lo definiremos en isAuthorized().

En este ejemplo, doy permiso a cualquier visitante para que realice las acciones de index y view, y doy permiso a los usuarios logueados para que hagan addToCart.

```php
/**
 * Defino permisos para cualquier visitante.
 * Incluye los UNLOGGED.
 */
public function initialize()
{
    parent::initialize();
    $this->Auth->allow(['index', 'view']);
}

/**
 * Defino permisos para visitantes CON SESIÓN INICIADA.
 */
public function isAuthorized($user)
{
    $action = $this->request->getParam('action');
    if (in_array($action, ['addToCart'])) {
        return true;
    }
    return parent::isAuthorized($user);
}
```

## RESUMEN

Según la arquitectura que hemos definido en estos ejemplos, el orden de comprobación de permisos funciona en cascada con el siguiente esquema:

1. **SectionController::initialize**
2. **AppController::initialize**
3. **SectionController::isAuthorized**
4. **AppController::isAuthorized**

Podríamos definir un nivel intermedio más, que estaría entre initialize y isAuthorized (beforeFilter), pero con estos dos niveles es suficiente por ahora.



