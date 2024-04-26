<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Poem;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $poems = Poem::all();

        foreach ($poems as $poem) {
            for ($i = 0; $i < 3; $i++) {
                Comment::create([
                    'content' => $faker->sentence(),
                    'poem_id' => $poem->id,
                ]);
            }
        }
    }
}
