[Docs](<https://book.cakephp.org/3.0/en/migrations.html#seed-seeding-your-database>)

# Seed

**Seed** es el nombre que recibe el proceso por el cual introducimos datos por defecto en una tabla.

Por ejemplo, si queremos que la tabla `Users` cuente con ciertos registros de administradores.

Los seeds se almacenan en un archivo `php` dentro de la ruta `/config/Seeds`

Para crear un seed, utilizamos el comando:

```bash
bin/cake bake seed --data <tableName> 
```

Si queremos almacenar todos los datos actuales en la BD, debemos ejecutar este comando una vez por cada tabla.

## Aplicar un seed

Después de aplicar una migración, podemos realizar seed en nuestra BD a través del subcomando `seed`.

```bash
bin/cake bake migrations seed
```

Si no indicamos ninguna opción, este comando **nos insertará todos los datos de todas las tablas** que tengamos creados dentro de `Seeds`.

SI queremos que haga seed únicamente de una tabla:

```bash
bin/cake migrations seed --seed UsersSeed
```

## Opciones

Podemos definir ciertas opciones dentro del comando de generación del seed. 

### limit

Si queremos que sólo se exporten un determinado número de registros:

```bash
--limit 10
bin/cake bake seed --data --limit 10 Articles
```

