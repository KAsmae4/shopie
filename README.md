# Laravel 9 & React js - Ecommerce application

## Screenshots

![preview img](/preview.png)

## Run Locally

Clone the project

```bash
    git clone https://github.com/KAsmae4/laravel-react-e-commerce.git project-name
```

Go to the project directory

```bash
  cd project-name
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login Admin

-   email = admin@example.com
-   password = 123
