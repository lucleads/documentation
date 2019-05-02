# Introducción

[Documentation](<https://getcomposer.org/doc/00-intro.md>)

## Descripción

Composer es una herramienta para la **gestión de dependencias** en PHP.
Permite declarar las librerías que requiere un proyecto para su funcionamiento, y las gestiona (instalar/desinstalar) por nosotros.

A la hora de instalarlas dentro del proyecto, por defecto crea la carpeta `vendor`, donde incluye todos los archivos necesarios, por defecto NO instala nada de forma global.

**Es recomendable que incluyamos dentro de .gitignore esta carpeta.** 

Suponiendo por tanto que tengamos un proyecto que depende de ciertas librerías, y que algunas de esas librerías requiren de otras para su funcionamiento, gracias a composer podemos;

Declarar las librerías (y su versión concreta) para el proyecto, y de forma automática gestionará todas esas librerías y sus dependencias.

Los repositorios por defecto desde los que descarga los paquetes se encuentran en [Packagist](<https://packagist.org/>).

## Instalación

Cuenta con un ejecutable que debemos descargar desde su página web.