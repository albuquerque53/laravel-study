![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 006 - Working with Models and Business Rules

> How to manage models and set the business rules to make application stable and secure

### Ambient config
1. Create migration to 'posts' table
```
php artisan make:migration create_posts_table
```
2. Create model to 'talk' with database
```
php artisan make:model Post
```
3. Create controller to use model and return view
```
php artisan make:controller PostController
```
4. Run migration
```
php artisan migration
```

### There are two ways to write data in database
1. The 'manual' way:
* Controller:
```
Model->attribute1 = Request->attribute1;
Model->attribute2 = Request->attribute2;
Model->save();
```

2. The 'fillable' way:
* In Controller: 
```
// The '_token' must be ignored
Model->create(Request->except['_token']);
```
* In Model:
```
// attribute must be equal to Request attribute
protected $fillable = ['attribute1', 'attribute2'];
```

> The 'fillable way' may be used when you have too many attributes

### (extra) Automatic Model/Migration/Controller create
```
php artian make:model <name> -mcr
```

[-> Check the Docs <-](https://laravel.com/docs/7.x/eloquent#inserting-and-updating-models)