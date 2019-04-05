[Docs](<https://book.cakephp.org/3.0/en/orm/retrieving-data-and-resultsets.html>)

# Retrieve data

## Cargar datos de la misma tabla que el controlador actual

Por defecto, los controladores incluyen la información del modelo que manejan, de forma que podemos cargar información de este modelo de forma simple.

Si nos encontramos dentro del controlador de **Users** por ejemplo:

```php
$users = $this->Users->find('all');
```

Si queremos trabajar únicamente con la información de un registro, utilizamos la función `get()` en su lugar, pasándole como parámetro la ID del registro.

```php
$users = $this->Users->get(5);
// Esta consulta devuelve los datos del usuario con ID 5
```

## Cargar datos de una tabla distinta a la del controlador actual

Para crear una variable con datos que obtenemos de una tabla, en primer lugar debemos cargar esta librería en el controlador:

```php
use Cake\ORM\TableRegistry;
```

Después, desde la función que queramos, llamamos a la tabla que queremos cargar.

```php
$categories = TableRegistry::getTableLocator()->get('Categories')->find('all');
```

Esto nos devuelve un **objeto llamado $categories** con toda la información de la tabla.

Si queremos iterar sobre los elementos, debemos convertirlo en un array mediante el método `toArray()`.

```php
$categories = TableRegistry::getTableLocator()->get('Categories')->find('all')->toArray();
```

## Devolver datos de un registro

Podemos devolver toda la información de un registro en concreto utilizando el método `get()` en lugar de `find()` indicando la ID como parámetro.

```php
$categories = $this->Categories->get(5);
```

Esta consulta nos devuelve un objeto con toda la información de el elemento **5**. Podemos igualmente convertirlo a array para trabajar con esos datos.

## Filtrar resultado

Podemos refinar una búsqueda mediante condiciones, indicar qué campos queremos que nos devuelva, etc...

```php
$promoInfo = $this->Promotions->get($promoId, [	
	'fields' => ['name', 'price_old']
]);
```

Esta consulta nos devuelve únicamente los campos `name` y `price_old` de la promoción con id **$promoId**.

## Consultas avanzadas

:star: Para consultas más avanzadas, ver [Query builder](Query builder.md) 