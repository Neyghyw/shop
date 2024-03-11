<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private const PRODUCTS_COUNT = 150;
    public function run(): void
    {
        Product::factory(self::PRODUCTS_COUNT) -> create();
    }
}
