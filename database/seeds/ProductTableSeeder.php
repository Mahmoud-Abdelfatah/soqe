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
        $product = new\App\Product([
           
                   'imagePath' =>'https://books.google.com/books/content/images/frontcover/K_yxDAAAQBAJ?fife=w200-h300',
                   'title' => 'Haary Potter',
                   'description' => 'Super cool - at least a child.',
                   'price' => 10,
        ]);

        $product->save();


                $product = new\App\Product([
           
                   'imagePath' =>'https://images-na.ssl-images-amazon.com/images/I/7163H6NGNVL._SX366_BO1,204,203,200_.gif',
                   'title' => 'Jake chan as action star',
                   'description' => 'Super cool - at least a child.',
                   'price' => 20,
        ]);

        $product->save();


                $product = new\App\Product([
           
                   'imagePath' =>'https://d1466nnw0ex81e.cloudfront.net/n_iv/120/1088219.jpg',
                   'title' => 'Jacke stant man',
                   'description' => 'Super cool - at least a child.',
                   'price' => 10,
        ]);

        $product->save();


                $product = new\App\Product([
           
                   'imagePath' =>'http://podcastonfire.com/wp-content/uploads/2009/12/jackiechanloweiyears-219x300.jpg',
                   'title' => 'The lowei years',
                   'description' => 'Super cool - at least a child.',
                   'price' => 30,
        ]);

        $product->save();



                $product = new\App\Product([
           
                   'imagePath' =>'https://yams.akamaized.net/Assets/47/350/p1004235047.jpg',
                   'title' => 'Kill Intrigue',
                   'description' => 'Super cool - at least a child.',
                   'price' => 15,
        ]);

        $product->save();




                $product = new\App\Product([
           
                   'imagePath' =>'https://books.google.com/books/content/images/frontcover/K_yxDAAAQBAJ?fife=w200-h300',
                   'title' => 'Haary Potter',
                   'description' => 'Super cool - at least a child.',
                   'price' => 25,
        ]);

        $product->save();


    }
}
