<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    private const BRANDS_COUNT = 20;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory( self::BRANDS_COUNT) -> create();
    }
}
