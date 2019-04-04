# Servicios

Un servicio nos permite manejar datos a través de la aplicación.

## Crear un servicio

Utilizamos el comando de Angular:

```bash
ng g s <nombreServicio>
// Equivale a:
ng generate service <nombreServicio>
// Ejemplo:
ng g s data
```

Los nuevos servicios se generan dentro de la ruta `src/app`.

## Función / Datos

Las funciones o variables del servicio se definen dentro de la clase que se exporta.

Podemos por ejemplo, crear una función que después llamaremos en los componentes:

```typescript
clicked():void {
    return console.log('You clicked!');
}
```

Ahora, para utilizar esta función desde un controlador, lo hacemos de la siguiente forma:

1. Importamos el servicio:

   ```typescript
   import { nombreServicio } from 'rutaServicio';
   // Ejemplo:
   import { DataService } from '../data.service';
   ```

2. Creamos una inyección de dependencia al servicio desde el constructor:

   ```typescript
   constructor(private servicio: Servicio) { };
   // Ejemplo:
   constructor(private data: DataService) { };
   ```

3. Llamamos a la función del servicio:

   ```typescript
   funcionDelControlador(){
       this.servicio.funcionDelServicio();
   }
   // Ejemplo:
   funcionDelControlador() {
       this.data.clicked();
   }
   ```

Ahora, cada vez que llamemos a la función del controlador, esta nos invocará a la función del servicio, que en este ejemplo nos hace un sencillo `console.log`.