<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Using Seeder + DB Facade to insert
         * data into DB
         *
        DB::table('users')->insert([
            // Random String to Name
            'name' => Str::random(10),
            // Randon E-mail
            'email' => Str::random(5) . '@mail.com',
            // Crypted pass 'password'
            'password' => bcrypt('password')
        ]);
        // After that, run: php artisan migrate:refresh --seed
         */

        /*
         * Using Factory to insert
         * multiple records into DB
         */
        // User a factory of User and insert 10 rows (based on Factory file)
        factory(App\User::class, 10)->create();

        // After that, run: php artisan migrate:refresh --seed
    }
}
