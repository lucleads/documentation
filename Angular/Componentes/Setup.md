# Componentes

Los componentes son, como su nombre indica, las piezas que construyen la aplicación.

Cada componente se constituye de cuatro elementos:

1. Vista: archivo .html
2. Estilos: archivo .css (o .scss | .sass | .less)
3. Lógica: archivo .ts
4. Tests: archivo .spec.ts

La aplicación cuenta también con una **hoja de estilos global** donde podemos indicar aquellas reglas que queramos que funcionen a lo largo de todos los componentes.
Este archivo se encuentra en la ruta `/src/styles.css` (tendrá la extensión que hayamos indicado a la hora de crear el proyecto)

## Crear un componente

Podemos generar un nuevo componente desde la consola con el comando:

```bash
ng generate component <nombreComponente>

// Shorthand
ng g c <nombreComponente>
```

Este comando nos creará los cuatro elementos que hemos indicado antes, además de incorporarlo en el archivo de lógica principal de la aplicación **`app.module.ts`**. 

## Incluir un componente

Podemos incluir un componente dentro de otro llamándolo por su selector.

Si hemos creado por ejemplo un componente `nav` con el selector `app-nav`, y queremos incluirlo en la página principal `app-component.html`, sólo tenemos que escribir `<app-nav></app-nav>`.