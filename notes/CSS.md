---
attachments: [Clipboard_2023-10-24-13-37-59.png, Clipboard_2023-11-06-11-10-41.png, Clipboard_2023-11-06-11-12-17.png, Clipboard_2023-11-06-11-12-40.png, Clipboard_2023-11-06-11-19-16.png, Clipboard_2023-11-06-11-19-35.png, Clipboard_2023-11-06-11-21-23.png]
favorited: true
title: CSS
created: '2023-10-27T10:50:02.917Z'
modified: '2023-11-14T10:33:25.943Z'
---

# CSS
--------------

[//]: # (version: 1.0)
[//]: # (author: Izan Abramovici Cabrera)
[//]: # (date: 2023-10-24)



# Tabla de contenidos
- [PLANTILLA](#plantilla)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Introducción](#introducción)
  - [Instalación](#instalación)
    - [Seccion1](#seccion1)
- [Capitulo 2](#capitulo-2)
  - [Subapartado 2.1](#subapartado-21)
- [Capitulo 3](#capitulo-3)
    - [Seccion1](#seccion1-1)

<div style="page-break-after: always;"></div>



## Introducción
[Tabla de contenidos](#tabla-de-contenidos)

- URL
  - 
  - 

## Selectores
[Tabla de contenidos](#tabla-de-contenidos)
- Selector descendente
```css
/* elige todos los td que tenga antes, no importa en que posicion, un table */
table td {
  color: red;
}
```
![](@attachment/Clipboard_2023-11-06-11-10-41.png)

- Selector hijo
 ```css
/* elige todos los td que sean hijos directos de table */
article>span {
  color: red;
}
```
![](@attachment/Clipboard_2023-11-06-11-12-17.png)
![](@attachment/Clipboard_2023-11-06-11-12-40.png)

- Selector adyacente
```css
/* Elige los span que tengan antes un P (no tiene que ser hijo) */
p + span {
  color: red;
}
```
![](@attachment/Clipboard_2023-11-06-11-19-16.png)
![](@attachment/Clipboard_2023-11-06-11-19-35.png)


- Selector de atributos
 ```css
 /* selecciona los td que tengas ese atributo */ 
 td[colspan="2"]{
   color: red;
 }
 ```
 ![](@attachment/Clipboard_2023-11-06-11-21-23.png)


## Atributos
[Tabla de contenidos](#tabla-de-contenidos)
  -
```css
body{
  background-image: url("imgen");
  background-position: X Y ;  /*especifica la posicion*/
  background-repeat: repeat-x; /*como queremos que se repita*/
  background-attachment: ;
  background-size: X Y /*Altura y anchura*/;
  background-position-x: /* cambia la posicion de un solo eje */
}
```

## Importante
[Tabla de contenidos](#tabla-de-contenidos)
- Pading, margin (top, right, bottom, left)(agujas del reloj)
- position
  - fixed (se va a quedar en la pantalla aunque scrollees)
  - relative (origen de coordenadas es el padre)
- float (Sirve para poner tener distintas etiquetas en la misma linea)

Modelo de cajas

width -> Ancho
height -> Alto
margin -> margen [top, right, bottom, left]
padding -> relleno [top, right, bottom, left]
bordes

border [top, right, bottom, left]
border-with [top, right, bottom, left]
border-color [top, right, bottom, left]
border-style [top, right, bottom, left]
outline -> Borde exterior
Fondos

background-color -> Color Fondo
background -> Fondo
background-image -> Imagen fondo (url)
background-position -> Posición
background-repeat -> repetición (x/y)
background-attachment -> scroll|fixed
background-size -> Tamaño
Posicionamiento

static -> Estático o normal
fixed -> Fijo ()
relative -> Relativo a su contenedor
absolute -> Relativo a su contenedor teniendo en cuenta el posicionamiento de este
float -> flotante (left|right)
Visibilidad

display -> Mostrar/no (no ocupa espacio)
visibility -> Ocultar/no (ocupa espacio)
overflow -> Desbordamiento
z-index -> Capas
Texto

color -> Color de texto
font-family -> Fuente
font-size -> Tamaño
font-weight -> grosor (negrita)
font-style -> Cursiva (italic)
font-variant -> Versalitas (small-caps)
text-decoration -> subrayado, tachado, etc
text-align -> Alineación
line-height -> Interlineado
text-transform -> Mayúsculas/Minúsculas
vertical-align -> Alineación Vertical
text-indet -> Sangria
letter-spacing -> Espaciado letras
word-spacing -> Espaciado de palabras
white-space -> Espacios en blanco
Pseudoelementos
::first-letter -> Primera letra (letra capital)
::first-line -> Primer línea
Enlaces (pseudoclases)

:link -> Sin visitar
:visited -> Visitados
:hover -> Por encima
:active -> Al pulsar
Listas

list-style-type -> Tipo de lista
list-style-position -> posición viñeta
list-style-image -> imagen de viñeta
Tablas

border-collapse -> Unión entre celdas
border-spacing -> Espaciado entre celdas
empty-cells -> Mostrar/ocultar Celdas vacias
Formularios

Ej selector: input[type="text"]:active -> Se pulsa el input
: focus -> Pseudo-clase equivalente al :active pero se mantiene el cambio
CSS3
Tabla de contenidos

Color RGBA -> A es alpha, % opacidad (0-1)

border-radius -> Bordes redondeados (radio borde)

box-shadow -> Sombra de caja (x,y,difuminado, expasion, color)

text-shadow -> Sombra de texto (x,y,difuminado, expasion, color)

@font-face -> Fuentes externas (https://www.dafont.com/es/ y https://fonts.google.com/)

linear-gradient (background) -> Degradado Lineal

radial-gradient (background) -> Degradado Radial

border-image -> Imagen para bordes

tranform -> Tranformar objeto

scale -> Escala
rotate -> Rotación
skew -> Trapecio
translate -> Mover
transition -> Transiciones

transition-property -> Propiedades para transicionar
transition-duration -> Duración
transition-delay -> Retraso
transition-timing -> Comportamiento transición (acelerado, frenado)
