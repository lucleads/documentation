# Mixins

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#mixins>)

Los mixins nos permiten definir estilos que podemos reutilizar a lo largo de la hoja. También podemos indicar argumentos en un mixin, de forma que las reglas que contengan sean dinámicas.

## Crear un mixin

Debemos utilizar la directiva `@mixin` seguida del nombre que queramos darle, y las reglas que queramos que incluya.

```scss
@mixin capaTop() {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.ventana-modal {
    @include capaTop();
    background-color: #CFCFCF;
    opacity: 0.9;
}
```

## Mixins con parámetros

Podemos definir mixins con parámetros e incluso con valor por defecto para esos parámetros.

```scss
// Dos parámetros
@mixin border($color, $width) {
	border-color: $color;
	border-width: $width;
	border-style: solid;
}

.wrapper {
	@include border('cyan', 2);
}

/*
 * Compila como:
 */
.wrapper {
	border-color: "cyan";
	border-width: 2;
	border-style: solid;
}
```

### Parámetros con valor por defecto

Para indicar el valor por defecto, utilizamos el carácter `:` seguido del valor. De esta forma, podemos utilizar un mixin indicando todos sus parámetros, o sólo aquellos que sean requeridos.

```scss
// Dos parámetros
@mixin border($color, $width: 1) {
	border-color: $color;
	border-width: $width;
	border-style: solid;
}

.wrapper {
	@include border('cyan', 2);
}

.main {
	@include border('red');
}

/*
 * Compila como:
 */
.wrapper {
	border-color: "cyan";
	border-width: 2;
	border-style: solid;
}

.main {
	border-color: "red";
	border-width: 1;
	border-style: solid;
}
```