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
       


      $product=new \App\Product([
        'category_product'=>'Phones',
        'name_brand'=>'Apple',
        'name_product'=>'Iphone 6',
        'product_description'=>'The newest Apple product on the market',
        'cover_image'=>'img/iphone6.jpg'
    ]);

      $product->save();

      $product=new \App\Product([
        'category_product'=>'Phones',
        'name_brand'=>'Samsung',
        'name_product'=>'Galaxy X',
        'product_description'=>'The newest Samsung product on the market',
        'cover_image'=>'img/samsung.jpg'
    ]);

      $product->save();

     

      $product=new \App\Product([
        'category_product'=>'TV',
        'name_brand'=>'LG',
        'name_product'=>'SmartTV,FULL HD',
        'product_description'=>'The perfect SmartTV for your home !',
        'cover_image'=>'img/lg.jpeg'
    ]);

      $product->save();


      $product=new \App\Product([
        'category_product'=>'TV',
        'name_brand'=>'LG',
        'name_product'=>'SmartTV,4K',
        'product_description'=>'The perfect SmartTV for your home !',
        'cover_image'=>'img/lg.jpeg'
    ]);

      $product->save();


    

      $product=new \App\Product([
        'category_product'=>'Tablets',
        'name_brand'=>'Samsung',
        'name_product'=>'Galaxy Tab E T560',
        'product_description'=>'Meet the tablet that is going to make your life easier !',
        'cover_image'=>'img/tablet.jpg'
    ]);

      $product->save();

      
      $product=new \App\Product([
        'category_product'=>'Tablets',
        'name_brand'=>'Samsung',
        'name_product'=>'Galaxy Tab E T561',
        'product_description'=>'All you need just in one Tablet!',
        'cover_image'=>'img/tablet.jpg'
    ]);

      $product->save();


      $product=new \App\Product([
        'category_product'=>'Tablets',
        'name_brand'=>'Samsung',
        'name_product'=>'Galaxy Tab E T561',
        'product_description'=>'All you need just in one Tablet!',
        'cover_image'=>'img/tablet.jpg'
    ]);

      $product->save();

       $product=new \App\Product([
      'category_product'=>'Phones',
      'name_brand'=>'Samsung',
      'name_product'=>'Galaxy X',
      'product_description'=>'The newest Samsung product on the market',
      'cover_image'=>'img/samsung.jpg'
  ]);

    $product->save();

     $product=new \App\Product([
        'category_product'=>'Phones',
        'name_brand'=>'Samsung',
        'name_product'=>'Galaxy X',
        'product_description'=>'The newest Samsung product on the market',
        'cover_image'=>'img/samsung.jpg'
    ]);

      $product->save();
    }

   
}
