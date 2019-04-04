# Variables

Podemos declarar variables dentro de la lógica de un componente que utilizaremos en su vista.

Para ello, declaramos la variable dentro de la lógica de la siguiente manera:

```typescript
// Dentro del bloque OnInit
nombre = 'Ciro';
```

Ahora, desde la vista podemos mostrar el contenido de dicha variable de la siguiente manera:

```typescript
{{ nombre }}
```

