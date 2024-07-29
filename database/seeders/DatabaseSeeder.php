<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\VideogameFactory;
use Illuminate\Database\Seeder;
use App\Models\Videogame;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesTableSeeder::class
    ]);

    Videogame::factory(100)->create();
    }
}
