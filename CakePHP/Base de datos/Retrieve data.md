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

### Primera forma: Cargar el modelo

Podemos recoger datos de una tabla distinta a la del controlador actual cargando su modelo.  Para ello, realizamos las siguientes acciones:

```php
$this->loadModel('promotions');
```

Esto nos cargará esta información en el controlador para poder trabajar con ella. Para obtener una query sobre la que podemos iterar, utilizamos:

```php
$this->promotions->find('all')->where(['Promotions.id IN' => $ordersPromoId])->toArray();
```

Podemos anidar **where** dentro de la consulta, y cualquier otra sintaxis.

### Segunda forma: Cargar TableRegistry

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

## Cargar datos de una tabla asociada

Si hemos definido en la BD las relaciones de forma adecuada, podemos anidar consultas de forma sencilla en Cake.

Es decir, si hemos creado una tabla Users, y una tabla Pedidos, con una tabla que los relaciona (Pedidos_Users), indicando las claves foráneas etc... podemos realizar de forma simple la siguiente consulta.

```php
$user = $this->Users->get($id, [
    'contain' => [
        'Orders' => [
            'Promotions',
            'sort' => ['Orders.id' => 'DESC']
        ]
    ]
]);
```

Esto nos anida los Pedidos (Orders) que tiene cada Cliente (User), y la información de los Pedidos (Promotions) que contiene cada pedido.

## Consultas avanzadas

:star: Para consultas más avanzadas, ver [Query builder](Query builder.md) 