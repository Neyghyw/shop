<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->random();
        $brand = Brand::all()->random();
        $name = ucfirst(fake() -> word());

        return [
            'name' => $name,
            'description' => fake() -> text(),
            'price' => fake()->numberBetween(0, 1000),
            'stock' => 0,
            'category_id' => $category,
            'brand_id' => $brand,
        ];
    }
}
