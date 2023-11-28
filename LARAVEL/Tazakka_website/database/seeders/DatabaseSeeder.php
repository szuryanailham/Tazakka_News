<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        News::factory(50)->create();
        Category::create([
            'name' => 'education',
            'slug' => 'ini adalah topik seputar pendidikan dan kurikulum boarding school'
        ]);
    
        Category::create([
            'name' => 'school',
            'slug' => 'ini adalah topik seputar agenda sekolah dan acara tahunan sekolah'
        ]);
        Category::create([
            'name' => 'social',
            'slug' => 'ini adalah topik seputar hubungan sekolah dengan mitra mitra lain'
        ]);
    }
}
