# Proyecto Angular y Laravel

Este proyecto combina Angular y Laravel para crear una aplicación web. A continuación, se describen los pasos para instalar y ejecutar este proyecto en tu computadora.

## Requisitos previos

Asegúrate de tener instalado Composer, puedes descargarlo desde https://getcomposer.org/download/. se recomienda seguir los pasos
de instalación

Asegúrate de tener Node.js y npm (el administrador de paquetes de Node.js) instalados en tu computadora. Puedes descargarlos desde [nodejs.org](https://nodejs.org/). Se recomienda instalar la versión LTS.

Asegúrate de tener instalado Git, puedes descargarlo desde https://git-scm.com/. se recomienda instalar la opción: Standalone Installer

Para la gestión de bases de datos puedes instalar Xampp o Wampp

## Nota

Antes de continuar con los pasos de instalación espera a que Composer, Node.js y git sean instalados.

## Pasos de instalación

1.  **Clona el repositorio:**

    Abre tu terminal o línea de comandos y ejecuta el siguiente comando para clonar este repositorio:

    git clone https://github.com/Villegas-06/my-reddit-app.git

2.  **Accede al directorio del proyecto:**

    Ve al directorio del proyecto que acabas de clonar y escribe el siguiente comando:

    cd my-reddit-app

    2.1. **Accede a la carpeta del backend:**

        Luego de haber ejecutado el paso anterior dirigete a la carpeta del backend y escribe el siguiente comando:

        cd backend

    2.2. **Instala las dependencias del servidor Laravel:**

        Ejecuta el siguiente comando para instalar las dependencias del servidor Laravel:

        composer install

    2.3 **Copia el archivo .env**

        En la raiz del repositorio estará un archivo disponible .env que deberas copiar en la raiz de la carpeta backend.

    2.4 **Ejecuta las migraciones para crear la base de datos**

        NOTA: Si lo prefieres en la raiz del repositorio estará disponible una copia de la base de datos utilizada, para que solo tengas que importarla, si lo haces puedes saltarte este paso.

        En la terminal utilizando el comando:

        php artisan migrate.

        Este comando ejecutará un script interno propio de laravel el cual, nos creará las tablas necesarias para el flujo normal del proyecto

        NOTA: antes de realizar este paso asegurate que tienes en tu servidor de phpMyAdmin una base de datos llamada reddit_app.

    2.5. **Inicia el servidor de Laravel:**

        Ejecuta el siguiente comando para iniciar el servidor Laravel:

        php artisan serve

        El servidor Laravel se ejecutará en http://localhost:8000.

    2.6 **Llena las tablas de la base de datos**

        En tu navegador escribe la siguiente direccion:

        http://127.0.0.1:8000/api/fetch-data.

        Esto correrá un script el cual toma la información de la api: https://www.reddit.com/reddits.json para apartir de los datos que allí se encuentran llene las tablas correspondientes.

3.  **Accede al front del proyecto:**

    En otra terminal ve al directorio del proyecto que acabas de clonar y escribe el siguiente comando:

    cd my-reddit-app

    3.1 **Accede a la carpeta del frontend:**

        Luego de haber ejecutado el paso anterior dirigete a la carpeta del frontend y escribe el siguiente comando:

        cd frontend

    3.2 **Instala las dependencias del cliente Angular:**

        Ejecuta el siguiente comando para instalar las dependencias de Node:

        npm install

    3.3 **Añade angular:**

        Ejecuta el siguiente compando para instalar las dependencias de angular

        npm install -g @angular/cli

    3.4 **Inicia la aplicación Angular:**

        Ejecuta el siguiente comando para iniciar el servidor Angular:

        ng serve

        La aplicación Angular estará disponible en http://localhost:4200.

# Uso

Puedes acceder a la aplicación web visitando http://localhost:4200 en tu navegador. El servidor Express se encarga de las API y la aplicación Angular maneja la interfaz de usuario.
