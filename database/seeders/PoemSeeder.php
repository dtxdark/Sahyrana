<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Poet;
use App\Models\Book;
use App\Models\Poem;

class PoemSeeder extends Seeder
{
    public function run(int $categoryId = 1, int $poets = 30, int $booksCount = 50) :void
    {

        $category = Category::find($categoryId);

        if (!$category) {
            // Handle the case where the category is not found
            return;
        }

        $poets = Poet::factory()->count($poets)->create([
            'category_id' => $category->id,
        ]);

        $books = Book::factory()->count($booksCount)->create([
            'category_id' => $category->id,
        ]);

        foreach ($books as $book) {

            $poemCount = rand(10, 15);
            Poem::factory()->count($poemCount)->create([
                'book_id' => $book->id,
                'poet_id' => $poets->random()->id,
            ]);
        }
    }
}
