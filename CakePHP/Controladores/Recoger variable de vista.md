[Docs](https://api.cakephp.org/3.7/class-Cake.View.ViewVarsTrait.html)

# Recoger variable de vista

Si queremos utilizar en un controlador una variable que esté seteada en una vista, podemos recogerla con el método `viewVars`.

Por ejemplo, si contamos con una variable `$currentUser` que utilizamos en las vistas para mostrar la información del usuario conectado a nuestra web, podemos recoger la información que contiene esa variable desde otro controlador para realizar acciones.

```php
// En: /src/Controllers/UsersController.php
public function profile() {
	$this->viewVars['currentUser']['id']    
}
```

Esto nos devolverá el valor de ID para la variable `$currentUser`, y de esa manera podemos generar una consulta dentro de `profile()` y ver la información asociada a un usuario.