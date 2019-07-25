[Doc](https://book.cakephp.org/3.0/en/views.html#elements)

# Elementos

Un elemento es un trozo de código que podemos reutilizar dentro de las vistas.

Para crearlo, sólo tenemos que generar un nuevo archivo con el nombre que queramos y la extensión `.ctp` en la carpeta `/Template/Element`

Para llamarlo desde las vistas, utilizamos la función:

```php
$this->Element('nombreElemento');
```

## Mandar datos a un elemento

Si queremos mandar datos a un elemento, tenemos que hacerlo a través de un **array**. Para ello, generamos el array dentro de la vista que llama al elemento, y lo pasamos como parámetro de la función anterior:

```php
$this->Element('nombreElemento', [$arrayDatos])
```

Ahora podemos acceder a la información de este array desde el elemento.