# CLI

[Documentation](<https://getcomposer.org/doc/03-cli.md>)

Listado de comandos disponibles desde Composer.

## search

### Buscar packages

Para buscar un package en concreto, utilizamos el comando `search`

```
composer search <nombrePackage>
```

Esto nos mostrará una lista de todos los packages con un nombre similar al indicado, **en los repositorios que tengamos habilitados para nuestro proyecto**. Si hemos especificado que un proyecto utilice únicamente repositorios privados, sólo buscará ahí.

## show

### **Listar packages disponibles**

Podemos ver un listado de los paquetes disponibles dentro de un repositorio mediante el comando `composer show`. Este comando cuenta con algunas opciones para refinar los resultados:

```
composer show -a
```

Muestra packages disponibles (availables)

```
composer show --all
```

Muestra todos los packages (platform, availables, installed)

### Ver información sobre un package

Gracias al mismo comando `composer show` , podemos ver toda la información de un package. Para ello, indicamos el nombre del package después de show.

```
composer show gekyzo/tools
```
Nos mostrará datos similares a estos:


```bash
name     : gekyzo/tools
descrip. : Best tools in the market
keywords :
versions : * 1.0.0
type     : library
source   : [git] https://github.com/Gekyzo/tools.git ca2f2e57f3e214186c6436cb2296609b76f8e325
dist     : [zip] https://api.github.com/repos/Gekyzo/tools/zipball/ca2f2e57f3e214186c6436cb2296609b76f8e325 ca2f2e57f3e214186c6436cb2296609b76f8e325
path     : C:\LocalServer\php\composer\require\vendor\gekyzo\tools
names    : gekyzo/tools

support
source : https://github.com/Gekyzo/tools/tree/v1.0.0
issues : https://github.com/Gekyzo/tools/issues
```
