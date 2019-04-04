# Explicación de las ramas

<img src="/img/workflow.jpg" style="zoom: 70%">

El flujo de trabajo definido por GitFlow cuenta con 5 ramas, cada una de ellas ideada para una función específica:

1. **develop**: La rama principal donde iremos desarrollando el código de nuestra aplicación.

   *No se desarrolla directamente en esta rama. Esto se hace a través de features.*

2. **feature**: rama en la que se desarrolla cada nueva característica de la aplicación. 

   *Nace desde develop, y cuando se completa se mergea en develop.*

3. **master**: rama pública en la que tendremos la versión estable de la aplicación.

   *No se desarrolla directamente en esta rama. Se implementa aquí a través de releases o hotfixes.*

4. **release**: rama donde se ultiman detalles antes de publicar.

   *Nace desde develop, y cuando se completa se mergea tanto en develop como master.*

   *Crea una etiqueta con el nombre de la versión lanzada.*

5. **hotfix**: rama en la que se corrigen bugs o fallos críticos que existan en la última versión release de la aplicación.

   *Nace desde la última release, y cuando se completa se mergea tanto en develop como master.*

En todas estas acciones, podemos configurar GitFlow para que haga **rebase en lugar de merge.**