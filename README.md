# Vemer Global

The existing Vemer Global website is now available as a Laravel 12 application. Its original PHP pages remain in `html/`; Laravel serves the migrated Blade views from `resources/views/`.

## Requirements

- PHP 8.2 or newer
- Composer

## Run locally

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Open the URL printed by `php artisan serve` (usually `http://127.0.0.1:8000`).

## Pages

- `/` — Home
- `/about` — About
- `/services` — Services
- `/contact` — Contact
- `/services/contract-business`
- `/services/ict-solutions`
- `/services/product-manufacturing`
- `/services/graphics-branding`
- `/services/sound-audio`

Stylesheets, scripts, and images are served from `public/`; source copies remain in the original `css/`, `Js/`, and `Images/` folders.
