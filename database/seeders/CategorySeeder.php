<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private const CATEGORIES_COUNT = 75;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= self::CATEGORIES_COUNT; $i++) {
            Category::factory() -> create();
        }
    }
}
