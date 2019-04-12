[Docs](<https://angular.io/guide/ngmodules>)

# Módulos

```js
@NgModule
```

Un módulo dispone de un **contexto para sus componentes,** recogen código relacionado.

Pueden almacenar componentes, servicios, providers y todo el código que esté relacionado en el **ámbito** del módulo. 

## Propiedades

Las propiedades más importantes que puede contener un módulo son:

- declarations: componentes, directivas y pipes.
- exports: el subset de declaraciones que deben ser visibles y utilizables por las templates desde otro NgModule.
- imports: otros módulos necesarios por el actual para generar las templates.
- providers: servicios que este módulo contribuye a la colección global de la aplicación (están disponibles desde cualquier punto). **Es más recomendable especificar los providers a nivel de componente**.
- bootstrap: la vista principal. Almacena todas las demás vistas. **Únicamente el módulo raíz debe tener seteada la propiedad bootstrap.**

## Ejemplo

```js
// /src/app/app.module.ts
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
@NgModule({
  imports:      [ BrowserModule ],
  providers:    [ Logger ],
  declarations: [ AppComponent ],
  exports:      [ AppComponent ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
```

## NgModules y sus componentes

![Component compilation context](img/compilation-context.png)

**Un componente y sus plantillas juntas definen una vista**. Es posible también que un componente esté formado por otros, definiendo así una jerarquía.

![View hierarchy](img/view-hierarchy.png)

