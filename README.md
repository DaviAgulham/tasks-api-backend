# Backend - Tasks API

Este proyecto es una API REST para la gestión de tareas.  
Está construido con **Laravel 12** y provee endpoints para crear, leer, actualizar y eliminar tareas.


## **Requisitos previos**

- PHP >= 8.2
- Composer >= 2.x
- MySQL 
- Postman


## **Instalación**

1. Clonar el repositorio:

   git clone https://github.com/DaviAgulham/tasks-api-backend
   cd tasks-api-backend

3. Instalar dependencias:

   composer install

5. Crear archivo de entorno:

   cp .env.example .env

7. Generar key de aplicación:

   php artisan key:generate

9. Configurar base de datos en .env:

   DB_CONNECTION=mysql

   DB_HOST=127.0.0.1

   DB_PORT=3306

   DB_DATABASE=tasks_db

   DB_USERNAME=root

   DB_PASSWORD=

10. Crear la base de datos en MySQL:

    CREATE DATABASE tasks_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

12. Ejecutar migraciones y seeders:

    php artisan migrate --seed

14. Levantar servidor local:

    php artisan serve


## **Colección Postman**

Hay un archivo llamado tasks_api.postman_collection.json en la raíz del proyecto.

Importarlo en Postman para tener todos los endpoints listos.    

## **Notas**

Por defecto la API usa MySQL. Si prefieres SQLite:

Cambia en .env: DB_CONNECTION=sqlite

Comenta las otras variables de conexión.

Se incluye un seeder con datos iniciales para pruebas.
