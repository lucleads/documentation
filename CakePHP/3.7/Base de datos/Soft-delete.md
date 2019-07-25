[Muffin Trash](https://github.com/UseMuffin/Trash)

# Soft Delete

El plugin **Trash** de Muffin nos permite realizar soft-deletes dentro de las bases de datos.

Soft-delete significa que en lugar de eliminar complemente un registro de la base de datos, asignamos una fecha de eliminación a dicho registro, y evitamos que aparezca en las funciones index, view, etc... de forma que virtualmente está "borrado", pero si queremos revisarlo se mantiene en la DB.

Para poder hacer esto, en las tablas de la BD debemos tener creado dicho campo bajo el nombre **deleted** o **trashed** (se puede configurar un nombre distinto desde las opciones del plugin) con valor por defecto **null**.

## Instalación

```php
// Instalamos con Composer
composer require muffin/trash
// Lo cargamos dentro de Cake
bin/cake plugin load Muffin/Trash
```

## Uso

Añadimos el comportamiento Trash dentro de las tablas donde queremos que se aplique.

```php
// in the initialize() method
$this->addBehavior('Muffin/Trash.Trash');
```

Ahora, cuando realicemos la acción **delete** de un objeto de las tablas donde hayamos indicado este comportamiento, lo que hará será setear el valor del campo **deleted** con el timestamp actual y dejar de listarla de las funciones **index**.