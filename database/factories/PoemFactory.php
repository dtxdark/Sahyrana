<?php
namespace Database\Factories;

use App\Models\Book;
use App\Models\Poem;
use App\Models\Poet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Poem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $poet = Poet::inRandomOrder()->first();

        if ($poet) {
            $book = $poet->books()->inRandomOrder()->first();
        } else {
            $book = Book::inRandomOrder()->first();
        }

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'likes' => $this->faker->numberBetween(0, 999999),
            'poet_id' => $poet->id ?? null,
            'book_id' => $book->id ?? null,
        ];
    }
}
