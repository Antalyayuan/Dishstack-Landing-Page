# Dishstack (Laravel)

Laravel-backed landing page + lead capture with validated form submission, rate limiting, and environment-based configuration.

## Structure
- `routes/web.php` – landing page route and `POST /leads` endpoint.
- `app/Http/Controllers/LeadController.php` – persistence + error logging.
- `app/Http/Requests/StoreLeadRequest.php` – validation and basic normalization.
- `app/Models/Lead.php` & `database/migrations/*_create_leads_table.php` – lead schema.
- `resources/views/landing.blade.php` – migrated UI from the previous `index.php` using local assets.
- `public/` – static assets (`build/`, `landing/`, `user-uploads/`), manifest, and a minimal service worker.

## Getting started
1) Copy env and generate key:
```
cp .env.example .env
php artisan key:generate
```
2) Configure database credentials in `.env` (`DB_*`) and create the database.
3) Install dependencies:
```
composer install
```
4) Run migrations:
```
php artisan migrate
```
5) Serve:
```
php artisan serve
```

## Notes
- The lead form uses `POST /leads` with CSRF protection and a `throttle:10,1` rate limit.
- Static assets were copied from the legacy build into `public/`; add or replace them with your own pipeline as needed.
- Upload-style directories (`public/user-uploads`, `public/landing`) are git-ignored by default. Keep production uploads outside of version control.
- The leads table is named `dishstack_leads` to stay compatible with the previous PHP implementation.
