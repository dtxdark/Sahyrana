<?php

namespace Database\Seeders;

use App\Models\Poem;
use Database\Factories\PoemFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {


        {
            $this->call([
                UserSeeder::class,
                BookSeeder::class,
                PoemSeeder::class,
                CategorySeeder::class,
                CommentSeeder::class]);
        }
        Poem::factory(50)->create();
    }
}
