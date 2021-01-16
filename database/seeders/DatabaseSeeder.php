<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        //Trabalho com factories nas versões anteriores a 8
        //factory(\App\Models\User::class, 10)->create();

        $this->call(EventsTableSeeder::class);
    }
}
