[Quickstart](https://book.cakephp.org/3.0/en/quickstart.html#creating-our-first-model)

# Modelos

Los modelos son el corazón de las aplicaciones de CakePHP. Nos permiten leer o modificar datos, crear reglas, validar...

Además, son los cimientos necesarios para construir las acciones que indicaremos en los controladores y las plantillas.

## Crear una tabla

Los modelos de CakePHP se componen de los objetos `Tabla` y `Entidad`. El objeto `Tabla` permite acceso a la colección de entidades almacenadas en una tabla específica.

Se almacenan en la ruta **src/Model/Table/**, ahí podemos crear nuestro primer modelo como por ejempo **src/Model/Table/ArticlesTable.php** con el siguiente contenido:

```php
<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class FoldersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
```

Como hemos nombrado al modelo FoldersTable, por convención CakePHP es capaz de identificar que este componente funciona con la tabla `folders` de la BD.

## Crear una entidad

Ahora, creamos una entidad para nuestras carpetas. **La entidad representa un sólo registro en la base de datos.**

Las entidades se encuentran en la ruta `src/Model/Entity`, ahí crearemos nuestra entidad para las carpetas con el siguiente contenido:

```php
<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Folder extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'name' => true,
        'alias' => true,
    ];
}
```

Los campos que indiquemos como `false` serán aquellos que no modifique el método `save()`.