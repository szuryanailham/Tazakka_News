<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\unit;
use App\Models\transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        unit::factory(20)->create();
        category::factory(20)->create();
        transaction::factory(20)->create();
    }
}
