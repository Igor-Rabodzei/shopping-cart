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
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://read-online.in.ua/inf/book/book453/imgbig453.png',
            'title' => 'Life is a dream',
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 10
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://read-online.in.ua/inf/book/book453/imgbig453.png',
            'title' => 'Life is a dream',
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 10
        ]);
        $product->save();
        $product = new App\Product([
            'imagePath' => 'http://static.librebook.me/uploads/pics/01/49/841.jpg',
            'title' => 'Smoke Bellew',
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 12
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'http://read-online.in.ua/inf/book/book453/imgbig453.png',
            'title' => 'Life is a dream',
            'description' => 'Lorem ipsum dolor sit amet, soleat ridens te vis, blandit maiestatis interpretaris usu ei. Pri expetenda vituperatoribus ad, at probo incorrupte inciderint eos. Rebum dissentiunt nec at, ad pro soluta concludaturque, eu vis noster appareat platonem.',
            'price' => 10
        ]);
        $product->save();
    }
}
