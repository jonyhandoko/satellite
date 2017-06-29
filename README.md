# satellite
Database Migration

# Instalation
``` bash
$ composer install
$ composer dumpautoload
```

# Make Migration
``` bash
$ php artisan make:migration create_test_table
```

# Push Migration Schema
``` bash
$ php artisan migration:run {prefix}
```
