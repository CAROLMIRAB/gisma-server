## Gisma CRUD - Readme

Este es un archivo Readme para configurar y comenzar a trabajar con GISMA CRUD. Proporcionará una guía básica para configurar el entorno de desarrollo y comenzar a construir aplicaciones web con Laravel.

## Requisitos previos

-   PHP 8.x instalado en su sistema.
-   Composer instalado en su sistema.
-   Un servidor web (por ejemplo, Apache o Nginx) configurado para ejecutar aplicaciones Laravel.
-   Base de datos PostgreSQL

## Configuración del proyecto

1. Clonar el repositorio de Laravel 9:

```shell
git clone https://github.com/CAROLMIRAB/gisma-server.git
```

````

2. Ingresar al directorio del proyecto:

```shell
cd gisma-server
```

3. Instalar las dependencias utilizando Composer:

```shell
composer install
```

## Configuración de entorno

1. Copiar el archivo `.env.example` y renombrarlo como `.env`:

```shell
cp .env.example .env
```

2. Generar la clave de aplicación:

```shell
php artisan key:generate
```

3. Configurar la conexión de base de datos en el archivo `.env`:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nombre_basedatos
DB_USERNAME=nombre_usuario
DB_PASSWORD=contraseña
```

4. Ejecutar las migraciones para crear las tablas de la base de datos:

```shell
php artisan migrate
```

## Servidor de desarrollo

1. Iniciar el servidor de desarrollo de Laravel:

```shell
php artisan serve
```

2. Acceder a la aplicación en su navegador web en la siguiente URL: `http://localhost:8000`.

## Documentación oficial

Para obtener más información sobre cómo trabajar con Laravel 9, consulte la documentación oficial en [https://laravel.com/docs/9.x](https://laravel.com/docs/9.x).

## Recursos adicionales

-   [Laravel 9 Announcement](https://laravel.com/blog/laravel-9)
-   [PHP 8 Release Announcement](https://www.php.net/releases/8.0/en.php)

¡Ahora estás listo para comenzar a desarrollar con Laravel 9 y PHP 8!

```

Este es el archivo `Readme.md` completo que puedes utilizar en tu proyecto Laravel 9 con PHP 8. ¡Espero que te sea útil!
```
````
