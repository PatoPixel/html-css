---
attachments: [Clipboard_2023-10-24-13-37-59.png, Clipboard_2023-11-06-11-10-41.png, Clipboard_2023-11-06-11-12-17.png, Clipboard_2023-11-06-11-12-40.png, Clipboard_2023-11-06-11-19-16.png, Clipboard_2023-11-06-11-19-35.png, Clipboard_2023-11-06-11-21-23.png]
favorited: true
title: CSS
created: '2023-10-27T10:50:02.917Z'
modified: '2023-11-06T12:19:49.419Z'
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

```console
#...
```
)
### Seccion1
[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```
- hola
gege
  - egeg

wfwfw

  wffwf

