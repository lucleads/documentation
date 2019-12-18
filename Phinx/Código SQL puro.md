# Código SQL puro

Dentro de un archivo de migración, podemos ejecutar código SQL puro para ciertas acciones que no cuentan con un método en Phinx.

Por ejemplo, para crear un campo virtual, debemos utilizar código SQL.

Para ello utilizamos el método $this->query()

```php
$this->query(
    "ALTER TABLE `documents`
    ADD COLUMN `file` VARCHAR(200)
    AS (CONCAT(`id`, '-', `name`, '.', `extension`)) VIRTUAL COMMENT 'Campo calculado' AFTER `thumbnail`;"
);
```

