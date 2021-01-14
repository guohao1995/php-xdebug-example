# AppService.L200.OSS.PHPLinux.2

This is an example to use with XDEBUG to show slow response in PHP.

## Setting up application

### Install PHP dependancies

```bash
composer install
```

### Generate your APP key

```bash
php artisan key:generate
```

### .env file

You will need a database to connect to your application.

Copy the _.env.example_ file to _.env_

```bash
cp .env.example .env
```

Insert your database info inside your .env file

```php
DB_CONNECTION=mysql
DB_HOST=mydbhost.mysql.database.azure.com
DB_PORT=3306
DB_DATABASE=mydbname
DB_USERNAME=mydbuser
DB_PASSWORD=mydbpass
```

### Seed Database

```php
php artisan migrate
```