<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name,
            'publication_date' => $this->faker->date(),
        ];
    }
}
