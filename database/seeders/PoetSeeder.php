<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poet;

class PoetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poet = Poet::create([
            'name' => 'Sample Poet',
            'bio' => 'This is a sample poet bio.',
        ]);

        // You can add more poets here
        // $poet2 = Poet::create([
        //     'name' => 'Another Poet',
        //     'bio' => 'This is another poet bio.',
        // ]);
    }
}
