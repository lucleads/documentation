[Html](https://book.cakephp.org/3.0/en/views/helpers/html.html)

# Date & Time

La función de CakePHP `nice()` nos permite formatear una fecha o datetime según unas reglas definidas.

```php
$now->nice('Europe/Madrid', 'es-ES'); // Output: 13 mar. 2019 12:35
```

Si lo que queremos es modificar el formato para todas las instancias, podemos definirlo en `config/app.php`

```php
'defaultLocale' => env('APP_DEFAULT_LOCALE', 'Europe/Madrid'), // Cambiamos Europe/Madrid por el formato que queramos
```

Podemos ver las timezones soportadas por PHP en [este enlace](http://php.net/manual/en/timezones.php).

