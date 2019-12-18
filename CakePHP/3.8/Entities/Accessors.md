# Accessors

Los accessors son métodos de las entidades que permiten que sus campos se lean (retrieve) o establezcan (set) de forma personalizada.Los accessors utilizan la convención de `_get` seguido del nombre del campo en formato CamelCase.

Reciben como único parámetro el valor almacenado del campo que van a modificar.

Los accessors se aplican tanto a la hora de leer una entidad como a la hora de guardarla.

### **Distinto comportamiento para nueva entidad **

Mediante él método `isNew()` de las entidades, podemos determinar que un accessor tenga una funcionalidad en el caso de que dicha entidad sea un nuevo registro, y otro comportamiento distinto si es un registro ya existente.

Es decir, que a la hora de guardar una nueva entidad en la base de datos, la información de un campo tenga un valor, y que cuando se muestre esa entidad, se el campo tenga otro valor.

```php
/**
 * Devuelve la imagen en miniatura asociada al documento.
 * En caso de que el documento no tenga ninguna imagen, devuelve un placeholder.
 * 
 * **Si estamos creando una nueva entidad**, devuelve el valor tal cual lo recibe para guardar en la BD
 * Si estamos mostrando una entidad ya existente, aplica el 'else'
 *
 * @param null|string $thumbnail El valor
 * @return null|string El enlace asociado al documento
 */
protected function _getThumbnail(?string $thumbnail): ?string
{
    if ($this->isNew()) {
        return $thumbnail;
    } else {
        return ($thumbnail) ? '/img/'.$thumbnail : 'https://via.placeholder.com/150x150';
    }
}
```

