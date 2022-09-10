<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\hotel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        hotel::factory(10)->create(); 
    }
}
