<?php

namespace Database\Factories;

use App\Models\Poem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoemFactory extends Factory
{
    protected $model = Poem::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph,
        ];
    }
}
