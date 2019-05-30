# Convención de selectores

Debido a la flexibilidad que nos aporta SASS a la hora de anidar selectores, es posible que por error repitamos ciertas reglas. Para evitar esta situación, debemos definir el modelo de selectores.

Este modelo utiliza la especificidad de los distintos selectores para mantener una estructura constante.

Los distintos atributos de cada selector HTML están definido en la [documentación de MDN](<https://developer.mozilla.org/en-US/docs/Web/HTML/Element>).

```scss
button {
    // 0. (Opcional) Herencia.
    @extends %button;
    
    // 1. Reglas propias del selector.
    padding: 10px;    
    border: 1px solid #000000;
    
    // 2. Breakpoints del selector. Cada BP puede repetir el modelo definido hasta aquí.
    @include bp-mobile { // }
	@include bp-tablet { // }
	@include bp-desktop { // }
        
	// 3. Selectores hijos. Cada selector hijo puede repetir el modelo definido hasta aquí.
	span { // }
        
    // 4.1 Pseudo-elementos.
	&::before { // }
	&::after { // }
    
    // 4.2 Atributos.
	&[type=checkbox] { // }
        
	// 4.3 Pseudo-clases. Estados y selectores de nivel.
    &:hover { // }
	&:disabled { // }
	&:nth-child(1) { // }    
        
	// 5. Combinators.
    &+.alert { // }
	&>.primary { // } 
	
}
```

**Ejemplos:**

```scss
button {

    @extend %button;

    border-color: black;
    background-color: #ccc;
    opacity: 0.75;
    
    span {
        font-family: 'Roboto';
    }

    &[disabled] {
        opacity: 0.3;
    }

    &:hover {
        box-shadow: 5px 5px 5px #cfcfcf;
    }
    
    &.primary {
        background-color: cyan;
    }
    
}
```

```scss
a {
    
    text-decoration: underline;
    
    @include bp-mobile {
        font-size: 0.8rem;
    }

    &[href=home] {
        color: blue;
    }

    &:visited {
        color: red;
    }
    
    &:nth-of-type(1) {
        font-weight: bold;
    }
    
}
```

```scss
ul {

    border: 1px solid #666;
    
    li {
    
        &:nth-child(odd) {        
            background-color: #cfcfcf;
        }
        
    }
    
}
```

