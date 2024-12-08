<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
        
            [
                'category' => 'Pet',
                'name' => 'Labrador Retriever',
                'description' => 'Labradors are medium to large-sized dogs with a muscular build. They have a broad head, expressive eyes, and a thick, water-resistant coat that comes in three colors: black, yellow, and chocolate',
                'price' => 100
            ],
            [
                'category' => 'Pet',
                'name' => 'German Shepherd',
                'description' => 'German Shepherds are large, strong, and athletic. They have a well-defined, muscular body with a thick double coat that can be black and tan, sable, or all black',
                'price' => 250.00
            ],
            [
                'category' => 'Pet',
                'name' => 'Siamese Cat',
                'description' => 'Siamese cats are sleek and slender with a graceful, athletic build. They have a wedge-shaped head, large, almond-shaped blue eyes, and large ears. ',
                'price' => 450.00
            ],
            // New DIY Pet Kit category
            [
                'category' => 'DIY Pet Kit',
                'name' => 'Pet DIY Toy Kit',
                'description' => 'A kit with all materials to create fun toys for your pet.',
                'price' => 25.99
            ],
            [
                'category' => 'DIY Pet Kit',
                'name' => 'Pet Grooming Kit',
                'description' => 'A DIY grooming kit to take care of your pet’s hygiene.',
                'price' => 35.99
            ]
        ]);
    }
}
