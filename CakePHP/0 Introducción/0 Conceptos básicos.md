[Docs](https://book.cakephp.org/3.0/en/intro.html)

# CakePHP 3.7

CakePHP requiere de Composer para su instalación y funcionamiento.

## Conventions

CakePHP aporta una estructura de organización básica que cubre nombres de clases, de archivos, tablas de base de datos y otras convenciones.

## Model

El modelo es la parte que se encarga de la lógica de la aplicación.

## Views

Las vistas en CakePHP sirven para generar la representación del modelo de datos.

Podemos generar una vista en distintos formatos, desde HTML, hasta JSON, CSV o XML.

## Controller

El Controlador maneja las peticiones del usuario. Es responsable de generar las respuestas, junto con la ayuda de las Vistas y los Modelos.

Las convenciones de Cake definen que si un controlador necesita cargar una vista, se haga mediante la función `set()`

## Ciclo de petición

![](https://book.cakephp.org/3.0/en/_images/typical-cake-request.png)