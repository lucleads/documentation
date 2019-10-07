# Anidación

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#nested_rules>)

Sass nos permite utilizar reglas anidadas. De esta forma las reglas interiores se aplican sólo cuando se encuentren en el ámbito del selector padre.

```scss
body {
    main {
        p {
            font-family: 'Open Sans';
        }
    }
}

/*
 * Esta regla anidada se compila en CSS como:
 */
body main p {
    font-family: 'Open Sans';
}
```

Gracias a esta característica podemos organizar la estructura de nuestras reglas de una forma mucho más uniforme, **evitando repetir selectores complejos**, y pudiendo **identificar de un vistazo la jerarquía**.

## Hacer referencia al selector padre: &

En ocasiones es posible que queramos hacer referencia al selector padre dentro de una regla (por ejemplo para aplicar estilo a los estados). En estos casos utilizaremos el caracter `&`

```scss
a {
    text-decoration: none;
    &:hover {
        text-decoration: underline;
    }
}

/*
 * Compila como:
 */
a { text-decoration: none; }
a:hover { text-decoration: underline; }
```

### Revertir jerarquía

También podemos revertir la jerarquía de selectores gracias a este caracter:

```scss
p {
    color: blue;
    body & {
        color: red;
    }
}

/*
 * Compila como:
 */
p { color: blue; }
body p { color: red; }
```

No es recomendable utilizar esta técnica para revertir selectores, ya que por arquitectura **es mejor anidar el hijo** dentro del selector principal.

Esta técnica puede ser útil en ciertos casos concretos, donde contamos con un selector muy largo anidado, y queramos escribir otro selector que incluya al anterior pero tenga otras características.

Ejemplo:

```scss
.wrapper {
    main {
        h1 {
            background-color: blue;
            #contact_page & {
                background-color: cyan;
            }
        }
    }
}

/*
 * Compila como:
 */
.wrapper main h1 {
  background-color: blue;
}

#contact_page .wrapper main h1 {
  background-color: cyan;
}
```

### Selector compuesto

Podemos generar selectores combinando el símbolo `&`

```scss
#button {
    padding: 10px;
    border: 1px solid red;
    &-primary {
        background-color: blue;
    }
    &-alert {
        background-color: red;
    }
}

/*
 * Compila como:
 */
#button {
    padding: 10px;
    border: 1px solid red;
}
#button-primary {
    background-color: blue;
}
#button-alert {
    background-color: red;
}
```

## Propiedades anidadas

También **es posible anidar las propiedades shorthand** (font, margin, padding...)

```scss
button {
    border: {
        width: 2px;
        style: solid;
        color: red;
    }
}

/*
 * Compila como:
 */
button {
  border-width: 2px;
  border-style: solid;
  border-color: red;
}
```

