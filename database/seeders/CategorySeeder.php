<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Nature',
        ]);

        $category2 = Category::create([
            'name' => 'Love',
        ]);

        // You can add more categories here
    }
}
