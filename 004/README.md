![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 004 - Artisan and Resources

Automating with Artisan

### Using Artisan to Controllers

1. Simple Controller:
```
php artsian make:Controller <ControllerName>
```

> Will create a Controller file in app/Http/Controllers/

2. Controller with database methods:
```
php artsian make:Controller <ControllerName> --resource
```

> With the flag '--resource', the methods like store, update, and others are already created in Controller.

3. Controllers with db methods AND according with your application Model:
```
php artisan make:Controller <ControllerName> --resource --model=<Model>
```

> In this case, the dependency injection are automatically applied to your specified Model.

[My UserController.php](https://github.com/g4br-4d3v/laravel-study/blob/master/004/app/Http/Controllers/Form/UserController.php)

### "Resourcing" the routes

Using the 'resource' static method, automatically, all routes are created according to controller methods

```
// This is the web.php, check the routes with: php artisan routes:list
Route::resource('/', '<YourControllerHere>');
```

[My web.php](https://github.com/g4br-4d3v/laravel-study/blob/master/004/routes/web.php)

### Changing the defaults 'uris' of resource

> Sometimes, you need specific uri's to use in your application


```
app/Providers/AppServiceProvider.php

public function boot()
{ 
    Route::resourceVerbs([
        'defaultUri' => 'newUri',
        'otherDefaultUri' => 'otherNewUri'
    ]);
}
```

[My AppServiceProvider](https://github.com/g4br-4d3v/laravel-study/blob/master/004/app/Providers/AppServiceProvider.php)

### Check the Docs
* [Artisan Resource](https://laravel.com/docs/7.x/controllers#resource-controllers)
* [Change Resource URIs](https://laravel.com/docs/7.x/controllers#restful-localizing-resource-uris)
