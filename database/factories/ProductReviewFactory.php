<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 50),
            'user_id' => $this->faker->numberBetween(1, 50),
            'ratings' => $this->faker->numberBetween(1, 5),
        ];
    }
}
