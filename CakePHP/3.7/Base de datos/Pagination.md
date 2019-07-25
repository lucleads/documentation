[Docs](https://book.cakephp.org/3.0/en/controllers/components/pagination.html)

# Pagination

Componente que se incluye en los controladores para gestionar las consultas que devuelven demasiados resultados para mostrarse en una sola página y requieren de botones de Anterior, Siguiente.

## Ordenar resultados de Pagination

A la hora de realizar la consulta desde el controlador, podemos configurar entre las opciones de la query el  orden con el que queremos devolver los datos.

```php
public function index()
{
    $users = $this->paginate($this->Users, ['order' => ['Users.id' => 'DESC']]);
    $this->set(compact('users'));
}
```

Dentro del array `order` podemos definir los distintos campos por los que queremos realizar la ordenación.