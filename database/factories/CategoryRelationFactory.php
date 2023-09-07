<?php

namespace Database\Factories;

use App\Models\CategoryRelation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategoryRelationFactory extends Factory
{
    protected $model = CategoryRelation::class;

    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 20),
            'category_parent_id' => $this->faker->numberBetween(10, 30),
        ];
    }
}
