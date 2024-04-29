<?php

namespace Database\Seeders;

use App\Models\Poet;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $poetCount = 100;

        for ($i = 1; $i <= $poetCount; $i++) {

            $bio = $faker->paragraph();

            $poet = Poet::create([
                'name' => "Poet $i",
                'bio' => $bio,
            ]);

            $randomBookCount = 1000;

            for ($j = 1; $j <= $randomBookCount; $j++)
            {
               $book = Book::create([
                    'poet_id' => $poet->rand($poet->id),
                    'title' => "book $j",
                ]);

            }
        }
    }
}
