![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 011 - Authentication

Working with authentication in a simple login system

### Laravel/ui

This is a quick way to generate the routes and views to authentication

1. ```composer require laravel/ui```
2. ```php artisan ui vue --auth```
3. After this you'll have the views and methods to create a login system


### Authentication Controller

1. Run in console ```php artisan make:controller <Controller>```

2. Require the Auth methods:
```
use Illuminate\Support\Facades\Auth;
```

3. Login:
```
$credentials = $request->only('email', 'password');
if(Auth::atempt($credentials)){
    echo 'Logged User'
}
```

4. Logout:
```
Auth::logout()
```

[-> Check the Docs <-](https://laravel.com/docs/7.x/authentication)
