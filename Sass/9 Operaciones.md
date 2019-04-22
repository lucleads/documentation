# Operaciones

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#operations>)

Gracias a Sass podemos definir valores para reglas CSS mediante el resultado de operaciones matemáticas. Podemos también anidar estas  operaciones hasta el nivel que queramos.

A diferencia de la nueva función nativa en CSS `calc()`, las operaciones de Sass se compilan como su resultado matemático, de forma que es más compatible con navegadores antiguos.

```scss
.container { 
    width: 100%; 
}

article {
    float: left;
    width: 700px / 960px * 100%;
}

.sidebar {
	float: right;
	width: 200px / 960px * 100%;
}

/*
 * Compila como:
 */
.container {
	width: 100%;
}

article {
	float: left;
	width: 72.9166666667%;
}

.sidebar {
	float: right;
	width: 20.8333333333%;
}
```

**Dentro de las operaciones, podemos utilizar variables.**

## Operaciones con colores

Podemos realizar operaciones de códigos de color. Estos códigos se suman en pares.

```scss
p {
	color: #010203 + #040506;
    // Se trata como: 01 + 04 | 02 + 05 | 03 + 06
}
// Compila como:
p {
	color: #050709;
}
```

