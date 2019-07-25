[Documentación](https://book.cakephp.org/3.0/en/migrations.html)

# Migrations

Las migraciones nos permiten realizar cambios en el esquema de nuestra aplicación escribiendo archivos PHP que pueden ser almacenados utilizando un sistema de control de versiones.

Básicamente nos permiten **guardar tanto la estructura** de nuestra BD (tablas, filas que la componen y sus tipos, restricciones, claves...), **como cualquier cambio** que realicemos sobre un registro (inserción en una tabla, modificación...)

Al registrar todas estas acciones en un archivo `php`, nos permite poder llevar un control de versiones sobre la información que utiliza nuestra aplicación a lo largo del tiempo.

CakePHP nos permite utilizar distintos comandos a través de sus comandos de **bake**.

Los archivos de migración se almacenan en la ruta `/config/Migrations`

## Guardar el estado actual de la BD

Si queremos guardar una copia del estado actual de la base de datos (tablas, relaciones..) podemos ejecutar este comando:

```bash
bin/cake bake migration_snapshot <Nombre>
```

Si lo que queremos es guardar la información de esa BD, debemos [generar seeds](Copia de los datos.md).

## Aplicar una migración

Si queremos aplicar una migración para ver cómo se encuentra el Schema de la BD en determinado punto, podemos hacerlo con el comando:

```bash
bin/cake migrations migrate <migrationName>
```

### Opciones

Para seleccionar qué migración vamos a utilizar, debemos indicarla mediante alguna de las siguientes opciones:

#### -t

Indicamos el timestamp de la migración.

```bash
bin/cake migrations migrate -t 20190416114127
// Importará el archivo de migración: 20190416114127_version011.php
```

#### -v

Indicamos la versión de la migración.

```bash
bin/cake migrations migrate -v version011
// Importará el archivo de migración: 20190416114127_version011.php
```

## Diferencia entre migraciones

Podemos ver la diferencia entre el estado actual de nuestra BD y una determinada migración (qué tablas nuevas hemos creado, que campos hemos insertado en tablas que ya existían, etc).

Para ello, generamos un archivo diff con el siguiente comando:

```bash
bin/cake bake migration_diff -v <diffName>
```