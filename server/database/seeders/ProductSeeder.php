<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
        [
            'name' => 'Product1',
            'price' => 1000,
            'description' => 'Product is for testing'
        ],[
            'name' => 'Product2',
            'price' => 2000,
            'description' => 'Product is for testing'
        ],[
            'name' => 'Product3',
            'price' => 3000,
            'description' => 'Product is for testing'
        ],[
            'name' => 'Product4',
            'price' => 4000,
            'description' => 'Product is for testing'
        ]];
        foreach($products as $product){
            Product::create($product);
        }
    }
}
