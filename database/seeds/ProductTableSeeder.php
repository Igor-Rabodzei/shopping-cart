<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'super cool',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'super cool',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'super cool',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'super cool',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'super cool',
            'price' => 12
        ]);
        $product->save();
    }
}
