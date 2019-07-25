# Bake tests

Podemos generar los tests relativos a cada elemento de nuestro código con el siguiente comando:

```bash
bin/cake bake test <type> <name>
```

Donde `type` es alguno de los siguientes elementos, y `name` es el nombre del elemento del cual queremos generar los tests.

1. Entity
2. Table
3. Controller
4. Component
5. Behavior
6. Helper
7. Shell
8. Cell

==Debemos generar tests únicamente de los controladores de los que podamos generar su fixture==

Esto significa, no debemos generar tests de un controlador como AppController.php ya que no podemos generar su fixture (no existe ninguna tabla en la BD que se llame App)

## Fixtures

[Documentation](<https://book.cakephp.org/3.0/en/development/testing.html#fixtures>)

Una vez hayamos generado todos los archivos de test de los controladores, lo más probable es que estos requieran de datos de prueba para poder funcionar. Para ello utilizamos los **fixtures** que son precisamente eso, archivos de PHP con datos de muestra.

Para generar fixtures de cada tabla, utilizamos el comando:

```bash
bin/cake bake fixture <name>
```

Donde name es el nombre de la tabla de la cual queremos generar el archivo de prueba. Podemos generar todos los fixtures mediante el comando simplificado:

```bash
bin/cake bake fixture all
```

Una de las ventajas que nos ofrecen estos archivos es el hecho de que no alteran los datos reales de nuestra aplicación, ya que se utilizan únicamente durante los tests. Además de que podemos ejecutar nuestros tests sin la necesidad de que tengamos datos reales en nuestra aplicación.

Dentro del archivo `/config/app.php` podemos indicar la información de conexión a la base de datos para las pruebas. Puede llamarse igual que la BD original, con el sufijo **_test**.

El proceso que lleva a cabo Cake con ellos durante un test es el siguiente:

1. Crea tablas temporales con cada uno de los fixtures que requiere el test.
2. Incorpora los datos de prueba a las tablas temporales.
3. Ejecuta los tests.
4. Vacía los datos de las tablas.
5. Elimina las tablas.