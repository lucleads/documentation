# Instalación de PUG en Windows

En primer lugar, instalamos mediante Node.js el packete de pug (antiguo Jade) de forma global con los siguiente comandos:

```bash
npm install -g pug
npm install -g pug-cli
```

El paquete CLI lo debemos instalar de forma global si queremos utilizar los comandos de consola que pug nos proporciona.

Una vez instaladas ambas dependencias, podemos compilar todos los ficheros `.pug` de una carpeta a `.html` con el comando

```bash
pug index.pug
```

Esto nos compilará el archivo en la misma carpeta, pero si queremos tener en una carpeta los archivos `.pug` y en otra distinta el output en formato `.html`, debemos utilizar las siguientes opciones

```bash
pug carpetaPug --pretty --out carpetaHTML
```

Ejemplo:

```bash
pug pug --pretty --out public
```

Esto nos compilará todos los ficheros de la carpeta **pug** dentro de la carpeta **public**.

Podemos incluir rutas en este comando

```bash
pug public/pug --pretty --out public/html
```

## Watch folder

Pug nos permite hacer un watch sobre una carpeta, y compilar automáticamente los cambios que ocurran en dicha carpeta.

```bash
pug -w public/pug --pretty --out public/html
```

