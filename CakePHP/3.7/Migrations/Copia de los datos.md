[Docs](<https://book.cakephp.org/3.0/en/migrations.html#seed-seeding-your-database>)

# Seed

**Seed** es el nombre que recibe el proceso por el cual introducimos datos por defecto en una tabla.

Por ejemplo, si queremos que la tabla `Users` cuente con ciertos registros de administradores.

Los seeds se almacenan en un archivo `php` dentro de la ruta `/config/Seeds`

## Crear un seed con los datos actuales de una tabla

Para crear un seed, utilizamos el comando:

```bash
bin/cake bake seed --data <tableName> 
```

Si queremos almacenar todos los datos actuales en la BD, debemos ejecutar este comando una vez por cada tabla.

## Aplicar todos los seed

Después de aplicar una migración, podemos realizar seed en nuestra BD a través del subcomando `seed`.

```bash
bin/cake migrations seed
```

Si no indicamos ninguna opción, este comando **nos insertará todos los datos de todas las tablas** que tengamos creados dentro de `Seeds`.

## Aplicar sólo un seed

SI queremos que haga seed únicamente de una tabla:

```bash
bin/cake migrations seed --seed UsersSeed
```

## Aplicar seed desde una subcarpeta

También podemos ejecutar un seed desde una subcarpeta con la opción `--source`, incluyendo el propio nombre de la carpeta Seeds.

```bash
bin/cake migrations seed --source Seeds/dev
```

## Aplicar seeds en orden

Si queremos ejecutar una serie de seeds en orden, lo más efectivo es que creemos un nuevo seed llamado main, donde ejecutemos los demás, y que después mediante los comandos anteriores ejecutemos únicamente este nuevo seed.

```php
class MainSeed extends AbstractSeed
{
    public function run()
    {
        $this->call('GroupsSeed');
        $this->call('UsersSeed');
        $this->call('CategoriesSeed');
        $this->call('DocumentsSeed');
        $this->call('DocumentsCategoriesSeed');
    }
}
```

```bash
bin/cake migrations seed --source Seeds/{ruta} --seed MainSeed
```

## Opciones

Podemos definir ciertas opciones dentro del comando de generación del seed. 

### limit

Si queremos que sólo se exporten un determinado número de registros:

```bash
--limit 10
bin/cake bake seed --data --limit 10 Articles
```

