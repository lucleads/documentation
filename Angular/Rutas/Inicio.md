# Rutas

Las rutas de la aplicación se manejan desde el archivo `src/app-routing.module.ts`

# Crear una nueva ruta

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

