# Dependencias

[Documentation](<https://getcomposer.org/doc/03-cli.md>)

Las dependencias son todas aquellas librerías que necesitemos para que nuestro proyecto funcione correctamente.

## composer.lock

Este archivo se encarga de fijar la versión de los paquetes a una en concreto, de forma que siempre que realicemos una instalación tendremos exactamente la misma versión de todas las librerías.

Esto nos permite trabajar siempre con la misma versión de librerías entre todos los miembros del equipo y desde todos los dispositivos donde instalemos el proyecto.

También nos asegura que no se va a "romper" un proyecto porque aparezcan cambios inesperados en una dependencia.

Si realizamos una instalación sin contar con este archivo, composer descargarla automáticamente la última versión para cada uno de los paquetes que hayamos indicado, y generará el archivo `composer.lock`.

## Iniciar un package

```bash
composer init
```

### Opciones

`--name`

`--description`

`--author`

`--type`

`--homepage`: dirección de la web del proyecto.

`--require` : paquetes necesarios en el entorno de producción.

`--require-dev`: paquetes necesarios en el entorno de desarrollo.

`--stability`

`--license`

`--repository`: ruta del repositorio personalizado.

## Incluir

Podemos incluir un paquete de forma genérica (sin indicar qué versión queremos). Esto incluirá la última versión de dicho paquete.

```bash
composer require <packageName>
```

Ejemplo:

```bash
composer require monolog/monolog
```

También podemos indicar la versión, después del nombre.

```bash
composer require monolog/monolog 1.0
composer require monolog/monolog ^1.0
composer require monolog/monolog >1.0
```

## Instalar

```bash
composer install
```

Este comando instalará (descargará) todas las dependencias que hayamos indicado en el archivo `composer.json` dentro de la carpeta */vendor* de nuestro proyecto.

## Desinstalar

```bash
composer remove <packageName>
```

## Actualizar

Como hemos indicado anteriormente, el archivo `composer.lock` se encarga de fijar la versión de las dependencias instaladas en un proyecto. Si queremos **actualizarlas a sus últimas versiones disponibles**, podemos utilizar este comando.

### Actualizar todas las dependencias

Este comando actualizará todas las dependencias indicadas en el archivo `composer.json` a sus últimas versiones disponibles en los repositorios.

```bash
composer update
```

### Actualizar sólo una dependencia

Indicamos su nombre después del comando `update`:

```bash
composer update <packageName>
```

Ejemplo:

```bash
composer update monolog/monolog
```

