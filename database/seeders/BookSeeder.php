<?php

namespace Database\Seeders;

use App\Models\Poet;
use App\Models\Book;
use App\Models\Poem;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poets = [
            ['name' => 'Magtumguly', 'books' => [
                'Konul',
            ]],
            ['name' => 'Kerim Gurbannepesow', 'books' => [
                'Oylanma diyary',
            ]],
            ['name' => 'Gurbannazar Ezizow', 'books' => [
                'Turkmen Sahrasy',
            ]],
            ['name' => 'Ata Atajanow', 'books' => [
                'Teke Gyzy Tatyana',
            ]],
        ];

        foreach ($poets as $poetData) {
            $poet = Poet::create([
                'name' => $poetData['name'],
            ]);

            foreach ($poetData['books'] as $bookTitle) {
                $book = Book::create([
                    'poet_id' => $poet->id,
                    'title' => $bookTitle,
                ]);

                // Her bir kitaba rastgele şiirleri ekle
                Poem::factory(3)->create([
                    'book_id' => $book->id,
                ]);
            }
        }
    }
}
