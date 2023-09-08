<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 50),
            'caption' => $this->faker->word(),
            'image_url' => $this->faker->imageUrl(640, 480, 'product', true),
        ];
    }
}
