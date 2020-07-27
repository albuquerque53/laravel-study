<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // This method must call the Seeder Class
        $this->call(UsersTableSeeder::class);
    }
}
