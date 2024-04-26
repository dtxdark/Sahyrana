<?php

namespace Database\Factories;

use App\Models\Poet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoetFactory extends Factory
{
    protected $model = Poet::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
