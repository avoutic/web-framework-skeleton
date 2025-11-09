This is a base skeleton implementation using [avoutic/web-framework](https://github.com/avoutic/web-framework).

In this skeleton, a template for the database authentication config is provided in *config/auth/db_config.main.php*. It is NOT recommended to keep the configuration directory with authentication details (*config/auth/*) under version control with live credentials and it should then be added to *.gitignore*. If you only have `env()` statements in the authentication configs, you can safely keep the directory under version control.

Same goes for the local machine config modification (often used to enable debugging) located at *config/config_local.php*.

## How to install

To install the skeleton, you can use composer:
```
composer create-project avoutic/web-framework-skeleton my-project
```

Then install the dependencies:
```
composer install
```

You need to map `MysqliDatabase` to the `Database` interface in your `web_framework_overrides.php` file:
```
<?php
namespace WebFramework;

use DI;

return [
    Database\Database::class => DI\get(Mysql\MysqliDatabase::class),
];
```

## Start the database and cache

To test WebFramework Skeleton, you can start the MariaDB database with the provided test database.

```
docker-compose up -d
```

The database will be available at `localhost:3399` and the Redis server will be available at `localhost:3400`.

## Test the framework

You can check the status of the database and migrate the database:
```
php framework db:status
php framework db:migrate
```

Then you can test the framework:
```
php framework sanity:check
```

## How to run

To run the framework, you can use the following command:
```
php -S localhost:8000 public/index.php
```

Then you can access the framework at `http://localhost:8000`.
