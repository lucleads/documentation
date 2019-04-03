[Quickstart](https://book.cakephp.org/3.0/en/quickstart.html#create-the-article-list-template)

# Plantillas (Layout)

Una vez nuestro controlador tiene el método para listar todos los Folders de la base de datos, vamos a crear la plantilla que debe cargar.

Las plantillas se encuentran en la ruta `src/Template`, bajo el nombre del controlador al que corresponden, en este ejemplo será `src/Template/Folders`

```php+HTML
<h1>Folders</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Created</th>
    </tr>
    
    <?php foreach ($folders as $folder): ?>
    <tr>
        <td>
            <?= $this->Html->link($folder->name, ['action' => 'view', $folder->name]) ?>
        </td>
        <td>
            <?= $this->Html->link($folder->alias, ['action' => 'view', $folder->alias]) ?>
        </td>
        <td>
            <?= $folder->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
```

