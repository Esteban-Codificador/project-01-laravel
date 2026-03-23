# Project-01 — Portfolio Personal

Portfolio personal desarrollado con Laravel 12 y Tailwind CSS v4. Un sitio web moderno, responsivo y con tema oscuro para mostrar proyectos, habilidades e información de contacto.

## Tecnologias

- Laravel 12
- PHP 8.4
- PostgreSQL
- Tailwind CSS v4
- Vite
- Fuente: Outfit (Google Fonts)

## Requisitos

- PHP 8.4 o superior
- Composer
- Node.js y npm
- PostgreSQL

## Instalacion

1. Clonar el repositorio:

```bash
git clone https://github.com/Esteban-Codificador/project-01-laravel.git
cd project-01-laravel
```

2. Instalar dependencias de PHP:

```bash
composer install
```

3. Instalar dependencias de Node:

```bash
npm install
```

4. Copiar el archivo de entorno y generar la clave:

```bash
cp .env.example .env
php artisan key:generate
```

5. Configurar la base de datos en el archivo `.env`:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

6. Ejecutar las migraciones:

```bash
php artisan migrate
```

7. Compilar los assets:

```bash
npm run dev
```

8. Abrir el sitio en el navegador. Si usas Laravel Herd, el sitio estara disponible en `http://project-01.test`.

## Estructura del proyecto

```
resources/
  css/
    app.css            -> Variables CSS y estilos base
  views/
    layouts/
      app.blade.php    -> Layout principal (navbar, footer)
    welcome.blade.php  -> Pagina de inicio (hero, secciones)
```

## Personalizacion

Todos los colores del sitio se controlan desde variables CSS en `resources/css/app.css`. Para cambiar el color principal, modifica las variables en `:root`:

```css
:root {
    --portfolio-accent: #3375fc; /* Color principal */
    --portfolio-accent-hover: #599cff; /* Hover del color principal */
    --portfolio-bg: #0a0f1a; /* Fondo general */
}
```

## Autor

Esteban Avila
