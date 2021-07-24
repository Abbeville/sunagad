<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();
        Product::create([
            'category_id' => 1,
            'slug' => 'television',
            'title' => 'Television',
            'image' => '1.jpg',
            'price' => 5000,
            'old_price' => 4500,
            'stock' => 10,
            'description' => 'This is a full description computing device used for output process',
            'short_description' => 'This is a full description computing device used for output process',
        ]);
        Product::create([
            'category_id' => 1,
            'slug' => 'keyboard',
            'title' => 'Toys',
            'image' => '2.jpg',
            'price' => 2000,
            'old_price' => 1550,
            'stock' => 5,
            'description' => 'This is a full description computing device used for input process',
            'short_description' => 'This is a short description of a computing device used for input process',
        ]);
    }
}
