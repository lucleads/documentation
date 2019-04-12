[Retrieving Data & Results Sets](https://book.cakephp.org/3.0/en/orm/retrieving-data-and-resultsets.html)

# Cómo devolver datos

Los datos se mandan a la vista desde su controlador.

Para obtenerlos, debemos cargar el modelo que contenga la información adecuada, y utilizar las funciones de CakePHP para establecer los datos dentro de una variable.

```php
/ In a controller or table method.

// Find all the articles.
// At this point the query has not run.
$query = $articles->find('all');

// Iteration will execute the query.
foreach ($query as $row) {
}

// Calling all() will execute the query
// and return the result set.
$results = $query->all();

// Once we have a result set we can get all the rows
$data = $results->toList();

// Converting the query to a key-value array will also execute it.
$data = $query->toArray();
```

## Datos para usar en default.ctp

En este caso, debemos incluir el código dentro del controlador `AppController`, ya que es el controlador global del que extienden todos los demás.

```php
$this->loadModel('Folders');        
$foldersQuery = $this->Folders->find(
    'all',
    ['fields'=>array('Folders.id', 'Folders.name')]
);
$folders = $foldersQuery->toList();
$this->set(compact('folders'));
```

