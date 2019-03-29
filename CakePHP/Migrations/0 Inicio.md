# Migrations

[Documentación](https://book.cakephp.org/3.0/en/migrations.html)

Las migraciones nos permiten realizar cambios en el esquema de nuestra aplicación escribiendo archivos PHP que pueden ser almacenados utilizando un sistema de control de versiones.

Básicamente nos permiten **guardar tanto la estructura** de nuestra BD (tablas, filas que la componen y sus tipos, restricciones, claves...), **como cualquier cambio** que realicemos sobre un registro (inserción en una tabla, modificación...)

Al registrar todas estas acciones en un archivo `php`, nos permite poder llevar un control de versiones sobre la información que utiliza nuestra aplicación a lo largo del tiempo.

CakePHP nos permite utilizar distintos comandos a través de sus comandos de **bake**.

Los archivos de migración se almacenan en la ruta `/config/Migrations`

## Guardar el estado actual de la BD

Con el siguiente comando podemos generar una copia del estado actual de la BD y su información:

```bash
bin/cake bake migration_snapshot Nombre
```

