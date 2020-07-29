![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 013 - Seeds & Factories

Using those resources to insert data into Database

## :seedling: Using Seeders

This is a quick way to insert a single random row in DB

1. First, you need to create a seed
```
php artisan make:seeder <TableName>TableSeeder
```

> Into database/seeds/<TableName>TableSeeder.php you'll find a method called run, he's in charge to execute the seeder instructions

2. After, use the DB Facade to select a right table to insert the data
```
Use Illuminate\Support\Facades\DB;

public function run()
{
    DB::table('table')->insert([
        
        // Data to insert
    
    ]);
}
```
3. Now you'll use the Str resource to generate random informations
```
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

public function run()
{
    DB::table('table')->insert([
        
        // Random Name
        'name' => Str::random(10),
        // Random VALID e-mail
        'email' => Str::random(5) . '@mail.com',
        // You need set a real password to control your user
        'password' => bcrypt('your_password')
        
    ]);
}
```

4. Your seed is ready, but you also need configure the Database Seeder
```
public function run()
{
    // You must set the right seeder
    $this->call(<TableName>TableSeeder::class);
}
```

5. Now, to reset your database & insert the seed data run:
```
php artisan migrate:refresh --seed
```

## :factory: Using Seed + Factory

If your need multiple random information in your DB, you'll love this

1. Create the Factory 
```
php artisan make:factory <Table>Factory --model=<ModelName>
```

2. Set the random/fake data rows

```
// database/factories/<Table>Factory

$factory->define(<TableModel>::class, function (Faker $faker) {
    return [
    
        // Random name
        'name' => $faker->name(),
        
        // Unique random mail
        'email' => $faker->unique()->email,
        
        // The password will be a random city name
        'password' => bcrypt($faker->city),
        
        // Token will be a random string with 10 chars
        'remember_token' => Str::random(10)
        
     ];
});

// Faker Methods: https://github.com/fzaninotto/Faker/blob/master/readme.md
```

Take a look in my [Factory](https://github.com/albuquerque53/laravel-study/blob/master/013/database/factories/UserFactory.php)

3. Your Factory is ready, now you need to define into your seed:

```
public function run()
{
    factory(App\<TableModel>::class, <number of rows to insert>)->create();
}
// 
```

Take a look in my [Seed](https://github.com/albuquerque53/laravel-study/blob/master/013/database/seeds/UsersTableSeeder.php)

4. Finally, run:
```
php artisan migrate:refresh --seed
```

### :page_facing_up: Check the Docs!
* [Migration](https://laravel.com/docs/7.x/migrations#rolling-back-migrations)
* [Seed](https://laravel.com/docs/7.x/seeding)
* [Factory](https://laravel.com/docs/7.x/seeding#using-model-factories)
