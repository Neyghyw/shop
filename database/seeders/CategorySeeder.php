<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private const CATEGORIES_COUNT = 75;
    public function run(): void
    {
        for ($i = 1; $i <= self::CATEGORIES_COUNT; $i++) {
            Category::factory() -> create();
        }
    }
}
