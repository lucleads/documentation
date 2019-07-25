[Doc](https://book.cakephp.org/3.0/en/orm/retrieving-data-and-resultsets.html)

# Mandar datos a una vista

Si queremos mandar datos a una vista, debemos cargarlos desde su controlador.

## Mandar datos de una Consulta

En primer lugar, cargamos el objeto necesario para operar con las tablas de la BD.

```php
use Cake\ORM\TableRegistry;
```

Ahora, desde la acción del controlador cargamos los registros que vamos a pasar.

```php
$categories = TableRegistry::getTableLocator()->get('Categories')->find('all');
```

Por último, utilizamos la función `set` y `compact` para enviarlos a la vista.

```php
$this->set(compact('categories'));
```

Una vez hayamos hecho esto, desde la vista contamos con una variable llamada `$categories` con la información que hemos pasado.