# Bootstrap

Información sobre el contenido del archivo de configuración `bootstrap.php`.

## Crear una ruta global

Si queremos crear una ruta de forma global para que esté disponible desde cualquier punto de la aplicación, podemos hacerlo desde este archivo.

Para ello, utilizamos el objeto **Configure** con el método `write`.

```php
/**
 * Custom images routes
 */
Configure::write('Fol.images', WWW_ROOT . 'img\\');
```

Ahora, podemos utilizar esa ruta con el método `read`.

```php
Configure::read('Fol.images')
```

