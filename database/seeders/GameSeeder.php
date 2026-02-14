<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert specific familiar titles
        Game::create([
            'title' => 'Ghost of Tsushima',
            'platform' => 'PlayStation 5',
            'status' => 'Completed',
            'release_year' => 2020,
        ]);

        Game::create([
            'title' => 'Black Myth: Wukong',
            'platform' => 'PC',
            'status' => 'Playing',
            'release_year' => 2024,
        ]);

        Game::create([
            'title' => 'Resident Evil 2',
            'platform' => 'PC',
            'status' => 'Completed',
            'release_year' => 2019,
        ]);

        // Generate 10 random games using the factory
        Game::factory(10)->create();
    }
}
