# Campos calculados (Virtual Fields)

[Documentación](https://dev.mysql.com/doc/refman/8.0/en/create-table-generated-columns.html)

En SQL podemos generar un campo cuyo valor dependa del de otros campos, y que se actualice automáticamente cuando éstos cambien.

Para ello utilizaremos el sufijo `VIRTUAL` después de la definición de ese campo.

```sql
ALTER TABLE documents
ADD COLUMN 'file' VARCHAR(100)
AS (CONCAT('id', '-', 'name', '-', 'extension')) VIRTUAL
```

