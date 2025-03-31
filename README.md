This is a base skeleton implementation using [avoutic/web-framework](https://github.com/avoutic/web-framework).

In this skeleton, a template for the database authentication config is provided in *config/auth/db_config.main.php*. It is NOT recommended to keep the configuration directory with authentication details (*config/auth/*) under version control and it should be added to *.gitignore*.

Same goes for the local machine config modification (often used to enable debugging) located at *config/config_local.php*.

## How to test

To test WebFramework Skeleton, you can start the MariaDB database with the provided test database.

```
docker-compose up -d
```

Now you can initialize the database and check the versions:
```
php scripts/db_init.php
php scripts/db_version.php
```
