<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product= new \App\Product([
            'name'=>'Watch',
            'description'=>'Watch for men',
            'price'=>'26',


        ]);
        $category= new \App\Category([
            'name'=>'Watches',

        ]);

        $category->save();
        $product->category()->associate($category);
        $product->save();


    }
}
