# fancy cover letter

## init environment vars
```
cp .env.example .env
```
replace `DB_*` values with your database details

## create database
create a new database with any name using the charset recommended by Laravel `utf8mb4_unicode_ci`

replace `DB_DATABASE` value in .env-file with your database name

## install dependencies
```
composer install
npm install
```

## create tables and seed tables with some random data
```
php artisan migrate:fresh
php artisan db:seed
```
## run the application
```
php artisan serve
npm run watch
```
