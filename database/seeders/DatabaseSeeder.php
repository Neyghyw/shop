<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Brand;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        define('BRANDS_COUNT', 20);
        define('CATEGORIES_COUNT', 75);
        define('PRODUCTS_COUNT', 150);

        Brand::factory(BRANDS_COUNT) -> create();

        for ($i = 1; $i <= CATEGORIES_COUNT; $i++) {
            Category::factory() -> create();
        }

        Product::factory(PRODUCTS_COUNT) -> create();
    }
}
