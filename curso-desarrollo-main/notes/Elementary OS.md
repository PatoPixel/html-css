---
title: Elementary OS
created: '2021-11-21T12:12:32.693Z'
modified: '2023-10-21T15:58:45.981Z'
---

# Elementary OS

---


[//]: # "version: 1.0"
[//]: # "author: Iván Rodríguez"
[//]: # "date: 2021-11-21"

# Tabla de contenidos

- [Elementary OS](#elementary-os)
- [Tabla de contenidos](#tabla-de-contenidos)
  - [Introducción](#introducción)
  - [Instalación](#instalación)
  - [Instalar Sistema Operativo](#instalar-sistema-operativo)
  - [Instalaciones Adicionales](#instalaciones-adicionales)
    - [Actualizar Sistema y codecs](#actualizar-sistema-y-codecs)
    - [Gdebi, Firefox y Tweaks](#gdebi-firefox-y-tweaks)
    - [Instalar Java](#instalar-java)
    - [Instalar LibreOffice](#instalar-libreoffice)
  - [Pila LAMP](#pila-lamp)
    - [Variables de entorno](#variables-de-entorno)
    - [Instalar Apache](#instalar-apache)
    - [Instalar MySQL](#instalar-mysql)
    - [Instalar MySQL WorkBench](#instalar-mysql-workbench)
    - [Instalar PHP 8](#instalar-php-8)
    - [Instalar Dependencias](#instalar-dependencias)
    - [Instalar MongoDB](#instalar-mongodb)
    - [Instalar Composer](#instalar-composer)
    - [Instalar Visual Studio Code](#instalar-visual-studio-code)
    - [Instalar otros elementos](#instalar-otros-elementos)
    - [Instalar Angular](#instalar-angular)
    - [Instalar Symfony CLI](#instalar-symfony-cli)
  - [Python](#python)
    - [Anaconda](#anaconda)
    - [Spyder](#spyder)
    - [PyCharm](#pycharm)
  - [Java](#java)
      - [Instalación JDK](#instalación-jdk)
    - [Instalar Tomcat](#instalar-tomcat)
    - [Netbeans](#netbeans)
    - [IntelliJ Idea](#intellij-idea)
    - [Eclipse](#eclipse)
    - [Seccion1](#seccion1)

<div style="page-break-after: always;"></div>

## Introducción

[Tabla de contenidos](#tabla-de-contenidos)

Existen distintas opciones para trabajar con Linux:
1. Usar WSL2, es decir, meter Linux como una aplicación mas de Windows.
  - Mas info: https://learn.microsoft.com/es-es/windows/wsl/install
  - No lo recomiendo. Al final consumes muchos recursos.
2. Usar una Máquina virtual (con VMWare o VirtualBox)
  - Estamos en las mismas: demasiados recursos usados.
3. Meter Linux como ÚNICO sistema operativo.
  - Lo ideal... en un múndo idílico. Pero lamentablemente NO estamos en un mundo ideal. Es lo que hay.
4. Tener un arranque dual Windows + Limux.
  - Esta es la opción que recomiendo.
  - IMPORTANTE: SIEMPRE hay que instalar primero Windows!!

Puntos a considerar cuando se hace una instalación DUAL:
1. Antes de empezar HAY QUE HACER UNA COPIA DE SEGURIDAD DE LOS DATOS
2. En el propio Windows, debemos dejar espacio para las particiones de Linux (con 40Gb pueden bastar; yo en mi máquina tengo 800GB - y para mi Windows algo menos de 200GB ;p)
3. Si el ordenador es de marca (como un portátil) lo mas probable es que venga con el UEFI + BitLocker.
  - Debemos ver nuestra clave de bitlocker: aka.ms/bitlocker
  - Si no tenemos cuenta de outlook, nos creamos una. Y damos de alta nuestra copia de Windows.
  - Mas info: https://www.youtube.com/watch?v=6Cx3y-GXbJo
  
- URL
  -
  -


## Instalación

[Tabla de contenidos](#tabla-de-contenidos)

Recursos:

- https://www.youtube.com/watch?v=bTWXNTbqV4I

## Instalar Sistema Operativo

Pasos Previos:
En el Windows, debemos buscar (Windows + S) Particiones
Le damos a a Reducir volumen.
Elementary OS necesita al menos 40GB de espacio.

1. Seleccionar idioma de instalación (Español)
2. Clic en Instalar Elementary
3. Seleccionar Disposición teclado (Español)
4. Marcar:

- [x] Descargar Actualizaciones...
- [x] Instalar Programas...

5. Tipo de instalación (Particionado).

- a) Mas Opciones
  Las particiones que deben estar serán, al menos, las siguientes
- 1024MB, Primaria, Ext4 y punto de Montaje: /boot -> Arranque
- 20000MB, Logica, Ext4 y punto de Montaje: /home .> Usuario
- 20000MB, Logica, Ext4 y punto de Montaje: / -> Raiz

6. Elegimos la localización
7. Ponemos los datos de acceso
   IMPORTANTE: Marcar

- [x] Solicitar contraseña

## Instalaciones Adicionales

[Tabla de contenidos](#tabla-de-contenidos)

- Recursos:
  -

### Actualizar Sistema y codecs

```console
sudo apt update & upgrade
sudo apt install ubuntu-restricted-extras libavcodec-extra libdvd-pkg
```

- Aprovechamos para instalar VLC

```console
sudo apt update & upgrade
sudo apt install vlc
```

- Vamos a probar nuestro primer video
- https://test-videos.co.uk/bigbuckbunny/mp4-h264
- Si el vídeo tiene franjas verdes: Herramientas > Preferencias > Video > Output > Salida de Video X11

### Gdebi, Firefox y Tweaks

- Gdebi es un instalador de paquetes .deb
  Con esta aplicación (que estará en Aplicaciones > Configuración > Tweaks), podemos poner un botón de minimizar (Apariencia > Windows Controls > Add Minimice Right)
- Tweaks es un configurador del sistema

```console
# Instalación gdebi
sudo apt install gdebi

# Instalación Firefox
sudo apt install firefox

# Instalación Tweaks
sudo apt install software-properties-common
sudo add-apt-repository ppa:philip.scott/pantheon-tweaks
sudo apt update
sudo apt install pantheon-tweaks
```

### Instalar Java

[Tabla de contenidos](#tabla-de-contenidos)

Recursos:

- https://www.digitalocean.com/community/tutorials/how-to-install-java-with-apt-on-ubuntu-20-04-es
  https://netbeans.apache.org/download/nb125/nb125.html

Instalamos la versión "libre" de Java

```console
sudo apt install default-jre
sudo apt install default-jdk

# Comprobamos
java -version
javac -version
```

- Instalar Netbeans 12
  Netbeans es el IDE oficial para programar en Java

```console
cd ~/Descargas
wget https://downloads.apache.org/netbeans/netbeans/12.5/Apache-NetBeans-12.5-bin-linux-x64.sh
sudo sh Apache-NetBeans-12.5-bin-linux-x64.sh
```

- "cannot access java.lang Fatal Error:"
  Si se produce este error:

```console
sudo nano /usr/local/netbeans-12.5/netbeans/etc/netbeans.conf
# Buscamos con CTRL + W -> netbeans_jdkhome
# Y dejamos la línea asi:
netbeans_jdkhome="/usr/lib/jvm/java-11-openjdk-amd64"
```

Ya solo quedaría reiniciar netbeans12.

### Instalar LibreOffice

```console
sudo add-apt-repository ppa:libreoffice
sudo apt update
sudo apt install libreoffice

# Idioma español
sudo apt install libreoffice-l10n-es

# Diccionarios
sudo apt-cache search myspell
sudo apt-get install myspell-es
```

- Ahora toca traducirlo al español
  - https://es.libreoffice.org/descarga/libreoffice/
    - Nos vamos a Interfaz de usuario traducida: español

## Pila LAMP

- En los siguientes apartados veremos como instalar la pila LAMP
  - L -> Linux
  - A -> Apache
  - M -> MySQL
  - P -> PHP
    Con esto podremos crear aplicaciones web.

### Variables de entorno

Recursos:

- https://www.digitalocean.com/community/tutorials/how-to-read-and-set-environmental-and-shell-variables-on-linux-es

- Es muy recomendable crear nuestra propias variables de entorno para agilizar el trabajo con la consola. Para ello hacemos lo siguiente:

```console
# Visualizar las variables actuales
printenv | less
# Pulsamos q para salir (quit)

# Para visualizar una variable concreta..
printenv HOME
echo $HOME

# Creamos la carpeta donde irán todos los proyectos
mkdir /home/ivanrguez/Proyectos

# Para crear una variable nueva: export VAR="value" dentro de bashrc
sudo nano ~/.bashrc

# Al final del archivo ponemos
export PROYECTOS="/home/ivanrguez/Proyectos"

# De ese modo, para pasar a dicho directorio podemos hacer:
cd /home/ivan-aareon/Proyectos
# O bien
cd $HOMEPROJECTS
```

### Instalar Apache

[Tabla de contenidos](#tabla-de-contenidos)

- Linux

```console
sudo apt update
sudo apt upgrade
sudo apt install apache2
sudo service apache2 start
```

- Comprobamos que está todo correcto escribiendo en el navegador:
  - http://localhost/

### Instalar MySQL

[Tabla de contenidos](#tabla-de-contenidos)

```console
sudo apt update
sudo apt install mysql-server mysql-client
```

- Ahora toca acceder, pero en primer lugar debemos definir el acceso sin sudo:

```console
sudo mysql -u root -p
```

```sql
use mysql;
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
FLUSH PRIVILEGES;
exit
```

- Solo queda reinicirar MySQL y entrar con root/root

```console
sudo service mysql restart
mysql -u root -p
# Y ahora ponemos la conraseña: root
```

### Instalar MySQL WorkBench

[Tabla de contenidos](#tabla-de-contenidos)

Aunque personalmente prefiero usar el cliente de MySQL, mediante comandos en la terminal, es interesante contar con herramientas adicionales para el trabajo con Bases de datos. La mas usada, en entorno gráfico, es la que proporciona el propio Oracle: MySQL WorkBench.

- https://dev.mysql.com/downloads/workbench/

> NOTA IMPORTANTE: La instalación "oficial" de WorkBench (versión 8.0.34) tiene, por ahora, un bug (sobre todo para hacer ingeniería inversa). Recomiendo usar SNAP (ver mas abajo) para hacerlo. O bien hacer una instalación previa como explico ahora...

```console
# Nos vamos a bajar la versión deb para Ubuntu 22.04 64bits
# OJO! Hay dos versiones, usamos el mas pequeño (dbgsym, debug, no necesario para nuestro caso)
cd ~/Descargas
wget https://dev.mysql.com/get/Downloads/MySQLGUITools/mysql-workbench-community_8.0.32-1ubuntu22.04_amd64.deb
sudo apt install ./mysql-workbench-community_8.0.32-1ubuntu22.04_amd64.deb

# Para desinstalar (por si acaso)
sudo dpkg --purge mysql-workbench-community
```

> Instalación con SNAP
```console
sudo apt install snapd
sudo snap install mysql-workbench-community
```


### Instalar PHP 8

[Tabla de contenidos](#tabla-de-contenidos)

```console
sudo apt update
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
Press [ENTER] to continue or Ctrl-c to cancel adding it.
# Pulsamos ENTER
sudo apt update
sudo apt upgrade

sudo apt -y install php                        # Lo mas probable es que el upgrade ya lo instale
php -v                                            # Para ver la versión de PHP

# Instalamos las extensiones que nos harán falta...
sudo apt install php-zip
sudo apt-get install php-curl
sudo apt-get install php-xml
sudo apt-get install php-intl
sudo apt-get install php-pgsql
sudo apt-get install php-xsl
sudo apt-get install php-amqp
sudo apt-get install php-gd
sudo apt-get install openssl
sudo apt-get install php-redis
sudo apt install php-mysql

# Para instalar el Soporte MongoDB
# IMPORTANTE! Si no vas a usar MongoDB, NO LO INSTALES!!
sudo apt install php-dev php-pear
sudo pecl install mongodb

# Vemos el listado de librerias instaladas (incluidas las de arriba)
php -m
```

- Debemos activar los módulos en el PHP.ini

```console
sudo nano /etc/php/8.2/cli/php.ini
# Dentro del archivo...
extension=mongodb.so

# CTRL + O (Guardar) y CTRL+X (salir)
sudo service apache2 restart
```

- Seguimos instalando módulos de PHP:

```console
### sodium
# Instalamos CGI
sudo apt-get install php-cgi

# Instalamos además FPM:
sudo apt-get install php-fpm
# Hay que activar el FPM en el Apache
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php-fpm

# Y por último reiniciamos Apache
sudo service apache2 restart
```

### Instalar Dependencias

[Tabla de contenidos](#tabla-de-contenidos)

```console
# Instalamos dependencias y nos lo bajamos
sudo apt update
sudo apt install curl php8.2-cli php8.2-mbstring git unzip

# Probamos que version tenemos de PHP
php -v

# ATENCIÓN! Si por alguna razón queremos cambiar a PHP7.4 debemos hacer lo siguiente
# sudo apt -y install php7.4
# sudo a2enmod php7.4
# sudo service apache2 restart
# sudo update-alternatives --set php /usr/bin/php7.4
# sudo update-alternatives --set phar /usr/bin/phar7.4
# sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.4
# sudo update-alternatives --set phpize /usr/bin/phpize7.4
# sudo update-alternatives --set php-config /usr/bin/php-config7.4

# Y volvemos a comprobar
php -v
# Mas info: https://tecadmin.net/switch-between-multiple-php-version-on-ubuntu/
```

- Por último, vamos a comprobar que PHP y Apache se comunican correctamente:

```console
sudo chmod 777 -R /var/www/html # Damos permisos al directorio de publicación
cd /var/www/html
nano info.php
```

- Dentro de info.php ponemos esto:

```console
<?php
// Muestra toda la información, por defecto INFO_ALL
phpinfo();
?>
# Y luego CTRL + O (Guardar) y CTRL + X (salir)
```

### Instalar MongoDB

[Tabla de contenidos](#tabla-de-contenidos)

Recursos:

- https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/
- https://www.digitalocean.com/community/tutorials/how-to-install-mongodb-on-ubuntu-20-04-es

- El proceso de instalación comienza con añadir los repositorios oficiales:

```console
wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -

# Para sacar el listado de claves instalados:
apt-key list

# Creamos un archivo de repositorio para Ubuntu 20.04
# En el mismo comando va el contenido del archivo...
echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list
```

- Y procedemos con la instalación como tal:

```console
sudo apt update
sudo apt upgrade
sudo apt install -y mongodb-org
```

- Ya solo queda iniciarlo y abrirlo

```console
sudo systemctl start mongod
sudo systemctl status mongod
mongosh
```

### Instalar Composer

[Tabla de contenidos](#tabla-de-contenidos)

```console
cd ~
# Bajamos el archivo
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

#Comprobamos que es el correcto
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

# Hacemos la instalación
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Y comprobamos
composer

# Saldrá algo similar a esto:
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.1.5 2021-07-23 10:35:47
```

### Instalar Visual Studio Code

[Tabla de contenidos](#tabla-de-contenidos)

Recursos:

- https://ubunlog.com/visual-studio-code-editor-codigo-abierto-ubuntu-20-04/

- Instalación por consola:

```console
sudo apt update
sudo apt update
sudo apt install software-properties-common apt-transport-https wget
wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://packages.microsoft.com/repos/vscode stable main"
sudo apt install code
```

- Extensiones:
  - Sería bueno que tuviesemos la opción de Formatear al guardar para mejorar la visualización del código.
  1. Le damos a CTRL + MAY + X (Extensiones)
  2. Escribimos Spanish Lenguage Pack y le damos a [install]. Pulsamos abajo a la derecha en [Restart].
  3. Escribimos PHP Intelephense y le damos a [Instalar]
  4. Escribimos Markdown All in One y le damos a [Instalar]
  5. Abrimos la configuración de Visual Studio Code: [CTRL + ","]
  6. Buscamos: settings.json. Le damos a Editar en JSON. Y ponemos esto:
     (para los archivo php y json formateamos al guardar)

```json
{
  "[php]": {
    "editor.formatOnSave": true
  },
  "[json]": {
    "editor.quickSuggestions": {
      "strings": true
    },
    "editor.suggest.insertMode": "replace",
    "editor.formatOnSave": true
  }
}
```

### Instalar otros elementos

[Tabla de contenidos](#tabla-de-contenidos)

- Para poder instalar Symfony CLI (que veremos en el siguiente apartado), debemos tener lo siguiente:
  - cURL
  - Gzip
  - Git

1. Instalar cURL

```console
sudo apt update && sudo apt upgrade
sudo apt install curl
curl --version
```

2. Instalar Gzip

```console
sudo apt update && sudo apt upgrade
sudo apt-get install -y gzip
sudo apt install p7zip-full p7zip-rar
gzip --version
```

3. Instalar Git

```console
sudo apt update
sudo apt install git
git --version

# Ponemos nuestro correo y nuestro nombre...
git config --global user.email "ivanrguez1@yahoo.es"
git config --global user.name "Iván Rodríguez Ruiz"
```

4. Instalar SQLite y SQLite Browser

- Recursos:
  - https://linuxhint.com/install_sqlite_browser_ubuntu_1804/

```console
sudo apt update
sudo apt install sqlite3
sqlite3 --version
sudo apt install sqlitebrowser
```

### Instalar Angular

[Tabla de contenidos](#tabla-de-contenidos)

- Podemos instalar esta capa de Front-end para nuestros proyectos con Symfony

1. Instalar Yarn

```console
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt update && sudo apt install yarn
yarn --version
```

2. Instalar NodeJS y NPM

```console
sudo apt update && sudo apt upgrade
cd ~
curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
sudo bash nodesource_setup.sh
sudo apt-get install -y nodejs
# Vemos la versión actual (la LTS es la 18)
node -v
```

3. Instalar el Cliente de Angular

```console
sudo npm install -g @angular/cli
# Para ver la versión de NPM (la actual es la 7.5.4)
npm -v
# Instalamos el Cliente...
sudo yarn -npm install -g @angular/cli
# Vemos la versión actual
ng version

# Saldrá algo similar a esto...
Global setting: enabled
Local setting: No local workspace configuration file.
Effective status: enabled

     _                      _                 ____ _     ___
    / \   _ __   __ _ _   _| | __ _ _ __     / ___| |   |_ _|
   / △ \ | '_ \ / _` | | | | |/ _` | '__|   | |   | |    | |
  / ___ \| | | | (_| | |_| | | (_| | |      | |___| |___ | |
 /_/   \_\_| |_|\__, |\__,_|_|\__,_|_|       \____|_____|___|
                |___/
    

Angular CLI: 16.2.0
Node: 18.17.1
Package Manager: npm 9.8.1
OS: linux x64

```

### Instalar Symfony CLI

[Tabla de contenidos](#tabla-de-contenidos)

1. Instalamos Symfony CLI

```console
cd ~/Descargas
wget https://get.symfony.com/cli/installer -O - | bash

# lo podemos instalar globalmente con
sudo mv /home/$USER/.symfony5/bin/symfony /usr/local/bin/symfony

# Comprobamos
symfony
```

2. Nos creamos nuestro primer proyecto

```console
mkdir $HOME/Proyectos
cd $HOME/Proyectos
symfony new --full symfony5

# Nos metemos en el directorio del proyecto e iniciamos el servidor
cd $HOME/Proyectos/symfony5
symfony server:start
# Si mas adelante queremos parar el servidor tan solo debemos teclear
### CTRL + C
```

- Y ya podemos ver en el navegador como quedaría:
  - http://127.0.0.1:8000

## Python

[Tabla de contenidos](#tabla-de-contenidos)

Por defecto Elementary7, que está basado en Ubuntu LTS 22.04, lleva incorporado Python3. Para ver la versión instalada:

```console
python3 --version
# Python 3.10.12
```

### Anaconda
[Tabla de contenidos](#tabla-de-contenidos)

El IDE que vamos a usar es Anaconda:
- https://www.anaconda.com/download#downloads
Para instalarlo hacemos lo siguiente:
```console
cd Descargas
wget https://repo.anaconda.com/archive/Anaconda3-2023.07-2-Linux-x86_64.sh
# OJO! El bash hay que usarlo SIN SUDO!!
bash Anaconda3-2023.07-2-Linux-x86_64.sh

# Lo primero es aceptar la licencia. Pulsar Av Pág CON CUIDADO!!
Do you accept the license terms? [yes|no]
[no] >>> yes

Anaconda3 will now be installed into this location:
/home/ivanrguez/anaconda3
# Pulsamos INTRO

# Tras un ratito...
done
installation finished.
Do you wish the installer to initialize Anaconda3
by running conda init? [yes|no]
[no] >>> yes

# Y se acaba la instalación inicial
==> For changes to take effect, close and re-open your current shell. <==

If you'd prefer that conda's base environment not be activated on startup, 
   set the auto_activate_base parameter to false: 

conda config --set auto_activate_base false

Thank you for installing Anaconda3!

# Ahora debemos activar el entorno en la terminal
source ~/.bashrc
(base) ivanrguez@Gram16Z90P:~/Descargas$ 
```

Ahora vamos a ver algunas acciones posteriores y el arranque:
```console
# Para ver el listado de paquetes instalados:
conda list
# Ver la version de conda 
conda --version

# Y por último, arrancamos anaconda
anaconda-navigator

# Es posible que nos diga que hay que actualizar. Seguimos las instrucciones y listo.
# Le damos a Launch navigator
```

- Para borrar anaconda, simplemente:
```console
# OJO, que no se pregunta!
rm -rf ~/anaconda3
```

### Spyder 

[Tabla de contenidos](#tabla-de-contenidos)

- Instalación Spyder
  - Recurso: https://docs.spyder-ide.org/current/installation.html
  - La forma mas sencilla es iniciar anaconda y en la sección Spyder pulsar en Install
  - También podemos hacerlo por consola (donde incluiremos todas las dependencias en nuesto entorno actual -base-)
```console
conda create -c conda-forge -n spyder-env spyder numpy scipy pandas matplotlib sympy cython
```  

> IMPORTANTE: Anaconda nos permite crearnos entornos. Es ESENCIAL entender que las dependencias se meten a nivel de entorno, no de forma general.

### PyCharm 

[Tabla de contenidos](#tabla-de-contenidos)


```console
#...
```

## Java 

[Tabla de contenidos](#tabla-de-contenidos)

Bibliografia
- https://www.ediciones-eni.com/libro/java-los-fundamentos-del-lenguaje-con-ejercicios-corregidos-9782409036873
- https://www.ediciones-eni.com/libro/jakarta-ee-desarrolle-aplicaciones-web-en-java-9782409039829

Recursos:
- https://www.digitalocean.com/community/tutorials/how-to-install-java-with-apt-on-ubuntu-20-04-es

#### Instalación JDK
[Tabla de contenidos](#tabla-de-contenidos)

Vamos a ver en esta sección como instalar todo la infraestructura Java que vamos a necesitar para el desarrollo de aplicaciones con esta tecnología:
- Empezamos con la opción OpenJDK de la comunidad...
```console
# Instalar el JRE
sudo apt install default-jre
# Instalar el JDK
sudo apt install default-jdk
# Verificar la instalación
java -version
javac -version
```

> IMPORTANTE: Recomiendo ENCARECIDAMENTE no usar la última versión de Java y si alguna anterior LTS. Actualmente la 17
https://en.wikipedia.org/wiki/Java_version_history

- Ahora veremos la instalación Oficial de Oracle
  - 1. Nos vamos a https://www.oracle.com/es/java/technologies/downloads/
  - 2. Descargamos el paquete x64 Debian Package e instalamos...

```console
cd Descargas
wget https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.deb
sudo apt install ./jdk-17_linux-x64_bin.deb

# Si queremos alternar entre Java Oficial y OpenJDK:
sudo update-alternatives --config java
sudo update-alternatives --config javac

# IMPORTANTE!! En ambos casos, poner Java17!!
```

- Ahora vamos a configurar la variable de entorno:
```console
# Volvemos a ejecutar el comando de selección de JDKs
sudo update-alternatives --config java

# Copiamos la salida por defecto
# * 0  /usr/lib/jvm/jdk-17oracle-x64/bin/java      
# Editamos el archivo de configuración de entorno del sistema
sudo nano /etc/environment
# Metemos en la linea siguiente lo copiado menos el /bin/java
JAVA_HOME="/usr/lib/jvm/jdk-21-oracle-x64"
# CTRL + O, para guardar!
# CTRL + X, salir!

# Recargamos el archivo en la sesión actual
source /etc/environment
# Y vemos el valor de la variable
echo $JAVA_HOME
```

- Ya solo nos queda dar permisos (escritura y ejecución) a los ejecutables de Java
```console
cd /usr/lib/jvm/jdk-17-oracle-x64/bin
sudo chmod a+x java  
sudo chmod a+x javac 
```


### Instalar Tomcat

[Tabla de contenidos](#tabla-de-contenidos)

> En muchos sitios se recomienda la instalación del contenedor web tomcat como servicio. Personalmente NO lo recomiendo. Sólo usaremos Tomcat en momentos especificos.

- Recursos:
  - https://linuxize.com/post/how-to-delete-users-in-linux-using-the-userdel-command/
  - https://linuxize.com/post/how-to-install-tomcat-10-on-ubuntu-22-04/?utm_content=cmp-true

- Página oficial de Descargas
- https://tomcat.apache.org/whichversion.html
  - Recomendable usar versión estable (descartamos el alpha)

```console
# Nos vamos a https://tomcat.apache.org/download-10.cgi
# Ir al apartado core > tar.gz

cd ~/Descargas
wget https://dlcdn.apache.org/tomcat/tomcat-10/v10.1.14/bin/apache-tomcat-10.1.14.tar.gz
wget https://dlcdn.apache.org/tomcat/tomcat-10/v10.1.14/bin/apache-tomcat-10.1.14-fulldocs.tar.gz
sudo groupadd gp_tomcat 
sudo useradd -s /bin/false -g gp_tomcat -d /opt/tomcat user_tomcat 

# Instalamos el Core y la documentación
cd ~/Descargas
sudo mkdir /opt/tomcat
sudo mkdir /opt/tomcat/apache-tomcat-10 
sudo tar xzvf apache-tomcat-10.1.14.tar.gz -C /opt/tomcat/apache-tomcat-10 --strip-components=1 
sudo mkdir /opt/tomcat/apache-tomcat-10/docs
sudo tar xzvf apache-tomcat-10.1.14-fulldocs.tar.gz -C /opt/tomcat/apache-tomcat-10/docs --strip-components=1 

# Asignamos permisos y probamos
sudo chgrp -R gp_tomcat /opt/tomcat 
cd /opt/tomcat/apache-tomcat-10
sudo chmod -R g+r conf  
sudo chmod -R g+x conf 
sudo chown -R user_tomcat bin logs temp webapps work 
sudo ufw allow 8080  
sudo ufw allow 8000 
sudo su -s "/bin/bash" -c "/opt/tomcat/apache-tomcat-10/bin/startup.sh" user_tomcat

# Y POR FIN, probamos en el navegador
# http://localhost:8080/
```

- Para parar e iniciar de nuevo el servidor:
```console
sudo su -s "/bin/bash" -c "/opt/tomcat/apache-tomcat-10/bin/shutdown.sh" user_tomcat
sudo su -s "/bin/bash" -c "/opt/tomcat/apache-tomcat-10/bin/startup.sh" user_tomcat
```

> IMPORTANTE: En los apartados siguientes vamos a ver cómo instalar varios IDEs. Para el curso usaremos el Eclipse. Pero siempre es bueno aprender a usar los que pongo aquí de forma adicional: NetBeans e IntelliJ Idea.

### Netbeans

[Tabla de contenidos](#tabla-de-contenidos)

Para hacer nuestros desarrollo podemos usar diversos IDEs. Desde el propio Visual Studio Code, pasando por el Eclipse hasta el oficial de Oracle: Netbeans. 
Vamos a ver su instalación:
- https://netbeans.apache.org/download/nb19/index.html



```console
cd Descargas
# Nos bajamos el .deb
wget https://dlcdn.apache.org/netbeans/netbeans-installers/19/apache-netbeans_19-1_all.deb
# Y lo instalamos
sudo apt install ./apache-netbeans_19-1_all.deb
```

### IntelliJ Idea

[Tabla de contenidos](#tabla-de-contenidos)

Recursos:
- https://www.jetbrains.com/help/idea/installation-guide.html#2220aef6

JetBrains tiene, probablemente, el mejor conjunto de IDEs del mercado. Para descargarlos, usaremos el ToolBox App:
- https://www.jetbrains.com/toolbox-app/

```console
# Nos instalamos esta dependencia
sudo apt install libfuse2

# Nos descargamos el archivo comprimido:
cd Descargas
wget https://download.jetbrains.com/toolbox/jetbrains-toolbox-2.0.4.17212.tar.gz

# Descomprimimos
sudo tar -xvzf jetbrains-toolbox-2.0.4.17212.tar.gz
sudo mv jetbrains-toolbox-2.0.4.17212 jetbrains

# Y arrancamos (OJO, tarda!)
jetbrains/jetbrains-toolbox
```

- Ya solo nos queda estos pasos:
  - 1. Nos descargamos el pack de traducción de JEtBrains
    - https://github.com/macastro/SpanishLanguagePack-JetBrains
    (OJO, normalmente usar el último)
  - 2. Pulsar en IntelliJ Idea Community Edition > Instalar
  - 3. Iniciar en el Menú de aplicaciones
  - 4. Arrastrar desde Descargas a la ventana que se abre y pedirá reiniciar. Y listo!

### Eclipse

[Tabla de contenidos](#tabla-de-contenidos)

El Eclipse es uno de los IDEs para java mas populares.  
- Recursos:
  - https://www.eclipse.org/downloads/
  - https://babel.eclipse.org/babel/

- 1. Descargamos e iniciamos el instalador
```console
cd Descargas
wget https://rhlx01.hs-esslingen.de/pub/Mirrors/eclipse/oomph/epp/2023-09/R/eclipse-inst-jre-linux64.tar.gz
tar -xvf eclipse-inst-jre-linux64.tar.gz
cd eclipse-installer
./eclipse-inst
```
- 2. Elegimos Eclipse IDE por Enterprise Java and Web Developers
- 3. Seleccionamos el JVM y la carpeta de instalación (normalmente saldrán ya puestos) y le damos a [Install]
- 4. Le damos a [Launch] y pulsamos en aceptar el directorio de trabajo.
- 5. Para ponerlo en español: Help > Install new software
- 6. En Name ponemos Babel y en Location: https://download.eclipse.org/technology/babel/update-site/latest/
- 7. Tras unos segundos (¡tarda un poquito!), le damos a Babel Language Packs in Spanish, marcando la casilla y pulsamos [Next]
- 8. De nuevo tras varios segundos, le damos a [next], aceptamos la licencia y [Finish]. Cuando termine la instalación (miramos la esquina inferior derecha), reiniciamos Eclipse.
> ATENCIÓN: Hay paquetes que debemos seleccionar que NO están firmados. No pasa nada, está todo controlado ;D



### Seccion1

[Tabla de contenidos](#tabla-de-contenidos)

```console
#...
```
