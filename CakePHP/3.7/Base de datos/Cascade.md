[Docs](https://book.cakephp.org/3.0/en/orm/deleting-data.html#cascading-deletes)

# Relaciones Cascade

Si contamos en nuestra base de datos con una relación One-to-Many (Categoría contiene múltiples Posts), podemos definir que las actualizaciones sobre la tabla One afecten en cascada a sus relaciones Many.

Para ello, debemos incluir la relación dentro del inicializador de la siguiente forma:

```php
// En la tabla Posts, dentro del método initialize
$this->hasMany('Posts', [
    'dependent' => true,
    'cascadeCallbacks' => true,
]);
```

Ahora, cuando realicemos una acción sobre la tabla Principal, los cambios se propagarán en los registros en la tabla asociada.