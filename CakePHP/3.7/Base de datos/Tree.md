[Docs](https://book.cakephp.org/3.0/en/orm/behaviors/tree.html)

# Tree

En ocasiones querremos almacenar información jerárquica en nuestra base de datos, y para mostrarla de forma eficiente debemos aplicar el comportamiento tree.

Puede tratarse de información de una estructura de carpeta, rangos en una organización, etc...


![Imagen jerarquía](<http://i3.sitepoint.com/graphics/sitepoint_tree.gif>)

## Requisitos

Para poder utilizar de forma eficiente esta estructura de datos, debemos tener las siguientes columnas en la tabla de la BD.

- `parent_id`: Identificador de la fila padre a la actual. Este campo tiene una relación recursiva en la propia tabla donde existe con el campo id. Valor numérico, puede ser *null*.
- `lft`: Utilizado para mantener la estructura del árbol. Se genera de forma automática por Cake. Valor numérico.
- `rght`: Utilizado para mantener la estructura del árbol. Se genera de forma automática por Cake. Valor numérico.

Estas columnas sirven para mantener la estructura del árbol, y pueden tener estos nombres u otros que queramos, pero si hacemos esto último tenemos que indicarlo en la configuración del comportamiento.

## Configuración

Dentro de los modelos, modificamos la tabla a la que queremos aplicar este behavior.

```php
// Ejemplo en una tabla Folder
$this->addBehavior('Tree');
```

Gracias a esto, las acciones que realicemos sobre los elementos de esta tabla (crear, editar) incluirán acciones relativas a estructuras de tipo árbol (indicar su padre).

## Generar variable objeto

Para crear una variable objeto con la información del árbol:

### En el controlador

En primer lugar, debemos crear la variable que almacene los datos del árbol.

En este ejemplo, voy a crear un árbol con una estructura de carpetas, donde una carpeta puede estar dentro de otra (es hija de otra carpeta).

```php
$folderStructure = TableRegistry::get('Folders');
$folderStructure->recover();
$this->set(compact('folderStructure'));
```

Con este código he creado la variable `$folderStructure` con los datos de la tabla `Folders` de la BD, y lo he mandado a las vistas desde las funciones `set(compact())`.

### En la vista

Lo que recibimos desde el controlador, es un array asociativo con los distintos niveles en los que se encuentra cada carpeta. Para poder dibujarlo, debemos primero tratarlo como un árbol.

```php
$folderList = $folderStructure->find('treeList');
```

Ahora podemos tratar esta variable para mostrar la información que contiene.

```php
foreach ($folderList as $folder):
```

