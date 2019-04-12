[Quickstart](https://book.cakephp.org/3.0/en/quickstart.html#create-the-view-action)

# Vistas

Implementamos la función `view` para que podemos ver la información de una de las carpetas.

```php
public function view($slug = null)
    {
        $folder = $this->Folders->findBySlug($slug)->firstOrFail();
        $this->set(compact('folder'));
    }
```

En este ejemplo, utilizamos la función de CakePHP `findBySlug`, que nos devolverá el resultado de una búsqueda en la tabla por la columna que se llame `slug`.

## Crear el template

Se encuentra en la ruta `src/Template/Folders/view.ctp`

```php+HTML
<h1><?= h($folder->name) ?></h1>
<p><?= h($folder->alias) ?></p>
<p><small>Fecha de creación: <?= $folder->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $folder->slug]) ?></p>
```

## Añadiendo artículos

Implementamos la funcionalidad `add` en el controlador `FoldersController`.

```php
public function add()
    {
        $folder = $this->Folders->newEntity();
        if ($this->request->is('post')) {
            $folder = $this->Folders->patchEntity($folder, $this->request->getData());
            $folder->user_id = 1;

            if ($this->Folders->save($folder)) {
                $this->Flash->success(__('Your folder has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your folder.'));
        }
        $this->set('folder', $folder);
    }
```

Creamos la plantilla en `src/Template/Folders/add.ctp`:

```php+HTML
<h1>Añadir Carpeta</h1>
<?php
    echo $this->Form->create($folder);    
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('name');
    echo $this->Form->control('slug');
    echo $this->Form->control('alias');    
    echo $this->Form->button(__('Crear Carpeta'));
    echo $this->Form->end();
?>
```

La función `$this->Form->create`, equivale a crear un nuevo `<form method="post" action="/articles/add">`, y la función `$this->Form->control` equivale a crear campos en el formulario.