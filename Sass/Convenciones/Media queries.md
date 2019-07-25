# Media queries

Podemos generar diferentes media queries que cubrirán todas las situaciones necesarias.

```scss
// settings/_breakpoints.scss
$breakpoints: (
  sm: 768px,
  md: 1024px,
  lg: 1280px
);
```

```scss
// tools/_mediaqueries.scss
@mixin mobile {
  @media screen and (max-width: read($breakpoints, "sm") - 1px) {
    @content;
  }
}

@mixin tablet {
  @media screen and (min-width: read($breakpoints, "sm")) and (max-width: read($breakpoints, "md") - 1px) {
    @content;
  }
}

@mixin desktop {
  @media screen and (min-width: read($breakpoints, "md")) {
    @content;
  }
}

@mixin no-mobile {
  @media screen and (min-width: read($breakpoints, "sm")) {
    @content;
  }
}

@mixin no-tablet {
  @media screen and (max-width: read($breakpoints, "sm") - 1px),
    screen and (min-width: read($breakpoints, "lg")) {
    @content;
  }
}

@mixin no-desktop {
  @media screen and (max-width: read($breakpoints, "lg") - 1px) {
    @content;
  }
}
```

Con estos 6 mixins, cubrimos todas las siguientes situaciones:

- Mobile (desde 0 hasta 767px)
- Tablet (desde 768 hasta 1023px)
- Desktop (desde 1024px)
- No-mobile (desde 768px)
- No-tablet (entre 0-767px ó a partir de 1024px)
- No-desktop (entre 0 y 1023px)