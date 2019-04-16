# Rutas

Las rutas de la aplicación se manejan desde el archivo `src/app-routing.module.ts`

==El orden de las rutas en la configuración importa==. El enroutador sigue una estrategia de first-match wins, de forma que la primera ruta que coincide es la que se muestra.

### Router Outlet

La directiva Router Outlet se utiliza en las vistas (template) para indicar a partir de dónde se debe mostrar la información de salida de un componente.

```html
<router-outlet></router-outlet>
```

## Crear una nueva ruta

En primer lugar, debemos incluir el componente al que va a apuntar la ruta:

```typescript
import { HomeComponent } from './home/home.component';
```

Después, incluimos la ruta dentro de la constante **Routes**, indicando el **path** y **component** que va a utilizar.

**:star: No es necesario indicar la barra root dentro de la ruta.**

```typescript
const routes: Routes = [
  { path: '', component: HomeComponent }
];
```

Separamos cada objeto ruta con una coma dentro del array Routes.

```typescript
const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'contact', component: ContactComponent },
];
```
Los parámetros se indican dentro de una ruta con el prefijo `:`. Por ejemplo:

```js
{ path: 'ver/:id/:name', component: ProductsComponent }
/* Esta ruta podrá ser:
/ver/5/cazuela
/ver/23/sarten
/ver/36/zapatilla
*/
```

## Crear rutas desde un módulo

Podemos crear rutas desde el `Router` principal, o podemos crearlas a nivel de cada módulo.

Para hacer lo segundo, debemos seguir estos pasos:

1. Importar la clase Router desde @angular.

```js
import { RouterModule, Routes } from '@angular/router';
```

2. Dentro del **decorator** del módulo (`@NgModule`), enlazar la importación:

```js
@NgModule({
	imports: [
		RouterModule.forRoot(routes)
	]
})
```

3. Encima del decorator del módulo, crear una constante con las rutas propias del módulo.

```js
const routes: Routes = [
  { path: 'detail/:id', component: HeroDetailComponent },
  { path: 'heroes', component: HeroesComponent }
];
```

Con estos pasos habremos añadido a las rutas de la aplicación, las rutas específicas que proporciona el módulo.

## Debugear

Podemos debugear las rutas por las que pasa nuestra aplicación gracias a la opción `enableTracing` cuando realizamos el import en la declaración del módulo. Esta opción nos permite hacer `console.log` de cada ruta por la que pasa la aplicación.

```js
@NgModule({
  imports: [ RouterModule.forRoot(routes, { enableTracing: true } ) ],
  exports: [ RouterModule ]
})
```

## Mandar información

Desde la declaración de la ruta podemos indicar una tercera variable que se llama `data`, donde pasaremos cierta información al componente de la ruta.

```js
{
	path: 'heroes',
	component: HeroListComponent,
	data: { title: 'Heroes List' }
},
```

