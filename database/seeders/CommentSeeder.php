<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\comment;
use App\Models\Poem;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $poems = Poem::all();

        foreach ($poems as $poem) {
           $numComments = rand(1, 10);
           for ($i = 0; $i < $numComments; $i++) {
                comment::create([
                    'content' => $faker->sentence(5),
                    'poem_id' => $poem->id,
                ]);
            }
        }
    }
}
