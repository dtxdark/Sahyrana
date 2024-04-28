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
        Poem::factory(50)->create();

        {
            $this->call([
                UserSeeder::class,
                PoemSeeder::class,
                BookSeeder::class,
                CategorySeeder::class,
                CommentSeeder::class]);
        }
    }
}
