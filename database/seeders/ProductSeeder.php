<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private const PRODUCTS_COUNT = 150;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(self::PRODUCTS_COUNT) -> create();
    }
}
