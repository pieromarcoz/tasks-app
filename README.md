## Seguridad
La aplicación utiliza Laravel Sanctum para la autenticación y seguridad:
- Protección de rutas mediante middleware auth
- Tokens de acceso para API
- Protección CSRF
- Validación de sesiones

## Requisitos del Sistema

- PHP 8.2 o superior
- Composer
- Node 20 o superior

## Instalación

1. Clona el repositorio:
   ```
   git clone https://github.com/pieromarcoz/tasks-app
   cd tasks-app
   ```

2. Instala las dependencias de PHP:
   ```
   composer install
   ```

3. Copia el archivo de configuración:
   ```
   cp .env.example .env
   ```

4. Genera la clave de la aplicación:
   ```
   php artisan key:generate
   ```

5. Configura la base de datos en el archivo `.env`

6. Ejecuta las migraciones y los seeders:
   ```
   php artisan migrate --seed
   ```
 6. Instale las dependencias de node y corra vite:
   ```
   npm i && npm run dev
   ```

## Desarrollo

Para iniciar el servidor de desarrollo:

```
php artisan serve
```

