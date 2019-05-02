# Escribir un test

[Documentation](<https://phpunit.readthedocs.io/en/8.1/writing-tests-for-phpunit.html>)

Por convención, PHPUnit nos recomienda que:

1. Los tests de una clase llamada `Class` se indicarán en otra clase llamada `ClassTest`
2. `ClassTest` hereda desde `PHPUnit\Framework\TestCase`
3. Todos los tests son métodos públicos llamados `test*`

