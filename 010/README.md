![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 010 - Files Upload

Uploading files and saving them into database

## Directories

| Directory             | MVC         |
|-----------------------|-------------|
| app/                  | Models      |
| resources/views/      | Views       |
| app/Http/Controllers/ | Controllers |

## Config files

* filesystems.php: This will set where the uploads where save locally
* env: Depending on your config in filesystems, you'll need set the FILESYSTEM_DRIVER variable here

## Migrations Models and Controllers

* Migration create:

```
php artisan make:migration create_<table_name>_table 
```

* Model create:

```
php artisan make:model <YourModel>
```

* Controller create = :

```
php artisan make:controller <YourController> --resource --model=<YourModel>
```

### Working on controller

1. Require the model: ```use App\YourModel;```

2. In the store method, instance the model:
```
$model = new YourModel;
```

3. Set the upload to instance and save to db:
```
$model->path = $request->file('name_of_file')->store('folder-name');
$model->save();
```

#### Check the Docs

*[Laravel: Files Upload](https://laravel.com/docs/7.x/requests#files)
*[Laravel: Relationship](https://laravel.com/docs/7.x/eloquent-relationships)
