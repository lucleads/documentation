# Herencia (Extends)

[Documentación](<https://sass-lang.com/documentation/file.SASS_REFERENCE.html#extend>)

Sass nos permite heredar reglas compartidas entre elementos con similares propiedades.

De esta forma, evitamos tener que escribir de forma repetida ciertas reglas y valores, y conseguimos por otro lado una mayor seguridad y uniformidad a la hora de actualizar los valores de una hoja que ya existía, ya que si modificamos una clase que se hereda en otras, los cambios se actualizan de manera automática.

```scss
.button {
  border: 1px solid black;
  padding: 10px;
  text-align: center;  
}

.button-alert {
  @extend .button;
  background-color: red;
}

.button-info {
  @extend .button;
  background-color: yellow;
}

/*
 * Compila como:
 */
.button, .button-info, .button-alert {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}

.button-alert {
  background-color: red;
}

.button-info {
  background-color: yellow;
}
```

Podemos ver que los tres selectores `.button, .button-info y .button-alert` comparten las reglas indicadas al principio de la hoja.

## Selector placeholder %

Sass soporta un selector especial llamado "placeholder selector" cuyo prefijo es `%`. **Las propiedades CSS que indiquemos dentro de este selector no se compilan** en la hoja final `.css`, ya que su única funcionalidad es la de ser utilizadas junto con la directiva `@extend`.

```scss
%button {
  border: 1px solid black;
  padding: 10px;
  text-align: center;  
}

.button-alert {
  @extend %button;
  background-color: red;
}

.button-info {
  @extend %button;
  background-color: yellow;
}

/*
 * Compila como:
 */
.button-info, .button-alert {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}

.button-alert {
  background-color: red;
}

.button-info {
  background-color: yellow;
}
```

Gracias a este selector placeholder, podemos crear interfaces de reglas que no se compilan a no ser que sean utilizadas.