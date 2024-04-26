<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::create([
            'title' => 'Sample Book',
            'author' => 'Sample Author',
            'publication_date' => '2023-01-01',
        ]);

        // You can add more books here
    }
}
