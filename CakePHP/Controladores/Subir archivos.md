# Subir archivos

Si queremos subir archivos a través de un formulario de una vista, debemos indicar  en primer lugar, que el formulario va a ser de tipo `file`.

```php
<?= $this->Form->create($image, ['type' => 'file']) ?>
```

Después, debemos indicar en el input que corresponda el tipo file.

```php
<?= $this->Form->control('image', ['type' => 'file', 'class' => 'form-control']) ?>
```

Ahora manejaremos la información de la variable `$this->request->getData();` desde el controlador para realizar las acciones necesarias. Dentro de esta variable se encuentra la información del archivo que hayamos incluido en el formulario (tmp_name, error, name, type, size...)