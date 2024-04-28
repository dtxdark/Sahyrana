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

        $poetCount = 50;

        for ($i = 1; $i <= $poetCount; $i++) {

            $bio = $faker->paragraph();

            $poet = Poet::create([
                'name' => "Poet $i",
                'bio' => $bio,
            ]);

            $randomBookCount = rand(5, 10);

            for ($j = 1; $j <= $randomBookCount; $j++) {
                Book::create([
                    'poet_id' => $poet->id,
                    'title' => "Book $j",
                ]);
            }
        }
    }
}
