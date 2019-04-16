[Docs](<https://angular.io/guide/ngmodules>)

# Importar componentes

Para importar componentes dentro de módulo, debemos seguir estos pasos:

1. Importarlos en el inicio del componente:

```js
import { HeroesComponent } from './heroes/heroes-compoent ';
```

2. Declararlos **dentro del decorator del módulo**, en el array de `declarations`

```js
@NgModule({
    declarations: [
        HeroesComponent
    ]
})
```

