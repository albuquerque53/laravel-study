![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 003 - Rest verbalization and Dependence Injection

> On backend, is vital that the system manage (with security) all inputs and requests to database.

## Verbs

* Get: Get is used to GET things (like a html page, contents, etc)
* Post: This is used to send things to server (html form, url params, json body, etc)
* Put/Patch: Are used to edit things that are already saved
* Delete: Is used to delete things that are already saved too.

#### Where the verbs are used?

Usually, in Laravel, in the ```routes/*.php```. In this case, I use the web.php where are the main routes.
The sintax to create a route is: ```Route::verb('uri', controller@method);```

> All the methods of the routes are in Controllers

## Index method
The Index method has the task of Get all fields in the database.

**web.php**:
```
Route::get('/all', Controller@index)->name('getall');
```

**app/Http/Controllers/Controller**:
```
// Model require
use \App\Model;

// The same name that is in the route
public function index()
{
    // Model method 'all' will send 'SELECT * FROM table' to database
    $all = Model::all();

    // Return all field
    return $all;
}
```

## Show method
The method Show has the task to Get a specific information.

**web.php**:
```
// When the user access 'yourproj.com/users/<id/field>'
Route::get('/users/{field}', Controller@show)->name('getone');
```

**app/Http/Controllers/Controller**:
```
\\ Model 'Field' require
use \App\Field;

public function show(Field $field)
{
    /* The $field already is what you're looking for according with you URL Param
       If you want to check:  
        dd($field)
    */
    
    // Return the specified field
    return $field
}
```

## Store
The method Store will save data in db.

**web.php**:
```
Route::post('/new', Controller@store)->name('store');
```

**app/Http/Controllers/Controller**:
```
\\ Model 'Field' require
use \App\Field;
\\ Request require
use Illuminate\Http\Request;

public function store(Request $request)
{
    // Instance new field
    $field = new Field;
    
    // Add the value according to request
    $field->value1 = $request->value1;
    $field->value2 = $request->value2;
    $field->value3 = $request->value3;
    
    // Save the field
    $field->save();
}
```

## Update
The update will update (yes, I swear) the specified field.

**web.php**:
```
// When the user access 'yourproj.com/users/<id/field>'
Route::put('/edit/{field}', Controller@update)->name('edit');
```

**app/Http/Controllers/Controller**:
```
\\ Model 'Field' require
use \App\Field;
\\ Request require
use Illuminate\Http\Request;

public function update(Field $field, Request $request)
{
    // Like the show route, the $field already is setted
    // dd($field);
    
    // Update the field values to request values
    $field->value1 = $request->value1;
    $field->value2 = $request->value2;
    $field->value3 = $request->value3;
    
    // Save the changes
    $field->save();
}
```

## Destroy
The destroy will delete (yes, again, I swear) the specified field.

**web.php**:
```
// When the user access 'yourproj.com/users/<id/field>'
Route::delete('/destroy/{field}', Controller@destroy)->name('delete');
```

**app/Http/Controllers/Controller**:
```
\\ Model 'Field' require
use \App\Field;

public function destroy(Field $field)
{
    // Like the show and update routes, the $field already is setted
    // dd($field);
    
    // Delete method will destroy the field
    $field->delete();
}
```

### Take a Look in my routes and controller file:
* [web.php](https://github.com/g4br-4d3v/laravel-study/blob/master/003/routes/web.php)
* [TestController.php](https://github.com/g4br-4d3v/laravel-study/blob/master/003/app/Http/Controllers/Form/TestController.php)

## Check the Docs:
* [Laravel - Verbs and Routing](https://laravel.com/docs/7.x/routing#basic-routing)
* [Laravel - Dependency Injection](https://laravel.com/docs/7.x/controllers#dependency-injection-and-controllers)
