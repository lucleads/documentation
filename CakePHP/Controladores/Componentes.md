# Componentes

Un componente es un paquete de lógica que se comparte a través de controladores.

## Crear un componente

Para crear un componente, utilizamos el comando de consola 

```
bin/cake bake component nombreDelComponente
```

Esto nos creará el archivo `.php` de forma automática dentro de la ruta`/src/Controller/Component`

Ahora podemos crear nuestras propias funciones dentro de dicho archivo.

## Cargar un componente

Dentro del controlador donde queramos cargarlo, debemos incluirlo dentro de la función `initialize()`

```php
public function initialize()
{
    parent::initialize();        
    $this->loadComponent('MiComponente');
}
```

Ahora podemos llamar a todas las funciones que hayamos definido en nuestro componente de la siguiente forma:

```php
$this->MiComponente->metodo();
```

## Cargar un componente dentro de otro

Un componente puede utilizar funciones declaradas en otro u otros.

Para ello debemos cargarlos dentro de la variable **$components**.

```php
class MiComponente extends Component
{
    // Lista de componentes requeridos
    public $components = ['ComponenteRequeridoA', 'ComponenteRequeridoB'];
}
```

Ahora, para utilizar los métodos declarados en esos componentes utilizamos la misma metodología que a la hora de utilizarlo desde un controlador.

```php
$this->ComponenteRequeridoA->metodo();
```

