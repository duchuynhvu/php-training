## Server startup

```bash
php artisan serve
```

## Login

```bash
username: view in database
password: secret
```


## Getting started

### Install packages:
```bash
composer install
```

### Update packages:
```bash
composer update
```

### Create database
```bash
php artisan migrate
```

### Insert data
```bash
php artisan db:seed --class=UsersTableSeeder
```

### Re-building the database:
```bash
php artisan migrate:refresh --seed
```

### Clear cache at changes in .inv file
```bash
php artisan cache:clear
```
