[Docs](<https://cli.angular.io/>)

# CLI

La interfaz de línea de comandos de Angular (CLI: command line interface) nos permite generar aplicaciones de forma rápida, sencilla, y **cumpliendo las mejores prácticas** definidas por Angular.

## Requisitos

Para poder utilizar CLI, debemos tener instalado en nuestro sistema **Node.js**.

Desde la consola de node, ejecutamos:

```bash
npm install -g @angular/cli
```

Cuando se complete su instalación, podremos utilizar los comandos propios de angular. Estos comandos están precedidos por `ng`.

## Comandos

### ng n my-app-name | ng new my-app-name

Este comando nos inicializa un nuevo proyecto Angular dentro de la carpeta `my-app-name`.

### ng v | ng version

Nos devuelve la información sobre la versión de Angular CLI que tenemos instalado en el sistema.

### ng help

Nos muestra una lista con todos los comandos posibles y un resumen sobre su utilidad.

### ng g | ng generate

Crea un nuevo componente, servicio, directiva... de angular

### ng s | ng serve

Inicializa un servidor con nuestro proyecto para que lo podamos ver desde el navegador.

### ng t | ng test

Lanza los tests que hayamos generado.