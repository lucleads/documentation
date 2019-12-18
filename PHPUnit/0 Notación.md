# Notación

Los tests pueden contener ciertos comentarios que indican su funcionamiento.

En primer lugar, en vez de incluir la palabra `test` dentro del nombre de la función que es un test, se debe indicar como el primer comentario.

## Organización

El orden definido para los comentarios es el siguiente.

1. Explicación del test
2. `@test`
3. `@covers Clase::método`
4. `@depends nombre_test_dependencia` *(en caso de que lo tuviera)*
5. `@dataProvider nombreDataProvider` *(en caso de que lo tuviera)*
6. `@group` *(en caso de que lo tuviera)*
7. `@return` *(en caso de que lo tuviera)*

