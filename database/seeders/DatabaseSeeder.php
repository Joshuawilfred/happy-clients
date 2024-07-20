<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Holiday;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Client::factory(3)->create();
        Holiday::factory(5)->create();
    }
}
