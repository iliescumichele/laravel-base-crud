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
        //con il comando "php artisan db:seed" vedo le info nel terminale
        $this -> call( ComicsTableSeeder::class );
    }
}
