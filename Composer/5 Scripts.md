# Scripts

[Documentation](<https://getcomposer.org/doc/articles/scripts.md>)

Desde Composer podemos ejecutar scripts de las dependencias de nuestro proyecto.

==Composer no permite ejecutar scripts como una consola interactiva==

[Issue](<https://github.com/composer/composer/issues/5856>)

Esto significa, **sólo podemos ejecutar scripts que se encuentren en sus dependencias**, pero no podremos hacer scripts como `bin/cake server`, ya que esto no se trata de una dependencia.

Se definen dentro del grupo `"scripts"`, y podemos definir su descripción en el grupo `"scripts-descriptions"`.

```json
"scripts": {
    "test": "phpunit --colors=always"
},
"scripts-descriptions": {
    "test": "Launch all defined test"
}
```

## Ejecutar un script

Para ejecutar cualquier script, podemos hacerlo através de los siguientes comandos:

```
composer <nombreScript>
composer run <nombreScript>
```

## Listar todos los scripts

Podemos ver todos los scripts definidos junto a sus descripciones mediante este comando:

```
composer run --list
```

