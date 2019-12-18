# Setup

A la hora de realizar tests sobre un Controlador, debemos configurar los siguientes puntos:

- Generar una variable fixture con el nombre `$Controlador`.
- Poblar el array `$fixtures` de Cake con las tablas que necesitamos que tengan datos para los tests.
- SetUp
  - Dar valor al fixture `$Controlador` creando una nueva instancia del Controlador a testear.
- TearDown
  - Unset el fixture `$Controlador`.