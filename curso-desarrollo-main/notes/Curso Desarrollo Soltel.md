---
title: Curso Desarrollo Soltel
created: '2023-10-25T08:06:01.044Z'
modified: '2023-10-31T16:58:41.923Z'
---

# Curso Desarrollo Soltel

## Enlaces
[Tabla de contenidos](#tabla-de-contenidos)

- https://validator.w3.org/
- https://www.w3schools.com/
- https://code.visualstudio.com/docs/editor/emmet
- https://notable.app/
- [ ] https://github.com/

> Esto es una cita

##  Plugins recomendados para VSCode
[Tabla de contenidos](#tabla-de-contenidos)

- Spanish Language Pack
- Markdown all in one
- Markdown PDF
- Live server (Ritwick Dey)
- Prettier

## Añadir Github a VSCode
[Tabla de contenidos](#tabla-de-contenidos)

- 1. Crear cuenta Github y Repositorio
  - Añadir README.md
- 2. Crear carpeta vacia (será el repositorio local)
- 3. En VSCode cerramos todos los proyectos.
  - Agregar la carpeta vacia al espacio de trabajo.
- 4. Selecciono la carpeta vacia
- 5. Añadimos un archivo y hacemos el commit (junto al add)
- 6. Menu del Control de Código > Pull > Sincronizar > [Agregar Remoto]
- 7. Poner URL del repositorio de GitHub
- 8. Pedirá las credenciales de acceso.
  - Son las normales, NO son las del Token
- 9. Como alternativa, hacer un git pull en la consola.
  - Ej: git pull nombre-remoto main --allow-unrelated-histories

> La mejor opción para trabajar con GIT en el VSCode es siempre emplear git clone

## Comandos básicos de GIT
[Tabla de contenidos](#tabla-de-contenidos)

Artefactos de GIT
[Directorio de trabajo] - [Cache del repositorio] - [Repo Local] - [Repo Remoto]

- git init -> (1 vez)Inicia repo local
- git config -> (1 vez) configurar git
- git clone -> (1 vez) Clonar repositorio

- git status -> Estado del repositorio
- git add -> Añade archivos a la caché
- git commit -> Se guarda al repo local
  - git commit -a -> Añadir y guardar
- git reset -> Deshace los cambios

- git push -> Subir al repo remoto
- git pull -> Bajar DEL repo remoto al directorio de trabajo
  - git fetch -> Baja del repo remoto AL repo local

- git log -> historial de actualizaciones del repo local
- git remote -> Visualizar repositorios remotos
- git diff -> Muestra diferencias entre 2 archivos

- git branch -> Crea rama
  - git branch rename -> cambiar nombre rama
  - git branch --delete -> Borrar ramas
- git checkout -> Pasar a una rama
- git merge -> Fusionar ramas
  - git rebase -> Hace integración de ramas














