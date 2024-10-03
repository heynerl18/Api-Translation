# LandSys

Se emplea Query Builder para la interacción con las tablas.

## Pasos para Levantar el Proyecto

Sigue estos pasos para configurar y levantar el proyecto en tu entorno local:

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/tu_usuario/tu_repositorio.git


2. Navega a la carpeta del proyecto:
  cd tu_repositorio

3. Instala las dependencias:
  `composer install`

4. Copia el archivo de configuración del entorno:
  `cp .env.example .env`

5. Configura tu archivo .env:

  Ajusta la configuración de la base de datos y otras variables según tus necesidades.

6. Genera la clave de la aplicación:
  `php artisan key:generate`

7. Ejecuta las migraciones:

  Ejecutar todas las migraciones a la vez:
  `php artisan migrate`

8. Ejecutar los seeders uno por uno
  `php artisan db:seed --class=NombreDelSeeder`

9. Inicia el servidor de desarrollo:
  `php artisan serve`

