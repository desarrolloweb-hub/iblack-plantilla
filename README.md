# Iblack Plantilla

Plantilla web basada en Laravel 13 y Vite. Este repositorio incluye el frontend de plantillas en `resources/views` junto con la estructura estándar de una aplicación Laravel.

## Estado

- Proyecto listo para subir a GitHub.
- `vendor/` y `node_modules/` no deben subirse al repositorio.
- `composer.lock` y `package-lock.json` deben estar versionados.

## Requisitos

- PHP 8.3+
- Composer
- Node.js 18+ y npm
- SQLite (o la base de datos que prefieras configurar)

## Instalación local

```bash
composer install
npm install
```

## Configuración del entorno

```bash
cp .env.example .env
php artisan key:generate
```

Si usas SQLite:

```bash
touch database/database.sqlite
```

## Migraciones

```bash
php artisan migrate
```

## Desarrollo

```bash
npm run dev
```

Abre `http://localhost:5173` o la URL que muestre Vite.

## Compilación para producción

```bash
npm run build
```

## GitHub / Control de versiones

```bash
git add .
git commit -m "Initial project setup"
git branch -M main
git remote add origin <URL-del-repositorio>
git push -u origin main
```

## Archivos que no deben subirse

- `vendor/`
- `node_modules/`
- `.env`
- `storage/` generado
- `public/build`

## Notas

- Si deseas usar otro motor de base de datos, actualiza `DB_CONNECTION` y los parámetros correspondientes en `.env`.
- Si agregas más paquetes frontend o backend, recuerda actualizar `composer.lock` y `package-lock.json`.
