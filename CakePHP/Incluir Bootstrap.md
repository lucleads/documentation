[YouTube](https://www.youtube.com/watch?v=6EE9cF3GSWo&index=8&list=PL-9WnOL7eRJZFoTXKm7EvR_p38rtF87YH)

[FriendsOfCake](https://github.com/FriendsOfCake/bootstrap-ui)

# Incluir Bootstrap

Podemos utilizar el framework CSS de Bootstrap para generar más rápidamente los estilos de nuestra web. Para ello debemos instalarlo a través de Composer, y después incluirlo mediante Cake.

```bash
composer require friendsofcake/bootstrap-ui
bin/cake bake plugin BootstrapUI
```

Ahora que lo hemos instalado, lo insertamos en la vista de la App.

**src / View / AppView.php**

```php
// Después de...
use Cake\View\View;
// Insertamos:
use BootstrapUI\View\UIViewTrait;
```

Más abajo en el mismo archivo, para utilizarlo, debemos llamarlo desde la clase AppView.

```php
class AppView extends View
{
    use UIViewTrait; // Insertamos esto
```

Por último, lo insertamos desde la función `initialize`.

```php
public function initialize()
{
	$this->initializeUi(['layout => false']);
}
```

