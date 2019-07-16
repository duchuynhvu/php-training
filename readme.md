**Login**
username: view in database
password: secret

Getting started
**Download package:**
composer install

**Update package:**
composer update

**Run migrations**
\>php artisan migrate

**Run Seeders:**
\>php artisan db:seed --class=UsersTableSeeder

**Run development server:**
\>php artisan serve

**Re-building the database:**
\>php artisan migrate:refresh --seed

**Clear cache at changes in .inv file:**
\>php artisan cache:clear
