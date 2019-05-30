# Crear un test

[Documentation](<https://book.cakephp.org/3.0/en/development/testing.html#creating-your-first-test-case>)

Podemos generar archivos template de test con los métodos asociados a un controlador, componente, tabla... mediante los comandos de Cake.

```bash
bin/cake bake test <tipoElemento> <nombreElemento>
```

Por ejemplo:

```bash
bin/cake bake test controller Users
```

## Assertions de Cake

[Documentation](<https://book.cakephp.org/3.0/en/development/testing.html#assertion-methods>)

Cake dispone de ciertos métodos assertion específicos de su framework.