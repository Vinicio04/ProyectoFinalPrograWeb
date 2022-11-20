<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV'
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'description' => 'Samsung Digital Camera'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2017',
            'slug' => 'gr5-2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'shipping_cost' => 6.79,
            'description' => 'Huawei GR 5 2017'
        ]);

    }
}
