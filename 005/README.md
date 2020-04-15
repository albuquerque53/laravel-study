![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 005 - Working with Migrations

## Directories
 
 * Migrations Folder: ```database/Migrations```

### Migration create with Artisan

1. Default way:
```php artsian make:migration <migration_name>```

:warning: There is a default sintax to name migrations: ```create_<plural_table_name>_table```
> *With this prefix, the migration method the file is automatically configured*

2. Using create flag
```php artisan make:migration <migration_name> --create=<table_name>```

> *In this case, you don't need use a def sintax to name your migration*

3. Alter table
```php artisan make:migration <migration_name> --table=<table_name>```

[My migration create_categories_table](https://github.com/g4br-4d3v/laravel-study/blob/master/005/database/migrations/2020_03_18_200602_create_categories_table.php)

### The table methods of migrations

* ```int()```: Auto-incrementing UNSIGNED BIGINT (primary key)
* ```timestamps()```: Adds nullable created_at and updated_at
* ```string()```: Varchar equivalent column
* ```text()```: Text equivalent column

[My migration create_posts_table](https://github.com/g4br-4d3v/laravel-study/blob/master/005/database/migrations/2020_03_18_202211_create_posts_table.php)

### Migrate CLI

* To **create the tables and columns** of migrations run: ```php artisan migrate```
* If you want to **undo the migrate**: ```php artisan migrate:rollback```
* Now, imagine you want to undo the **last 2 changes**: ```php artisan migrate:rollback --step=2```

#### Check the docs
[Laravel Migrations](https://laravel.com/docs/7.x/migrations)
