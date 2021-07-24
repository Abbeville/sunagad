<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electroninc device and gadgets',
        ]);
        Category::create([
            'name' => 'Toys',
            'description' => 'Items for kids',
        ]);
    }
}
