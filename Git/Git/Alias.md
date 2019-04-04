# Alias

Podemos generar nuestros propios comandos de Git con los alias que configuremos de forma global.

```bash
git config --global alias.co checkout
```

Este comando nos permite escribir en la consola `git co` en lugar de `git checkout` y realiza la misma acción.

Podemos crear alias más complejos, que realicen varias acciones a la vez.

```bash
git config --global alias lg "log --pretty=format:'%h %ad | %s%d [%an]' --graph --date=short"
```

Gracias a este alias, podemos dibujar el grafo de forma visual escribiendo simplemente `git lg`.

Podemos crear también alias más complejos que realicen varias acciones a la vez:

```bash
git config --global alias.ac '!git add -A && git commit'
```

Gracias a este alias, podemos hacer `add` de todos los archivos, y `commit` escribiendo únicamente `ac`. En este caso, podemos indicar también el parámetro `-m` que será el mensaje del commit.

Todos estos alias se almacenan en el **archivo de configuración de Git**, que se almacena en `C:\\Users\<Username>\.gitconfig`