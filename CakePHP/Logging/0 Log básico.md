# Registro de eventos (Log)

[Documentación: Logging](https://book.cakephp.org/3.0/en/core-libraries/logging.html)

La herramienta **Log** nos permite almacenar información útil sobre distintos eventos durante el uso de la aplicación.

Los archivos de Log se almacenan en la ruta `/logs`, y para guardar un registro concreto la sintaxis es:

```php
$this->log('Mensaje', 'nivel');
```

## Configuración

La **configuración de las opciones de Log** se define en el archivo `/config/app.php` > `/* Configures logging options */`

Dentro de esta configuración, podemos definir el funcionamiento de la función. Desde qué niveles va a registrar cada archivo, sus scopes, hasta la [creación de nuevos archivos de log](#crear-nuevos-archivos-de-log).

Una misma función `log()` puede escribir en varios archivos de registro a la vez. Esto se define según el valor de los **levels** que hayamos asignado a cada archivo.

Es decir, si en la configuración establecemos que los logs de `debug` y `general` registren los eventos que indiquemos con el level `'info'`, cada vez que llamemos a dicho nivel, se escribirá el mensaje en los dos archivos.

### Crear nuevos archivos de log

Podemos crear nuestros propios archivos de log para almacenar determinada información (por ejemplo, cada vez que se ejecute una consulta SQL, o cada vez que se suba un archivo al servidor).

Para crear un nuevo archivo de log, utilizaremos la siguiente estructura:

```php
'debug' => [
    'className' => 'Cake\Log\Engine\FileLog',
    'path' => LOGS,
    'file' => 'debug',
    'url' => env('LOG_DEBUG_URL', null),
    'scopes' => false,
    'levels' => ['notice', 'info', 'debug'],
]
```

Dentro de este array de opciones, podemos copiar y pegar según nos interese.

Debemos jugar con los [level](#niveles) y [scopes](#scopes) para concretar el tipo de mensajes que queremos almacenar en cada archivo.

### Configurar el scope

Con esta propiedad podemos determinar el ámbito de los mensajes que vamos a almacenar en cada archivo.

Por defecto está asignado como `false`, pero podemos crear los valores que nos interesen dentro de un array.

```php
'scopes' => ['compras', 'uploads'],
```

## Niveles

CakePHP soporta los niveles de log definidos [estándar en POSIX](https://en.wikipedia.org/wiki/Syslog#Severity_level).

- Emergency: system is unusable
- Alert: action must be taken immediately
- Critical: critical conditions
- Error: error conditions
- Warning: warning conditions
- Notice: normal but significant condition
- Info: informational messages
- Debug: debug-level messages

El nivel del log se define como la segunda variable de la función `log()`.

```php
$this->log('mensaje', 'info');
$this->log('mensaje', 'debug');
$this->log('mensaje', 'error');
```

### Crear nuevo nivel de log

:warning: **NO DEBEMOS CREAR NUEVOS NIVELES DE LOG**

En su lugar, ver [Crear nuevo scope de log](#crear-nuevo-scope-de-log).

## Scopes

Los scopes o ámbito, sirven para determinar definir con más exactitud el nivel de cada registro.

Por defecto, está definido como `false`, y debemos manternerlo así a no ser que queramos [crear nuevos scopes](#crear-nuevo-scope-de-log).

### Crear nuevo scope de log

Si queremos registrar ciertos eventos bajo un scope determinado, debemos hacer dos cosas:

1. Definir dicho scope dentro de la config del archivo de registro.
2. [Definir dicho scope cada vez que hagamos log](#Definir-el-scope-de-un-registro)

### Definir el scope de un registro

Ya que el scope es un *subnivel* de los niveles del registro, para escribirlos utilizamos una sintaxis diferente.

Para registrar un evento bajo un determinado scope, debemos llamar a la función `Log` con el siguiente formato:

```php
// Syntaxis
Log::level('Mensaje', ['scope']);

// Ejempos
Log::info('Contenido del mensaje', ['queries'])
Log::error('Contenido del mensaje', ['queries', 'compras'])
```

Como vemos, se pueden indicar varios scopes dentro del array.

