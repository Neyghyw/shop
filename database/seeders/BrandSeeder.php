<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private const BRANDS_COUNT = 20;
    public function run(): void
    {
        Brand::factory( self::BRANDS_COUNT) -> create();
    }
}
