# Cómo crear un repositorio privado de Packages

Composer nos permite utilizar un repositorio privado de packages además de aquellos que se encuentran disponibles en Packagist.

Esto nos permite crear nuestros propios packages y publicarlos en un entorno privado, donde podemos reutilizarlos sin necesidad de que se encuentren expuestos en internet.

Para hacer esto, debemos **montar un Satis**.

[Documentación](<https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md#satis>)

## Instalar Satis

Satis funciona como una página web equivalente a Packagist. Para poder utilizarla debemos montarla en un entorno web con apache y PHP.

En primer lugar, clonamos [su repositorio](<https://github.com/composer/satis>) en la carpeta donde queramos alojar la web.

## Incluir paquetes en Satis

**Satis require de un archivo llamado** `satis.json` alojado en la raíz, que equivaldría al `packages.json` de cualquier repositorio `"type": "composer"` contiene toda la información de los paquetes que aloja.

Un ejemplo de este archivo sería este:

```json
{
    "name": "My Private Repository",
    "homepage": "https://localhost/composer/satis/web/",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/gekyzo/tools"
        }
    ],
    "require-all": true
}
```

Podemos incluir packages incluyéndolos manualmente en este archivo con la estructura indicada, o desde la línea de comandos con:

```bash
bin/satis add https://github.com/gekyzo/tools
```

## Construir la web

Una vez hemos indicado qué packages va a alojar nuestro repositorio privado, tenemos que construir su web desde el comando de consola:

```bash
bin/satis build satis.json ./web
```

Esto nos creará una web simple dentro del directorio `/web`, desde el que podemos navegar y ver los packages.
