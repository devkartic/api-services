<?php

namespace Database\Factories;

use App\Models\CategoriesProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategoriesProductFactory extends Factory
{
    protected $model = CategoriesProduct::class;

    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 20),
            'product_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
