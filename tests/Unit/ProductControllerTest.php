<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductControllerTest extends TestCase
{
    /**
     * Test creating a product instance.
     *
     * @return void
     */
    public function test_create_product_instance()
    {
        $data = [
            'category' => 'Cats',
            'name' => 'Persian Kitten',
            'description' => 'A lovely Persian kitten.',
            'price' => 300,
        ];

        $product = new Product($data);

        $this->assertEquals('Cats', $product->category);
        $this->assertEquals('Persian Kitten', $product->name);
        $this->assertEquals('A lovely Persian kitten.', $product->description);
        $this->assertEquals(300, $product->price);
    }

    /**
     * Test updating a product instance.
     *
     * @return void
     */
    public function test_update_product_instance()
    {
        $product = new Product([
            'category' => 'Dogs',
            'name' => 'Bulldog',
            'description' => 'A friendly bulldog.',
            'price' => 350,
        ]);

        $product->category = 'Dogs';
        $product->name = 'Golden Retriever';
        $product->description = 'A loyal golden retriever.';
        $product->price = 400;

        $this->assertEquals('Dogs', $product->category);
        $this->assertEquals('Golden Retriever', $product->name);
        $this->assertEquals('A loyal golden retriever.', $product->description);
        $this->assertEquals(400, $product->price);
    }

   
    /**
     * Test retrieving product attributes.
     *
     * @return void
     */
    public function test_retrieve_product_attributes()
    {
        $product = new Product([
            'category' => 'Birds',
            'name' => 'Parrot',
            'description' => 'A colorful parrot.',
            'price' => 150,
        ]);

        $this->assertEquals('Birds', $product->category);
        $this->assertEquals('Parrot', $product->name);
        $this->assertEquals('A colorful parrot.', $product->description);
        $this->assertEquals(150, $product->price);
    }
}
