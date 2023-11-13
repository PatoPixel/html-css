---
attachments: [Clipboard_2023-10-24-13-37-59.png, Clipboard_2023-10-26-12-38-22.png, Clipboard_2023-10-26-12-40-42.png, Clipboard_2023-10-26-13-04-28.png, Clipboard_2023-10-26-13-28-43.png, Clipboard_2023-10-27-09-45-55.png]
favorited: true
title: HTML
created: '2023-10-25T08:31:30.875Z'
modified: '2023-10-27T10:45:49.970Z'
---

# HTML
--------------

[//]: # (version: 1.0)
[//]: # (author: Izan Abramovici Cabrera)
[//]: # (date: 2023-10-25)



# Tabla de contenidos
- [HTML](#html)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [1. Etiquetas esquema](#1-etiquetas-esquema)
  - [2. Etiquetas semánticas](#2-etiquetas-semánticas)
  - [3. Etiquetas](#3-etiquetas)
  - [4. Tablas](#4-tablas)
  - [5. Formulario](#5-formulario)
  - [6. SEO (Search Engine Optimization)](#6-seo-search-engine-optimization)
  

<div style="page-break-after: always;"></div>



## 1. Etiquetas esquema
[Tabla de contenidos](#tabla-de-contenidos)

- Html
- head
  - title -> Titulo
  - meta -> Metadatos
- body
- p -> párrafo (no cuenta espacios, usar ```&nbsp;```)
- a -> Enlace

## 2. Etiquetas semánticas
![](@attachment/Clipboard_2023-10-27-09-45-55.png)
- 2.1 Header -> Cabecera de página
- 2.2 Nav -> Barra de navegación
- 2.3 Main -> Contenido principal
- 2.4 Aside -> barra lateral
- 2.5 footer -> pie de página
------
- Section -> Secciones (hay que poner h2...h6)
- Article -> Articulos o contenidos relacionados (hay que poner h2...h6)
- hgroup -> Agrupacioón de cabezeras
- figure -> Imágenas o videos
  - figcaption -> Título de imagen o vídeo
## 3. Etiquetas

- Class -> Clases (para CSS)
- id -> identficadores únicos (CSS/JS)
- Suelen ir dentro de P:
  - em -> cursiva
  - strong -> negrita
  - del -> tachado
  - abbr -> abreviacion (sirve para pasar el raton pon ecnima y ver el nombre de la abreviacion completa)
  - sup -> superíndice
  - sub -> subíndice
  - Span -> Sección de texto (sirve para editar un trozo del texto dentro de, por ejemplo, un párrafo)

- pre -> Texto sin formato (cambia según el navegador si cuenta los espacios)
- blockquote -> cita de alguien (no puede estar dentro de un párrafo)
- Code -> Sirve para poner codigo (no se traduce a otros idiomas)
- ul -> Listo no ordenada
- ol -> Lista ordenada
  - li -> Elemento de lista

Para video:
  - Controls = para ponerle los controles de parar etc...
  - Autoplay = inicio automatico
  - Loop
  - Poster = miniatura


## 4. Tablas
- Caption -> Titulo de la tabla
- Table -> Tabla
  - tr -> linea
  - th -> celdas de cabecera
  - td -> celdas (columna)
- Colspan -> Amplía horizontalmente
- rowspan -> Amplía verticalmente

## 5. Formulario
- Label -> texto inicial y asocia al input
![](@attachment/Clipboard_2023-10-26-12-38-22.png)
    - enctype="multipart/form-data": Transforma el archivo en binario para poder descargarlo, debemos ponerlo cuando pongamos un input type file

- Input -> realizar acciones en el formulario (boton, texto, numeros...)
   - Name: ![](@attachment/Clipboard_2023-10-26-12-40-42.png)   
    
    - Checkbox: En los check box, el label se asocia al primero, el resto deben detener una id y un value distintos pero iguales entre si. En el name debemos de poner un valor con "[]" para decirle al código que son unos datos en array.
  ![](@attachment/Clipboard_2023-10-26-13-04-28.png)

    - Hidden : No llevan label
- Select -> Desplegable con opciones
  
  - Option: opciones
  ![](@attachment/Clipboard_2023-10-26-13-28-43.png)

## 6. SEO (Search Engine Optimization)
- 1. Validar : https://validator.w3.org/#validate_by_upload
- 2. Html estricto (XHTML)
- 3. Ratio Contenido/Tags alto
- 4. Usar etiquietas semánticas
- 5. Redes Sociales (enlaces importados)










