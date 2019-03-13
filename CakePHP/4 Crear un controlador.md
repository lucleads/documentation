[Quickstart](https://book.cakephp.org/3.0/en/quickstart.html#cms-tutorial-creating-the-articles-controller)

# Controladores

Los controladores de CakePHP se encargan de manejar las peticiones HTTP y de ejecutar la lógica del negocio con los métodos de los modelos.

Se almacenan dentro de la carpeta `src/Controller`, y un controlador básico debe parecerse a:

```php
<?php

namespace App\Controller;

class FoldersController extends AppController
{
}
```

Por convención, los controladores se nombrarán como **Nombre + Controller**.

Vamos a crear el método para listar todas las carpetas:

```php
 public function index()
    {
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Folders->find());
        $this->set(compact('folders'));
    }
```

