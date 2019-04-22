# Funciones Sass

[Documentación](<https://sass-lang.com/documentation/Sass/Script/Functions.html>)

```scss
$backgroundColor: #fff;

@function setTextColor($backgroundColor) {
  @if (lightness($backgroundColor) > 50) {
    @return #000;
  } @else {
    @return 'cyan';
  }
}

body {
  background-color: $backgroundColor;
  color: setTextColor($backgroundColor);
}
```

