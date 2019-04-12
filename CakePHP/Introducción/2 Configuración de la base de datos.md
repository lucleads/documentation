[Database Conventions](https://book.cakephp.org/3.0/en/intro/conventions.html#database-conventions)

[Quickstart](https://book.cakephp.org/3.0/es/quickstart.html)

[Database Basics](https://book.cakephp.org/3.0/en/orm/database-basics.html)

# Convención de nombres

Los nombres de los modelos que generamos en CakePHP por convención se escribirán en plural y underscore.

Por ejemplo `users`, `article_categories`, `user_favorite_pages`.

# Configuración de la base de datos

Editamos el archivo `app/config/app.php` e indicamos la información de configuración para nuestra base de datos dentro de:

```php
'Datasources' => [
        'default' => [            
            'username' => 'usuario',
            'password' => 'contraseña',
            'database' => 'base_de_datos',
```

Cake guarda una copia default del archivo de configuración bajo la ruta  `app/config/app.default.php` desde la que podemos reestablecer algún valor si así lo deseamos.