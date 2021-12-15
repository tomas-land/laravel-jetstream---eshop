<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;

use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
        Product::create([
            'name' => 'laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
        Product::create([
            'name' => 'laptop 3',
            'slug' => 'laptop-3',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
        Product::create([
            'name' => 'laptop 4',
            'slug' => 'laptop-4',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
        Product::create([
            'name' => 'laptop 5',
            'slug' => 'laptop-5',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
        Product::create([
            'name' => 'laptop 6',
            'slug' => 'laptop-6',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => '1599',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Et odit eum, totam natus quam aliquid soluta odio aperiam dignissimos est, sit quos excepturi reiciendis commodi quis? Enim pariatur nesciunt, expedita maxime vel perspiciatis hic eum? Odio, voluptas?'
        ]);
    }
}
