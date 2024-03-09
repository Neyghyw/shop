<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::all();
        $fake_name = fake() -> word();

        if ($categories -> isEmpty()) {
            return ['name' => $fake_name];
        }

        $random_category = Category::all() -> random();
        $new_category = new Category;
        $new_category -> name = $fake_name;
        $new_category -> parent() -> associate($random_category);
        return $new_category -> getAttributes();
    }
}
