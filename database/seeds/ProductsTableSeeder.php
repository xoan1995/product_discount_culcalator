<?php
use App\Product;
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
        $product = new Product();
        $product->description = 'hanh hoa';
        $product->price = '23';
        $product->discount_percent = '10';
        $product->save();


        $product = new Product();
        $product->description = 'hanh kho';
        $product->price = '23';
        $product->discount_percent = '10';
        $product->save();


        $product = new Product();
        $product->description = 'hanh tuoi';
        $product->price = '23';
        $product->discount_percent = '10';
        $product->save();

    }
}
