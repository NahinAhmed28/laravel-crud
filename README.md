# Laravel CRUD

Laravel CRUD is a Laravel application for database-backed create, read, update, and delete workflows.

## Features

- CRUD workflow foundation
- Database-backed records and forms
- Laravel controller/model structure
- Blade/Vite front-end asset workflow

## Modules

- Entity module: managed records, fields, and validation
- Controller module: CRUD request handling
- View module: list, create, edit, show, and delete screens
- Data module: migrations, models, seeders, and database persistence
- Route module: web routes and resource endpoints

## System Architecture

The system follows Laravel MVC architecture. Routes send requests to controllers, controllers validate input and coordinate actions, models persist records, and views render CRUD screens. The database stores application entities and migration-defined schema.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/laravel-crud.git
cd laravel-crud
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
