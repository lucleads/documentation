[Html](https://book.cakephp.org/3.0/en/views/helpers/html.html)

# HTML Link

Los enlaces en CakePHP siguen la siguiente estructura

```php
link (string $title, mixed $url = null, array $options = [])
```

### Ejemplo:

El código Cake:

```php
echo $this->Html->link(
    'Enter',
    '/pages/home',
    ['class' => 'button', 'target' => '_blank']
);
```

genera este output:

```html
<a href="/pages/home" class="button" target="_blank">Enter</a>
```

