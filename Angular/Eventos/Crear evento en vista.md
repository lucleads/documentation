# Crear evento en una vista

Para crear distintos eventos dentro de una vista (onclick, etc...), debemos indicar dicho evento dentro del elemento que queremos que haga trigger.

xxx.component.**html**

```html
<button (click)="firstClick()">Click me</button>
```

Ahora, debemos crear esta función dentro de su **controlador.**

xxx.component.**ts**

```typescript
// Dentro de la función OnInit
firstClick():void {
    console.log('Clicked');
}
```

Angular puede interactuar con todos los eventos que registre el DOM. [Lista de eventos](https://developer.mozilla.org/en-US/docs/Web/Events).

Existen eventos de clase y de estilo.

## Eventos de clase

Podemos crear eventos para que cierta clase se aplique a un elemento en función del valor de una variable.

Es decir, que si una variable es `true` o `false` en el controlador, se cargue una clase o no en su vista.

En este ejemplo, la clase `active` se cargará en el caso de que la variable `hasClass` de su controlador tenga el resultado `true`.

xxx.component.**scss**

```scss
.active { background-color: orange; }
```

xxx.component.**html**

```html
<h1 [class.active]="isActive">Estás en HOME</h1>
```

xxx.component.**ts**

```typescript
// Dentro de OnInit
isActive: boolean = true;
```

### Varios eventos de clase

En caso de que queramos manejar el comportamiento de un elemento y varias de las clases que se le deben aplicar, podemos hacerlo de una forma similar a la anterior, con la diferencia de que hay que utilizar un objeto de Angular llamado `ngClass` con las claves y valores que queramos.

```html
<h1 [ngClass]="{
	'active' : isActive,
	'border': hasBorder,
}">Estás en HOME</h1>
```

## Aplicar declaración CSS inline

Podemos asignar valor a una propiedad CSS directamente desde la vista según el valor de una variable.

Para ello, simplemente tenemos que utilizar la siguiente sintaxis:

```html
<h1 [style.color]="isActive ? 'red' : 'black'">Estás en HOME</h1>
```

Con esta regla, la propiedad `color` de este elemento tomará el valor `red` en caso de que la variable `isActive` resuelva como `true`, y tomará el valor `black` si resuelve como `false`.

### Aplicar varias declaraciones CSS inline

Igual que con los eventos de clase, podemos realizar múltiples evaluaciones y asignar valores a un elemento inline.

Para ello, utilizamos la sintaxis:

```html
<h1 [ngStyle]="{
	'color': isActive ? 'red' : 'black',
	'border': hasBorder ? '1px solid red' : '0',
}">Estás en HOME</h1>
```

