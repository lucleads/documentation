# Objetivo

Sass es un lenguaje de programación preprocesado que se compila en archivos con extensión `.css`. Ya que al compilar generamos una hoja CSS, es totalmente compatible con cualquier web.

Incorpora funcionalidades extra en las clásicas hojas de estilo `.css`, como el uso de variables, anidación de selectores, herencia...

Gracias a Sass podemos **despiezar una hoja** de estilos en distintos trozos que vamos a importar y compilar, y controlar de esta forma el resultado de una forma mucho más definida.

También cuenta con funcionalidades para reutilizar código y evitar así repetir clases (DRY).

## Ventajas frente a CSS

Algunas de las nuevas características que podemos utilizar en Sass que no se encuentran disponibles en CSS nativo son:

- [Comentarios](comentarios.md)
- [Variables](variables.md) (y [Mapas](mapas.md))
- [Anidación](anidacion.md) (*nesting*): Jerarquía
- [Import](import.md) y [Parciales](partials.md)
- [Mixins](mixins.md): vendor prefixes
- [Herencia ](extends.md)(*extends*)
- [Operaciones](operaciones.md): se compila el resultado de la operación.
- [Funciones](funciones.md): compilar ciertas reglas en base al resultado de funciones.
