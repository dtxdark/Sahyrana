<?php

namespace Database\Seeders;

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
        // Seed your models here
        // Example: Call a seeder class for each model
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(PoemSeeder::class);
        $this->call(PoetSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CommentSeeder::class);
    }
}
