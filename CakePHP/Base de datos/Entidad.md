[Docs](https://book.cakephp.org/3.0/en/orm/entities.html)

# Entidad

## Mutator y Accessor

[Docs](https://book.cakephp.org/3.0/en/orm/entities.html#accessors-mutators)

Dentro de una entidad, podemos determinar que un campo tenga cierto valor cuando lo mostramos. De esta manera es posible incluir algo de información, o incluso hacer un switch.

### Accessor

Por ejemplo, si contamos con un campo llamado `state` en una tabla `orders`, donde indicamos el estado en el que se encuentra un pedido en inglés (`pending, completed, canceled`), podemos hacer un switch para que se nos muestre con otro formato cuando llamemos a ese dato.

```php
// Dentro de la entidad Order.php
protected function _getState($state)
{
    switch ($state) {
        case 'completed':
            return 'Completado';
        case 'canceled':
			return 'Cancelado';
        default:
            return 'Pendiente';
            break;
    }
}
```

De esta forma, cuando mostremos el atributo `$order->state` , en lugar de aparecer su texto en inglés, aparecerá el mensaje que hemos definido en el switch.

### Mutator

Otro caso muy útil es en el caso de los nombres de personas. A la hora de registrar un nuevo usuario en la BD, podemos convertir el dato introducido (por ejemplo: Ciro) para que se almacene en minúsculas y sin espacios.

```php
// Dentro de la entidad User.php
protected function _setName($string)
{
	return Inflector::humanize(strtolower($string));
}
```

