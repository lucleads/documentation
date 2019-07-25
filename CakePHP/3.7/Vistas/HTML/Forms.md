[Docs](https://book.cakephp.org/3.0/en/views/helpers/form.html)

# Formularios

Podemos generar formularios a través del helper que contiene Cake.

## Select

Podemos controlar distintas opciones sobre un elemento **SELECT**.

```php
<?= $this->Form->control(
    'state', 
    [
        'label' => false, 
        'empty' => '- Estado', 
        'default' => 'active', 
        'options' => ['active' => 'Activo', 'inactive' => 'Inactivo'], 
        'class' => 'form-control'
    ]); ?>
```

## Datetime

```php
<?= $this->Form->input(
    'available_since', 
    [
        'type' => 'datetime-local', 
        'class' => 'form-control'
    ]); ?>
```

:fire: Los datos que pasamos como datetime en un formulario, **tienen un formato diferente** al debemos introducir en la BD. Hay que convertir de `2019-03-09T00:00` a `2019-03-09 00:00`.

Podemos generar una función como esta en **AppController**:

```php
/**
 * Fix formato de campos datetime-local para insertar en BD MySQL
 */
public function convertDatetime(String $datetime): String
{
    return str_replace('T', ' ', $datetime);
}
```

## Button

### Submit

```php
<?= $this->Form->button(
    __('Crear'),
    [
        'class' => 'btn btn-primary mr-2'
    ]) ?>
```

### Reset

```php
<?= $this->Form->button(
    __('Borrar'),
    [
        'type' => 'reset', 
        'class' => 'btn btn-secondary ml-2'
    ]) ?>
```

